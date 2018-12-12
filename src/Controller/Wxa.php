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
        if (!$req['wechatOpenId']) {
            $this->logger->info('Invalid data', $this->request->getParameterReference('post'));
            return $this->err('error');
        }

        $user = wei()->curUserV2->loginBy(['wechatOpenId' => $req['wechatOpenId']]);

        if ($req['source'] === 'auth') {
            $user->isValid = true;
            $user->regTime = date('Y-m-d H:i:s');
        }

        $user->save([
            'nickName' => $req['nickName'],
            'headImg' => $req['avatarUrl'],
            'gender' => $req['gender'],
            'province' => $req['province'],
            'city' => $req['city'],
            'country' => $req['country'],
        ]);
        return $this->suc();
    }
}
