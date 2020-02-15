<?php

use yii\db\Migration;

/**
 * Class m200212_195114_create_table_product_items
 */
class m200212_195114_create_table_product_items extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_items', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'enabled' => $this->boolean()->defaultValue(false),
            'description' => $this->text(),
        ]);

        $this->createTable('product_items_images', [
            'id' => $this->primaryKey(),
            'product_item_id' => $this->integer()->notNull(),
            'comment' => $this->string(),
            'is_main' => $this->boolean()->defaultValue(false),
        ]);

        $this->addForeignKey(
            'product_items_fk',
            'product_items',
            'category_id',
            'categories',
            'id',
            'cascade',
            'cascade');

        $this->addForeignKey(
            'product_items_images_fk',
            'product_items_images',
            'product_item_id',
            'product_items',
            'id',
            'cascade',
            'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_items_images');
        $this->dropTable('product_items');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200212_195114_create_table_product_items cannot be reverted.\n";

        return false;
    }
    */
}
