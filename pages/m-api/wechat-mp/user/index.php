<?php

use Miaoxing\File\Service\File;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\Service\User;
use Miaoxing\WechatMp\Service\WechatMpUserModel;
use Wei\Req;
use Wei\Time;

return new class extends BaseController {
    public function patch(Req $req)
    {
        $mpUser = WechatMpUserModel::findByOrFail('userId', User::id());

        $mpUser->save([
            'nickName' => $req['nickName'],
            'gender' => $req['gender'],
            'language' => $req['language'],
            'city' => $req['city'],
            'province' => $req['province'],
            'country' => $req['country'],
            'avatarUrl' => $this->getAvatarUrl($req['avatarUrl'], $mpUser->openId),
            'origAvatarUrl' => $req['avatarUrl'],
            'updatedInfoAt' => Time::now(),
        ]);

        // 同步资料到主表
        $user = User::cur();
        $columns = [
            'nickName',
            'sex' => 'gender',
            'city',
            'province',
            'country',
            'avatar' => 'avatarUrl',
        ];
        foreach ($columns as $column => $mpColumn) {
            if (is_int($column)) {
                $column = $mpColumn;
            }
            // NOTE: 暂无修改资料的入口，全部同步到用户主表
            $user->set($column, $mpUser->get($mpColumn));
        }
        if ($user->isChanged()) {
            $user->save();
        }

        return suc();
    }

    /**
     * @todo 移到队列去下载
     */
    private function getAvatarUrl($avatarUrl, $openId)
    {
        if (!$avatarUrl) {
            return '';
        }

        $customName = implode('/', [
            wei()->upload->getDir(),
            wei()->app->getId(),
            'wechat-mp',
            // 前 6 位固定，因此使用后面字符层的分目录
            substr($openId, -3),
            $openId . '.jpg',
        ]);

        $ret = File::upload($avatarUrl, '', $customName);
        if ($ret->isSuc()) {
            $avatarUrl = $ret['url'];
        }

        return $avatarUrl;
    }
};
