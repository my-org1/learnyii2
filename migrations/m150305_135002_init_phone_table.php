<?php

use yii\db\Schema;
use yii\db\Migration;

class m150305_135002_init_phone_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'phone', [
                'id' => 'pk',
                'customer_id' => 'int unique',
                'number' => 'string'
            ],
            'ENGINE=InnoDB'
        ) ;
        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id') ;
    }

    public function down()
    {
        echo "m150305_135002_init_phone_table cannot be reverted.\n";

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
