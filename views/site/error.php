<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Ошибка');
$this->registerCssFile('/styles/elements.css');
?>

<div class="home">
    <div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= Yii::t('app', 'Ошибка 404');?>
                        </h1>
                        <div style="display: flex; flex-direction: column;align-items: center;">
                            <?= Yii::t('app', 'Запрашиваемая страница не найдена на сервере');?>
                            <div class="button button_2" style="margin-top: 30px">
                                <a href="/"><?= Yii::t('app', 'На главную');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
