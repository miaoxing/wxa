<?php

namespace Miaoxing\Wxa\Payment;

use Miaoxing\Order\Service\Order;
use Miaoxing\Payment\Payment\WechatPayV3;

class WxaPay extends WechatPayV3
{
    /**
     * {@inheritdoc}
     */
    public function getFormFile()
    {
        return '@wxa/admin/payments/_wxaPay.php';
    }

    /**
     * {@inheritdoc}
     */
    public function createPayData(Order $order, $testData = [])
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function submit(array $options, $order = null)
    {
        $payment = parent::createPayData($order);

        $this->event->trigger('beforeWxaPaySubmit', [$payment, $order]);

        return $this->view->render('@wxa/payments/wxa.php', [
            'order' => $order,
            'payment' => $payment,
        ]);
    }

    public function verifyNotify()
    {
        $result = parent::verifyNotify();
        $this->event->trigger('afterWxPayVerify', [$result, $this]);
        return $result;
    }
}
