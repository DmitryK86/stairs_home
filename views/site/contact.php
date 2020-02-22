<?php

/* @var $this \app\components\SeoView */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\SweetAlertAsset;

SweetAlertAsset::register($this);
?>

<div class="home" style="height: 60vh">
    <div class="background_image" style="background-image:url(/images/contacts.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= $this->h1;?>
                        </h1>
                        <div class="my-flex">
                            <div class="text_index_custom">
                                <h2>
                                    <?= $this->h2;?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="container">
        <div class="row">

            <!-- Contact Content -->
            <div class="col-lg-6">
                <div class="contact_content">
                    <div class="contact_title"><h2>Наш адрес</h2></div>
                    <div class="contact_list">
                        <ul>
                            <li>Украина</li>
                            <li>г.Одесса</li>
                            <?php foreach (\app\helpers\Params::phones() as $phone):?>
                                <li><?= $phone;?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="">

                    </div>
                    <div class="contact_form_container">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <div class="row">
                            <div class="col-md-6 input_container">
                                <?= $form->field($model, 'name')->textInput() ?>
                            </div>
                            <div class="col-md-6 input_container">
                                <?= $form->field($model, 'email') ?>
                            </div>
                        </div>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?php if ($model->isCaptchaEnabled()):?>
                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) ?>
                        <?php endif;?>

                        <div class="form-group">
                            <?= Html::submitButton('Отправить', ['class' => 'btn contact_button', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-xl-5 col-lg-6 offset-xl-1">
                <div class="contact_map">

                    <!-- Google Map -->

                    <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6534.745899331288!2d30.73566223863824!3d46.47797134384249!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1579964382497!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')):?>
<?php $this->registerJs("
Swal.fire({
  title: 'Сообщение отправлено!',
  text: 'Мы ответим Вам в ближайшее время.'
  });
", \yii\web\View::POS_READY);?>
<?php endif;?>
