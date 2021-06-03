<?php

namespace Miaoxing\WechatMp\Metadata;

/**
 * @property int|null $id
 * @property int $appId 应用编号
 * @property int $userId 用户编号
 * @property string $openId 微信用户 OpenID
 * @property string $unionId 微信用户 UnionID
 * @property string $nickName 昵称
 * @property string $avatarUrl 头像地址
 * @property string $origAvatarUrl 原始微信头像地址
 * @property int $gender 性别。0:未知;1:男;2:女
 * @property string $country 国家
 * @property string $province 城市
 * @property string $city 省份
 * @property string $language 语言
 * @property string|null $updatedInfoAt 最后更新信息时间
 * @property string|null $createdAt
 * @property string|null $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 * @internal will change in the future
 */
trait WechatMpUserTrait
{
}
