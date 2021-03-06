<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductItems */

$this->title = Yii::t('app', 'Создать продукт');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Продукты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
