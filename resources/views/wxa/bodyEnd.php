<script>
  window.require && require(['plugins/wechat/js/wx'], function (wx) {
    var share = <?= wei()->share->toJson() ?>;
    wx.miniProgram.postMessage({
      data: {
        action: 'share',
        title: share.title,
        path: share.url,
        imageUrl: share.image
      }
    });

    <?php if ($reLaunchUrl) { ?>
      wx.miniProgram.reLaunch({
        url: <?= json_encode($reLaunchUrl) ?>,
        fail: function () {
          $.err('很抱歉，加载失败，请尝试删除小程序后重新进入');
        }
      });
    <?php } ?>
  });
</script>
