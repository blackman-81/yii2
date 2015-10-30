<?php

use yii\db\Schema;
use yii\db\Migration;

class m151030_183009_added extends Migration
{
    const table='{{%first}}';
    public function up()
    {
        $this->createTable(self::table, [
            'id'=>Schema::TYPE_PK,
            'name'=>Schema::TYPE_STRING, 'NOT NULL',
         ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

        $this->addColumn(self::table, 'basic', Schema::TYPE_STRING);

    }

    public function down()
    {$this->dropColumn(self::table, Schema::TYPE_STRING);
        echo "m151030_183009_added cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
