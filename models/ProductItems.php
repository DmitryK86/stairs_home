<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product_items".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int|null $enabled
 * @property string|null $description
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
            [['title', 'slug'], 'required'],
            [['enabled'], 'integer'],
            [['description'], 'string'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['images'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'enabled' => 'Enabled',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductItemsImages()
    {
        return $this->hasMany(ProductItemsImages::className(), ['product_item_id' => 'id']);
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
        $main = $this->getGalleryItems()->andWhere('is_main = TRUE')->one();
        if (!$main){
            $main = $this->getGalleryItems()->one();
        }

        if (!$main){
            $main = new GalleryItems();
        }


        return $main;
    }

    public function getImages(){
        return $this->getGalleryItems()->all();
    }
}
