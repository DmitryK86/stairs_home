<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string|null $text
 * @property string $created_at
 * @property int|null $is_read
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject'], 'required'],
            [['created_at'], 'safe'],
            [['is_read'], 'boolean'],
            [['name', 'email', 'subject', 'text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'subject' => 'Тема',
            'text' => 'Текст сообщения',
            'created_at' => 'Время создания',
            'is_read' => 'Прочитано',
        ];
    }
}
