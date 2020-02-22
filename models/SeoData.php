<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "seo_data".
 *
 * @property int $id
 * @property string $route
 * @property int|null $enabled
 * @property string|null $title
 * @property string|null $h1
 * @property string|null $h2
 * @property string|null $keywords
 * @property string|null $description
 */
class SeoData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['route', 'title'], 'required'],
            [['route'], 'filter', 'filter' => [$this, 'addSlashes']],
            [['enabled'], 'integer'],
            [['route', 'title', 'h1'], 'string', 'max' => 255],
            [['keywords', 'description', 'h2'], 'string', 'max' => 500],
        ];
    }

    public function addSlashes($value){
        if ($value !== '/'){
            $value = sprintf('/%s/', trim($value, '/'));
        }
        return $value;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route' => 'URL',
            'enabled' => 'Включено',
            'title' => 'Название вкладки',
            'h1' => 'H1',
            'h2' => 'H2',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
