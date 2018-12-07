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
        $user = wei()->curUserV2->loginBy(['wechatOpenId' => $ret['openid']], $data);
        $ret['user'] = $user;

        return $ret;
    }

    public function updateUserAction($req)
    {
        $user = wei()->curUserV2->loginBy(['wechatOpenId' => $req['wechatOpenId']]);
        $user->save([
            'nickName' => $req['userInfo']['nickName'],
            'headImg' => $req['userInfo']['avatarUrl'],
            'gender' => $req['userInfo']['gender'],
            'province' => $req['userInfo']['province'],
            'city' => $req['userInfo']['city'],
            'country' => $req['userInfo']['country'],
        ]);
        return $this->suc();
    }
}
