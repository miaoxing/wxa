<?php

use Miaoxing\Plugin\BaseController;
use Miaoxing\Wechat\Service\WechatAccountModel;

return new class extends BaseController {
    public function get()
    {
        return $this->getAccount()->toRet();
    }

    public function patch($req)
    {
        $account = $this->getAccount();

        $account->save($req);

        return $account->toRet();
    }

    protected function getAccount()
    {
        return WechatAccountModel::findOrInitBy(['type' => WechatAccountModel::TYPE_MP]);
    }
};
