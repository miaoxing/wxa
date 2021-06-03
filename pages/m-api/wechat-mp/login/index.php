<?php

use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\Service\User;
use Miaoxing\User\Service\UserModel;
use Miaoxing\Wechat\Service\WechatAccountModel;
use Miaoxing\WechatMp\Service\WechatMpUserModel;

return new class extends BaseController {
    protected $controllerAuth = false;

    public function post($req)
    {
        // 1. code 换取 OpenID
        $account = WechatAccountModel::findBy('type', WechatAccountModel::TYPE_MP);
        $api = $account->createApiService();
        $ret = $api->jsCode2Session(['js_code' => $req['code']]);
        if ($ret['code'] !== 0) {
            return $ret;
        }

        // 2. 创建用户并登录
        $mpUser = WechatMpUserModel::findOrInitBy(['openId' => $ret['openid']]);
        if (isset($ret['unionid'])) {
            $mpUser->unionId = $ret['unionid'];
        }

        if ($mpUser->isNew()) {
            $user = UserModel::save();
            $mpUser->userId = $user->id;
        } else {
            $user = $mpUser->user;
        }

        $mpUser->save();

        $ret = User::loginByModel($user);

        return $ret;
    }
};
