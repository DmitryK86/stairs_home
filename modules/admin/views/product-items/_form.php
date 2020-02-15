<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductItems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::merge(['Выберите'], \app\models\Categories::getForDropdown()));?>

    <?= $form->field($model, 'enabled')->widget(\kartik\widgets\SwitchInput::classname(), []) ?>

    <?= $form->field($model, 'created_at')->widget(\kartik\widgets\DatePicker::className(), [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
        ]
    ])?>

    <?= $form->field($model, 'images[]')->fileInput(['multiple' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
