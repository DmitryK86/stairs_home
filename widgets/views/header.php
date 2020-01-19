<?php
/**
 * @var \yii\web\View $this
 * @var array $links
 */
use app\helpers\Params;
?>
<!-- Header -->

<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="/"><?= Params::appName(); ?></a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <?php foreach ($links as $link):?>
                        <li <?= \yii\helpers\Url::current() == $link['url'] ? 'class="active"' : null;?>>
                            <a href="<?= $link['url'];?>">
                                <?= $link['title'];?>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </nav>
            <div class="book_button">
                <a href="#">
                    <?= Yii::t('app', 'Заказать консультацию');?>
                </a>
            </div>
            <div class="header_phone d-flex flex-row align-items-center justify-content-center">
                <img src="images/phone.png" alt="">
                <a href="tel:<?= Params::phone();?>">
                    <span ><?= Params::phone();?></span>
                </a>
            </div>

            <!-- Hamburger Menu -->
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="menu_content">
        <nav class="menu_nav text-right">
            <ul>
                <?php foreach ($links as $link):?>
                    <li>
                        <a href="<?= $link['url'];?>">
                            <?= $link['title'];?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </nav>
    </div>
    <div class="menu_extra">
        <div class="menu_book text-right">
            <a href="#">
                <?= Yii::t('app', 'Заказать консультацию');?>
            </a>
        </div>
        <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
            <img src="images/phone-2.png" alt="">
            <a href="tel:<?= Params::phone();?>">
                <span ><?= Params::phone();?></span>
            </a>
        </div>
    </div>
</div>

