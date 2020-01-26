<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = Yii::t('app', 'Главная');
?>

<div class="home">
    <div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= Yii::t('app', 'Лестницы под ключ');?>
                        </h1>
                        <div class="my-flex">
                            <div class="text_index_custom">
                                <h2>
                                    <?= Yii::t('app', 'Делаем лестницы по которым хочеться подниматься все выше и выше');?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                    <div class="icon_box_icon"><img src="images/icon_1.svg" class="svg"></div>
                    <div class="icon_box_title">
                        <h2>
                            <?= Yii::t('app', 'Лестницы');?>
                        </h2>
                    </div>
                    <div class="icon_box_text">
                        <p>
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста
                        </p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                    <div class="icon_box_icon"><img src="images/icon_3.svg" class="svg"></div>
                    <div class="icon_box_title">
                        <h2>
                            <?= Yii::t('app', 'Беседки');?>
                        </h2>
                    </div>
                    <div class="icon_box_text">
                        <p>
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста
                        </p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                    <div class="icon_box_icon"><img src="images/icon_4.svg" class="svg"></div>
                    <div class="icon_box_title">
                        <h2>
                            <?= Yii::t('app', 'Дома');?>
                        </h2>
                    </div>
                    <div class="icon_box_text">
                        <p>
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста Сюда нужно вставить текст, много текста
                            Сюда нужно вставить текст, много текста
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Gallery -->

<div class="gallery">
    <div class="gallery_slider_container">
        <div class="owl-carousel owl-theme gallery_slider">

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
                <a class="colorbox" href="images/gallery_1.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
                <a class="colorbox" href="images/gallery_2.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
                <a class="colorbox" href="images/gallery_3.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
                <a class="colorbox" href="images/gallery_4.jpg"></a>
            </div>

        </div>
    </div>
</div>

<!-- About -->

<div class="about">
    <div class="container">
        <div class="row">

            <!-- About Content -->
            <div class="col-lg-6">
                <div class="about_content">
                    <div class="about_title">
                        <h2>
                            Мы изготавливаем лестницы более 15 лет
                        </h2>
                    </div>
                    <div class="about_text">
                        <p>
                            У нас есть варианты на любой вкус.
                            Мы используем качественные материалы и широкую цветовую гамму, наши лестницы предадут
                            уют и украсят самый изысканный интерьер.
                            Лестницы в наличии и под заказ.<br>
                            Цена на готовый комплект зависит от следующих факторов:<br>
                            Тип конструкции;<br>
                            Декоративные элементы;<br>
                            Вид дерева (дуб, ясень)<br>
                        </p>
                    </div>
                </div>
            </div>

            <!-- About Images -->
            <div class="col-lg-6">
                <div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
    <div class="testimonials_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Slide -->
                        <div  class="test_slider_item text-center">
                            <div class="testimonial_title">
                                <a href="#">Професиональное исполнение</a>
                            </div>
                            <div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Вероника Диденко</a></div>
                            <div class="testimonial_text">
                                <p>
                                    Необходима была лестница для загородного дома.
                                    Ребята сделали все в точности, как я хотела! Спасибо Вам огромное!
                                </p>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div  class="test_slider_item text-center">
                            <div class="testimonial_title">
                                <a href="#">
                                    Идеальное соотношение<br>цена/качество
                                </a>
                            </div>
                            <div class="testimonial_image"><img src="images/user_2.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Максим Глушко</a></div>
                            <div class="testimonial_text">
                                <p>
                                    Я не ожидал, что за такие короткие сроки и приемлемую цену можно сотворить чудо на моей даче.
                                    Огромное Вам спасибо!
                                </p>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div  class="test_slider_item text-center">
                            <div class="testimonial_title">
                                <a href="#">
                                    Превосходно
                                </a>
                            </div>
                            <div class="testimonial_image"><img src="images/user_3.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Назар Когуб</a></div>
                            <div class="testimonial_text">
                                <p>
                                    Ребята реставрировали лестницу в нашем офисе. Сделали все быстро и качественно.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="booking booking_no_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="booking_title text-center">
                    <h2>
                        Консультация и замер - бесплатно!
                    </h2>
                </div>
                <div class="booking_text text-center">
                    <p>
                        Для нас каждый заказ индивидуален, изготавливаем лестницы от бюджетных вариантов до
                        самых сложных класса люкс.
                        Наш специалист сделает просчет по Вашему заказу,если нет чертежа поможем подобрать
                        лестницу которая будет идеально подходить в Ваш дом и станет его неотъемлемой частью.
                    </p>
                </div>

                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <div class="owl-carousel owl-theme booking_slider">

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image" style="background-image:url(images/stairs_1.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">от $3000</div>
                            <div class="booking_link">
                                <a href="<?= Url::to(['site/about', '#' => 'stairs'])?>">
                                    <?= Yii::t('app', 'Лестницы');?>
                                </a>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image" style="background-image:url(images/stairs_2.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">от $4000</div>
                            <div class="booking_link">
                                <a href="<?= Url::to(['site/about', '#' => 'stairs'])?>">
                                    <?= Yii::t('app', 'Ступени');?>
                                </a>
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image" style="background-image:url(images/stairs_3.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">от $6000</div>
                            <div class="booking_link">
                                <a href="<?= Url::to(['site/about', '#' => 'gazebo'])?>">
                                    <?= Yii::t('app', 'Уютные беседки');?>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


