<?php

namespace Miaoxing\Wxa\Middleware;

class Auth extends \Miaoxing\Plugin\Middleware\Base
{
    /**
     * {@inheritdoc}
     *
     * 根据URL请求参数初始化微信OpenID
     */
    public function __invoke($next)
    {
        // TODO safeUrl
        if (isset($this->request['wxaOpenId'])) {
            wei()->curUser->loginBy(['wechatOpenId' => $this->request['wxaOpenId']]);
        }

        return $next();
    }
}
