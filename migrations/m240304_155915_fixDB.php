<?php

use yii\db\Migration;


class m240304_155915_fixDB extends Migration
{
    public function safeUp()
    {
        $this->addColumn(
            'users',
            'age',
            $this->integer()
        );
    }

    public function safeDown()
    {
        echo "m240304_155915_fixDB cannot be reverted.\n";

        return true;
    }

}
