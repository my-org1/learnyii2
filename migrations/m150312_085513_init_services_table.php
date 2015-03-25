<?php

use yii\db\Schema;
use yii\db\Migration;

class m150312_085513_init_services_table extends Migration
{
    public function up()
    {
        $this->createTable('service', [
            'id' => 'pk',
            'name' => 'string unique',
            'hourly_rate' => 'integer'
        ]) ;
    }

    public function down()
    {
//        echo "m150312_085513_init_services_table cannot be reverted.\n";
//        return false;
        $this->dropTable('service') ;
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
