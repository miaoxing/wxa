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
    require(['//res.wx.qq.com/open/js/jweixin-1.3.2.js'], function (wx) {
      wx.miniProgram.navigateTo({
        url: $.appendUrl('/pages/payments/index', {payment: JSON.stringify(payment.js)})
      });
    });
  }
</script>
<?= $block->end() ?>
