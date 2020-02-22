<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use app\models\Messages;

$this->title = 'Сообщения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email:email',
            'subject',
            [
                'format' => 'html',
                'attribute' => 'is_read',
                'value' => function (Messages $model) {
                    return $model->is_read
                        ? '<span class="label label-success">Да</span>'
                        : '<span class="label label-danger">Нет</span>';
                },
                'filter' => ['Нет', 'Да'],
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {delete}'],
        ],
    ]); ?>


</div>
