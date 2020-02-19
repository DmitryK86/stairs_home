<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeoData */

$this->title = 'Обновить СЕО-данные: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'СЕО-данные', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
