<?php

namespace MiaoxingTest\WechatMp\Pages\MApi\Login;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Wechat\Service\WechatAccountModel;
use Miaoxing\Wechat\Service\WechatApi;

class IndexTest extends BaseTestCase
{
    public function testPost()
    {
        $wechatApi = $this->getServiceMock(WechatApi::class, [
            'jsCode2Session',
        ]);

        $account = $this->getModelServiceMock(WechatAccountModel::class, [
            'findBy',
            'createApiService',
        ]);

        $account->expects($this->once())
            ->method('createApiService')
            ->willReturn($wechatApi);

        $wechatApi->expects($this->once())
            ->method('jsCode2Session')
            ->willReturn([
                'code' => 0,
                'message' => 'ok',
                'openid' => 'test-openid',
                'unionid' => 'test-unionid',
            ]);

        $account->expects($this->once())
            ->method('findBy')
            ->willReturn($account);

        $ret = Tester::request(['code' => 'test'])->post('/m-api/wechat-mp/login');
        $this->assertRetSuc($ret);
    }
}
