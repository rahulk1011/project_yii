<?php

use yii\db\Migration;

/**
 * Class m210615_050243_create_table_place
 */
class m210615_050243_create_table_place extends Migration
{
	// Use up()/down() to run migration code without a transaction.
    public function up() {
		$this->createTable('place', [
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->string(45)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(2)->notNull(),
            'is_country' => $this->boolean()->notNull()
        ]);
    }

    public function down() {
		$this->dropTable('place');
    }
	
    /*
	public function safeUp() {

    }
	
    public function safeDown() {
        echo "m210615_050243_create_table_place cannot be reverted.\n";
        return false;
    }
	*/
}
