<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="home" style="height: 60vh">
    <div class="background_image" style="background-image:url(/images/contacts.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= Yii::t('app', 'Наши контакты');?>
                        </h1>
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
                    <div class="contact_form_container">
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="row">
                                <div class="col-md-6 input_container">
                                    <input type="text" class="contact_input" placeholder="Ваше имя" required="required">
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="email" class="contact_input" placeholder="Ваш email" required="required">
                                </div>
                            </div>
                            <div class="input_container"><input type="text" class="contact_input" placeholder="Тема"></div>
                            <div class="input_container"><textarea class="contact_input contact_textarea" placeholder="Сообщение" required="required"></textarea></div>
                            <button class="contact_button">Отправить</button>
                        </form>
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
