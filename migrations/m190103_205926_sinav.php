<?php

use yii\db\Migration;

/**
 * Class m190103_205926_sinav
 */
class m190103_205926_sinav extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
		
		$this->createTable('sinav', [
            'id' => $this->primaryKey(),
            'sinav_id' => $this->integer(11)->notNull(),
            'sinav_adi' => $this->text()->notNull(),
            'tarih' => $this->text()->notNull(),
            'saat' => $this->text()->notNull(),
            'yer' => $this->text()->notNull(),
        ], $tableOptions);
		

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_205926_sinav cannot be reverted.\n";
		$this->dropTable('sinav');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_205926_sinav cannot be reverted.\n";

        return false;
    }
    */
}
