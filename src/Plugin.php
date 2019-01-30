<?php

namespace Miaoxing\Wxa;

use Miaoxing\Plugin\BasePlugin;
use Miaoxing\Wxa\Middleware\Auth;
use Miaoxing\Wxa\Payment\WxaPay;
use Wei\BaseController;

class Plugin extends BasePlugin
{
    /**
     * {@inheritdoc}
     */
    protected $name = '微信小程序';

    public function onPreControllerInit(BaseController $controller)
    {
        $controller->middleware(Auth::class);
    }

    public function onPaymentGetTypes(&$types)
    {
        $types['wxaPay'] = [
            'id' => 'wxaPay',
            'type' => 'wxaPay',
            'name' => '微信支付',
            'displayName' => '微信支付-小程序',
            'image' => '/assets/images/payments/v2/wechat.png',
            'class' => WxaPay::class,
        ];
    }

    public function onBodyEnd()
    {
        if ($this->app->isAdmin()) {
            return;
        }

        if (!wei()->share->getImage()) {
            $shareImage = wei()->setting('wechat.shareImage');
            $this->event->trigger('postImageLoad', [&$shareImage]);
            wei()->share->setImage($shareImage);
        }

        if ($this->app->getControllerAction() === 'users/login') {
            $reLaunchUrl = wei()->wxaUrl($this->request['next']);
        } else {
            $reLaunchUrl = '';
        }

        $this->display(compact('reLaunchUrl'));
    }
}
