<?php

namespace Miaoxing\Wxa\Controller;

use Miaoxing\Plugin\BaseController;

class Wxa extends BaseController
{
    protected $guestPages = [
        'wxa',
    ];

    public function loginAction($req)
    {
        // 1. code换取OpenId
        $api = wei()->wechatAccount->getCurrentAccount()->createApiService();
        $ret = $api->jsCode2Session(['js_code' => $req['code']]);
        if ($ret['code'] !== 1) {
            return $ret;
        }

        // 2. 创建用户并登录
        $data = isset($ret['unionid']) ? ['wechatUnionId' => $ret['unionid']] : [];
        $data['isValid'] = false;
        wei()->curUser->loginBy(['wechatOpenId' => $ret['openid']], $data);

        return $ret;
    }
}
