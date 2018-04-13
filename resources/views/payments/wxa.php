<?php

$view->layout();
?>

<?= $block->js() ?>
<script>
  var payment = <?= json_encode($payment) ?>;
  if (payment.code !== 1) {
    $.msg(payment, 10000, function () {
      window.location = $.url('orders/%s', <?= $order['id'] ?>);
    });
  } else {
    $.loading('show');
    require(['plugins/wechat/js/wx'], function (wx) {
      wx.miniProgram.navigateTo({
        url: $.appendUrl('/pages/payments/index', {
          payment: JSON.stringify(payment.js),
          next: $.url('orders/%s', <?= $order['id'] ?>)
        });
      });
    });
  }
</script>
<?= $block->end() ?>
