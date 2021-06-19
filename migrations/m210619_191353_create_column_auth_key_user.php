<?php

use yii\db\Migration;

/**
 * Class m210619_191353_create_column_auth_key_user
 */
class m210619_191353_create_column_auth_key_user extends Migration
{
	// Use up()/down() to run migration code without a transaction.
    public function up() {
		$this->addColumn('user', 'auth_key', $this->string(60)->notNull()->after('contact_phone'));
    }

    public function down() {
        $this->dropColumn('user', 'auth_key');
    }
    
    /*
    public function safeUp() {

    }
	
    public function safeDown() {
        echo "m210619_191353_create_column_auth_key_user cannot be reverted.\n";
        return false;
    }
    */
}
