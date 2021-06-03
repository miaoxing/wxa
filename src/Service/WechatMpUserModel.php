<?php

namespace Miaoxing\WechatMp\Service;

use Miaoxing\Plugin\BaseModel;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\User\Service\UserModel;
use Miaoxing\Wechat\Metadata\WechatUserTrait;
use Miaoxing\WechatMp\Metadata\WechatMpUserTrait;

/**
 * @property UserModel $user
 */
class WechatMpUserModel extends BaseModel
{
    use ModelTrait;
    use HasAppIdTrait;
    use WechatMpUserTrait;

    public function user()
    {
        return $this->belongsTo(UserModel::class);
    }
}
