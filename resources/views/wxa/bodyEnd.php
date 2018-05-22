<script>
  require(['plugins/wechat/js/wx'], function (wx) {
    var share = <?= wei()->share->toJson() ?>;
    wx.miniProgram.postMessage({
      data: {
        action: 'share',
        title: share.title,
        path: share.url,
        imageUrl: share.image
      }
    });
  });
</script>
