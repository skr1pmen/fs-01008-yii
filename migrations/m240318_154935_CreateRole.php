<?php

use yii\db\Migration;

class m240318_154935_CreateRole extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $user = $auth->createRole('user');
        $auth->add($user);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $user);

        $auth->assign($admin, 1);
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAllRoles();
    }
}
