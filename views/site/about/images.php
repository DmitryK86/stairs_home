<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ProductItemsImages[] $images
 * @var \app\models\ProductItems $productItem
 */
?>

<?php if (!empty($images)):?>
<div class="items hidden">
    <?php foreach ($images as $image): ?>
        <div class="gallery_item">
            <a class="colorbox-<?= $productItem->id ?>" href="<?= $image->getImageSrc(); ?>"></a>
        </div>
    <?php endforeach; ?>
</div>
<?php endif;?>


<?php $this->registerJs("
                $('.colorbox-{$productItem->id}').colorbox({
                    rel:'gal-{$productItem->slug}-{$productItem->id}',
                    maxWidth:'95%',
                    maxHeight:'95%'
                });", \yii\web\View::POS_LOAD); ?>
