<?php

use yii\db\Migration;

/**
 * Class m200222_125027_create_table_mail
 */
class m200222_125027_create_table_mail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'subject' => $this->string(255)->notNull(),
            'text' => $this->string(),
            'created_at' => $this->dateTime()->notNull()->defaultValue(new \yii\db\Expression('NOW()')),
            'is_read' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('messages');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200222_125027_create_table_mail cannot be reverted.\n";

        return false;
    }
    */
}
