<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\ProductItems */
/* @var $item app\models\ProductItemsImages */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Продукты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gallery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Обновить'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Вы действительно хотите удалить "{product}"?', [
                      'product' => $model->title,
                ]),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute' => 'enabled',
                'value' => function(\app\models\ProductItems $model){
                    return $model->enabled ? 'Да' : 'Нет';
                }
            ],
            [
                'attribute' => 'images',
                'label' => Yii::t('app', 'Количество картинок'),
                'value' => function(\app\models\ProductItems $model){
                    return $model->getProductItemsImages()->count();
                }
            ],
            [
                'attribute' => 'manufactured_at',
                'label' => Yii::t('app', 'Дата производства'),
                'value' => function(\app\models\ProductItems $model){
                    return \app\helpers\DateHelper::getDateWithMonthAsWord($model->manufactured_at);
                }
            ],
        ],
    ]) ?>

    <?php \yii\widgets\Pjax::begin();?>
    <ul class="gallery-post-grid holder">

        <?php foreach ($model->getProductItemsImages()->all() as $num => $item):?>
            <li class="span4 gallery-item" data-id="id-1" data-type="illustration">
                            <span class="gallery-hover-4col hidden-phone hidden-tablet" style="opacity: 0; display: inline;">
                                <span class="gallery-icons">

                                    <?= Html::a(Yii::t('app', 'Главная'),
                                        ['main', 'productId' => $model->id, 'itemId' => $item->id],
                                        [
                                            'class' => $item->is_main ? 'btn' : 'btn btn-primary',
                                            'onclick' => $item->is_main ? 'event.preventDefault()' : null
                                        ]);
                                    ?>
                                    <?= Html::a(Yii::t('app', 'Удалить'),
                                        ['delete-item', 'itemId' => $item->id],
                                        [
                                            'class' => 'btn btn-danger',
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Удалить фото?'),
                                                //'method' => 'post',
                                        ],
                                    ]) ?>

                                </span>
                            </span>
                <a href="#">
                    <image src="<?= $item->getImageSrc();?>" style="border: 3px solid black; width: 400px; margin-right: 20px"></image>
                </a>
            </li>
        <?php endforeach;?>

    </ul>
</div>

<style>
    .gallery-post-grid {
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
    }
    .gallery-hover-4col {
        width: 89px;
        height: 32px;
    }
    .gallery-icons {
        display: flex;
        height: 32px;
    }
    .gallery-item {
        margin-top: 20px;
    }
</style>