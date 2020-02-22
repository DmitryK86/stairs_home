<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeoData */

$this->title = 'Добавить СЕО-данные';
$this->params['breadcrumbs'][] = ['label' => 'СЕО-данные', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seo-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
