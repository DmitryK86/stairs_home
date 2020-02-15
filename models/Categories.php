<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int|null $enabled
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug'], 'required'],
            [['enabled'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'slug' => 'Slug',
            'enabled' => 'Включен',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductItems()
    {
        return $this->hasMany(ProductItems::className(), ['category_id' => 'id']);
    }

    public static function getForDropdown(){
        return ArrayHelper::map(self::findAll(['enabled' => true]), 'id', 'title');
    }
}
