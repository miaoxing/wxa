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
        if (!isset($this->request['wxaOpenId'])) {
            return $next();
        }

        wei()->curUser->loginBy(['wechatOpenId' => $this->request['wxaOpenId']], ['isValid' => false]);

        $removeKeys = ['wxaOpenId'];
        $queries = array_diff_key($this->request->getQueries(), array_flip($removeKeys));
        $newUrl = $this->request->getUrlFor($this->request->getBaseUrl() . $this->request->getPathInfo());
        if ($queries) {
            $newUrl .= '?' . http_build_query($queries);
        }

        return $this->response->redirect($newUrl);
    }
}
