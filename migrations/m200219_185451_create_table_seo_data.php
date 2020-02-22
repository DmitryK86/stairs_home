<?php

use yii\db\Migration;

/**
 * Class m200219_185451_create_table_seo_data
 */
class m200219_185451_create_table_seo_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('seo_data', [
            'id' => $this->primaryKey(),
            'route' => $this->string(255)->notNull(),
            'enabled' => $this->boolean()->defaultValue(false),
            'title' => $this->string(255)->notNull(),
            'h1' => $this->string(255),
            'h2' => $this->string(500),
            'keywords' => $this->string(500),
            'description' => $this->string(500),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('seo_data');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200219_185451_create_table_seo_data cannot be reverted.\n";

        return false;
    }
    */
}
