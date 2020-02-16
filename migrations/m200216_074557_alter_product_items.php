<?php

use yii\db\Migration;

/**
 * Class m200216_074557_alter_product_items
 */
class m200216_074557_alter_product_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('ALTER TABLE product_items CHANGE created_at manufactured_at DATE');
        $this->addColumn('product_items', 'created_at', 'DATETIME NOT NULL DEFAULT NOW()');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('product_items', 'created_at');
        $this->execute('ALTER TABLE product_items CHANGE manufactured_at created_at DATETIME');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200216_074557_alter_product_items cannot be reverted.\n";

        return false;
    }
    */
}
