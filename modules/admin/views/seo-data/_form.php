<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeoData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seo-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'route')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'enabled')->widget(\kartik\widgets\SwitchInput::classname(), []) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'h1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'h2')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 500]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
