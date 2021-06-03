<?php

/**
 * @property    Miaoxing\WechatMp\Service\WechatMpUserModel $wechatMpUserModel
 * @method      Miaoxing\WechatMp\Service\WechatMpUserModel wechatMpUserModel() 返回当前对象
 */
class WechatMpUserModelMixin {
}

/**
 * @property    Miaoxing\WechatMp\Service\WxaUrl $wxaUrl
 * @method      mixed wxaUrl($url, $page = '/pages/index/index')
 */
class WxaUrlMixin {
}

/**
 * @mixin WechatMpUserModelMixin
 * @mixin WxaUrlMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\WechatMp\Service\WechatMpUserModel $wechatMpUser */
$wechatMpUser = wei()->wechatMpUserModel;

/** @var Miaoxing\WechatMp\Service\WechatMpUserModel|Miaoxing\WechatMp\Service\WechatMpUserModel[] $wechatMpUsers */
$wechatMpUsers = wei()->wechatMpUserModel();

/** @var Miaoxing\WechatMp\Service\WxaUrl $wxaUrl */
$wxaUrl = wei()->wxaUrl;
