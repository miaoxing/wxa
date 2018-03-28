<?php

namespace Miaoxing\Wxa;

use Miaoxing\Plugin\BasePlugin;
use Miaoxing\Wxa\Middleware\Auth;
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
}
