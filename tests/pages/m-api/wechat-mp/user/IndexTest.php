<?php

namespace MiaoxingTest\WechatMp\Pages\MApi\WechatMp\User;

use Miaoxing\File\Service\File;
use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Service\User;
use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Services\Service\SexConst;
use Miaoxing\User\Service\UserModel;
use Miaoxing\WechatMp\Service\WechatMpUserModel;

class IndexTest extends BaseTestCase
{
    public function testPatch()
    {
        $user = UserModel::save([
            'name' => '小程序用户'
        ]);
        User::loginByModel($user);
        WechatMpUserModel::saveAttributes(['userId' => $user->id]);

        $file = $this->getServiceMock(File::class, ['upload']);
        $file->expects($this->once())
            ->method('upload')
            ->with('https://test.com/1.jpg')
            ->willReturn(suc([
                'url' => 'https://test.com/2.jpg'
            ]));

        $ret = Tester
            ::request([
                'nickName' => 'test',
                'gender' => '1',
                'language' => 'zh-CN',
                'city' => '深圳',
                'province' => '广东',
                'country' => '中国',
                'avatarUrl' => 'https://test.com/1.jpg',
            ])
            ->patch('/m-api/wechat-mp/user');

        $this->assertRetSuc($ret);

        $mpUser = WechatMpUserModel::findByOrFail('userId', User::id());

        $this->assertSame([
            'nickName' => 'test',
            'gender' => SexConst::SEX_MALE,
            'language' => 'zh-CN',
            'city' => '深圳',
            'province' => '广东',
            'country' => '中国',
            'avatarUrl' => 'https://test.com/2.jpg',
            'origAvatarUrl' => 'https://test.com/1.jpg',
        ], $mpUser->toArray([
            'nickName',
            'gender',
            'language',
            'city',
            'province',
            'country',
            'avatarUrl',
            'origAvatarUrl',
        ]));
        $this->assertNotNull($mpUser->updatedInfoAt);

        $user->reload();
        $this->assertSame([
            'nickName' => 'test',
            'sex' => SexConst::SEX_MALE,
            'city' => '深圳',
            'province' => '广东',
            'country' => '中国',
            'avatar' => 'https://test.com/2.jpg',
        ], $user->toArray([
            'nickName',
            'sex',
            'city',
            'province',
            'country',
            'avatar',
        ]));
    }
}
