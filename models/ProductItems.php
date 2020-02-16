<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product_items".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int|null $enabled
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $manufactured_at
 * @property int $category_id
 */
class ProductItems extends \yii\db\ActiveRecord
{
    public $images;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'category_id', 'manufactured_at'], 'required'],
            [['enabled'], 'integer'],
            [['description'], 'string'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'integer', 'min' => 1],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['images', 'created_at'], 'safe'],
            [['title', 'slug'], 'filter', 'filter' => 'trim'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'slug' => 'Slug',
            'enabled' => 'Включен',
            'description' => 'Описание',
            'manufactured_at' => 'Дата производства',
            'category_id' => 'Категория'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductItemsImages()
    {
        return $this->hasMany(ProductItemsImages::className(), ['product_item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    public function beforeSave($insert)
    {
        if ($this->images){
            $this->images = UploadedFile::getInstances($this, 'images');
        }

        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $transaction = Yii::$app->db->beginTransaction();
        try{
            foreach ($this->images as $image){
                $item = new ProductItemsImages();
                $item->product_item_id = $this->id;
                $item->image = $image;
                if (!$item->save()){
                    throw new \Exception('Saving error. Details: ' . json_encode($item->getErrors(), JSON_PRETTY_PRINT));
                }
            }

            $transaction->commit();
        }
        catch (\Throwable $e){
            $transaction->rollBack();
            $this->addError('images', $e->getMessage());
        }
    }

    public function getMainImage(){
        $main = $this->getProductItemsImages()->andWhere('is_main = TRUE')->one();
        if (!$main){
            $main = $this->getProductItemsImages()->one();
        }

        if (!$main){
            $main = new ProductItemsImages();
        }


        return $main;
    }

    public function getImages($excludedIds = []){
        return $this->getProductItemsImages()->where(['not in', 'id', $excludedIds])->all();
    }
}
