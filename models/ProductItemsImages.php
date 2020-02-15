<?php

namespace app\models;

use app\behaviors\ArImageBehavior;
use Yii;

/**
 * This is the model class for table "product_items_images".
 *
 * @property int $id
 * @property int $product_item_id
 * @property string|null $comment
 * @property int|null $is_main
 * @property string $image
 *
 * @property ProductItems $productItem
 */
class ProductItemsImages extends \yii\db\ActiveRecord
{
    public $image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_items_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_item_id'], 'required'],
            [['product_item_id', 'is_main'], 'integer'],
            [['comment'], 'string', 'max' => 255],
            [['product_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductItems::className(), 'targetAttribute' => ['product_item_id' => 'id']],
            [['image'], 'file', 'extensions' => 'jpeg, gif, png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_item_id' => 'Product Item ID',
            'comment' => 'Comment',
            'is_main' => 'Is Main',
        ];
    }

    /**
     * Gets query for [[ProductItem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductItem()
    {
        return $this->hasOne(ProductItems::className(), ['id' => 'product_item_id']);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => ArImageBehavior::class,
                'filePath' => "@webroot/uploads/{$this->product_item_id}/[[basename]]",
                'fileUrl' => "/uploads/{$this->product_item_id}/[[basename]]",
            ],

        ];
    }

    public static function changeMainImage($productItemId, $itemId){
        self::updateAll(['is_main' => false], 'product_item_id = :productItemId', [
            ':productItemId' => $productItemId
        ]);
        $item = self::findOne($itemId);
        $item->is_main = true;

        return $item->update();
    }
}
