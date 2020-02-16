<?php

/* @var $this yii\web\View */

/* @var $categories \app\models\Categories[] */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Наши работы');
$this->params['breadcrumbs'][] = $this->title;
$hiddenData = [];
?>

<div class="home">
    <div class="background_image" style="background-image:url(/images/about.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= Yii::t('app', 'Наши работы'); ?>
                        </h1>
                        <div class="my-flex">
                            <?php foreach ($categories as $category): ?>
                                <div class="booking_input_custom">
                                    <a href="#<?= $category->slug; ?>">
                                        <?= $category->title; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($categories as $category): ?>
    <a name="<?= $category->slug; ?>" class="anchor-link"></a>
    <?php $productItems = $category->getProductItems()->all(); ?>
    <?php if (empty($productItems)) continue;?>
    <div class="custom_elements_title">
        <h2>
            <?= $category->title; ?>
        </h2>
    </div>

    <div class="blog">
        <!-- Blog Slider -->
        <div class="blog_slider_container">
            <?php if (count($productItems) > 1): ?>
                <div class="owl-carousel owl-theme blog_slider">
            <?php endif; ?>

                <?php /** @var \app\models\ProductItems $productItem */
                foreach ($productItems as $productItem): ?>

                    <!-- Slide -->
                    <?php $mainImage = $productItem->getMainImage(); ?>
                    <div class="blog_slide">
                        <a href="<?= $mainImage->getImageSrc(); ?>"
                           class="background_image colorbox-<?= $productItem->id; ?> "
                           style="background-image:url(<?= $mainImage->getImageSrc(); ?>)">
                        </a>
                        <div class="blog_content">
                            <div class="blog_date">
                                <a href="#"><?= \app\helpers\DateHelper::getDateWithMonthAsWord($productItem->manufactured_at); ?></a>
                            </div>
                            <div class="blog_title">
                                <?= $productItem->title; ?>
                            </div>
                        </div>
                    </div>

                    <?php $hiddenData[] = $this->render('about/images', [
                        'images' => $productItem->getImages([$mainImage->id]),
                        'productItem' => $productItem,
                    ]); ?>

                <?php endforeach; ?>

        <?php if (count($productItems) > 1): ?>
            </div>
        <?php endif; ?>
        </div>
    </div>

<?php endforeach; ?>

<?php foreach ($hiddenData as $data): ?>
    <?= $data; ?>
<?php endforeach; ?>
