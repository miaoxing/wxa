<?php

namespace Miaoxing\WechatMp\Migration;

use Wei\Migration\BaseMigration;

class V20210602170210CreateWechatMpUsersTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('wechat_mp_users')->tableComment('微信小程序用户')
            ->bigId()
            ->uInt('app_id')->comment('应用编号')
            ->uBigInt('user_id')->comment('用户编号')
            ->string('open_id', 32)->comment('微信用户 OpenID')
            ->string('union_id', 32)->comment('微信用户 UnionID')
            ->string('nick_name')->comment('昵称')
            ->string('avatar_url')->comment('头像地址')
            ->string('orig_avatar_url')->comment('原始微信头像地址')
            ->uTinyInt('gender')->comment('性别。0:未知;1:男;2:女')
            ->string('country', 32)->comment('国家')
            ->string('province', 32)->comment('城市')
            ->string('city', 32)->comment('省份')
            ->string('language', 8)->comment('语言')
            ->timestamp('updated_info_at')->comment('最后更新信息时间')
            ->timestamps()
            ->userstamps()
            ->index('user_id')
            ->index('open_id')
            ->index('union_id')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('wechat_mp_users');
    }
}
