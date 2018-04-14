<?php

$view->layout();
$orderUrl = $url->full('orders/%s', $order['id']);
?>

<?= $block->js() ?>
<script>
  var orderUrl = '<?= $orderUrl ?>';
  var payment = <?= json_encode($payment) ?>;
  if (payment.code !== 1) {
    $.msg(payment, 10000, function () {
      window.location = orderUrl;
    });
  } else {
    $.loading('show');
    require(['plugins/wechat/js/wx'], function (wx) {
      wx.miniProgram.navigateTo({
        url: $.appendUrl('/pages/payments/index', {
          payment: JSON.stringify(payment.js),
          next: orderUrl
        })
      });
    });
  }
</script>
<?= $block->end() ?>
