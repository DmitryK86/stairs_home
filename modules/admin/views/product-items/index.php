<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Продукты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Создать продукт'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'format' => 'html',
                'attribute' => 'enabled',
                'value' => function (\app\models\ProductItems $model) {
                    return $model->enabled
                        ? '<span class="label label-success">Да</span>'
                        : '<span class="label label-danger">Нет</span>';
                },
                'filter' => ['Нет', 'Да'],
            ],
            [
                'format' => 'html',
                'attribute' => 'category_id',
                'value' => function (\app\models\ProductItems $model) {
                    $category = $model->getCategory()->one();
                    return '<span class="label label-info">'.$category->title.'</span>';
                },
                'filter' => \app\models\Categories::getForDropdown(),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
