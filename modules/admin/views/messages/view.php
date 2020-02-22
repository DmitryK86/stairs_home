<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\helpers\Params;

/* @var $this yii\web\View */
/* @var $model app\models\Messages */

$this->title = 'Сообщение от ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Сообщения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="messages-view">

    <h1><?= $this->title;?></h1>

    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'subject',
            'text',
            'created_at',
        ],
    ]) ?>

    <?= Html::a('Ответить', 'https://mail.' . Params::infoEmailDomain(), [
            'class' => 'btn btn-success',
            'target' => '_blank'
    ]);?>

</div>
