<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'Наши работы');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="home">
    <div class="background_image" style="background-image:url(images/about.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <h1 class="home_title">
                            <?= Yii::t('app', 'Наши работы');?>
                        </h1>
                        <div class="my-flex">
                            <div class="booking_input_custom">
                                <a href="#stairs">
                                    <?= Yii::t('app', 'Лестницы');?>
                                </a>
                            </div>
                            <div class="booking_input_custom">
                                <a href="#gazebo">
                                    <?= Yii::t('app', 'Беседки');?>
                                </a>
                            </div>
                            <div class="booking_input_custom">
                                <a href="#house">
                                    <?= Yii::t('app', 'Дома');?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a name="stairs" class="anchor-link"></a>

<div class="custom_elements_title">
    <h2>
        <?= Yii::t('app', 'Лестницы');?>
    </h2>
</div>

<div class="blog">
    <!-- Blog Slider -->
    <div class="blog_slider_container">
        <div class="owl-carousel owl-theme blog_slider">

            <!-- Slide -->
            <div class="blog_slide">
                <a href="/images/stairs/stairs1/1.jpg" class="background_image colorbox-1" style="background-image:url(images/stairs/stairs1/1.jpg)">
                </a>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Октябрь 2018</a></div>
                    <div class="blog_title">
                        Молочная дымка
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <a class="background_image colorbox-2" href="/images/stairs/stairs2/1.jpg" style="background-image:url(images/stairs/stairs2/1.jpg)"></a>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Январь 2019</a></div>
                    <div class="blog_title">
                        Лестница в стиле прованс
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image colorbox-3" href="/images/stairs/stairs3/1.jpg" style="background-image:url(images/stairs/stairs3/1.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Апрель 2019</a></div>
                    <div class="blog_title">
                        Стиль "Белый шоколад"
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image colorbox-4" href="/images/stairs/stairs4/1.jpg" style="background-image:url(images/stairs/stairs4/1.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Сентябрь 2019</a></div>
                    <div class="blog_title">
                        Осенний прилив
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image colorbox-5" href="/images/stairs/stairs5/1.jpg" style="background-image:url(images/stairs/stairs5/1.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Ноябрь 2019</a></div>
                    <div class="blog_title">
                        Минимализм
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="items hidden">
        <div class="gallery_item">
            <a class="colorbox-1" href="/images/stairs/stairs1/2.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-1" href="/images/stairs/stairs1/3.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-1" href="/images/stairs/stairs1/4.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-1" href="/images/stairs/stairs1/5.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-1" href="/images/stairs/stairs1/6.jpg"></a>
        </div>

        <div class="gallery_item">
            <a class="colorbox-2" href="/images/stairs/stairs2/2.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-2" href="/images/stairs/stairs2/3.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-2" href="/images/stairs/stairs2/4.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-2" href="/images/stairs/stairs2/5.jpg"></a>
        </div>

        <div class="gallery_item">
            <a class="colorbox-3" href="/images/stairs/stairs3/2.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-3" href="/images/stairs/stairs3/3.jpg"></a>
        </div>

        <div class="gallery_item">
            <a class="colorbox-4" href="/images/stairs/stairs4/2.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-4" href="/images/stairs/stairs4/3.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-4" href="/images/stairs/stairs4/4.jpg"></a>
        </div>

        <div class="gallery_item">
            <a class="colorbox-5" href="/images/stairs/stairs5/2.jpg"></a>
        </div>

    </div>
</div>

<a name="gazebo" class="anchor-link"></a>

<div class="custom_elements_title">
    <h2>
        <?= Yii::t('app', 'Беседки');?>
    </h2>
</div>

<div class="blog">
    <!-- Blog Slider -->
    <div class="blog_slider_container">


            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image colorbox-gazebo-1" href="/images/gazebo/gazebo1/1.jpg" style="background-image:url(images/gazebo/gazebo1/1.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Июнь 2019</a></div>
                    <div class="blog_title">
                        Люксовая беседка
                    </div>
                </div>
            </div>


    </div>

    <div class="items hidden">
        <div class="gallery_item">
            <a class="colorbox-gazebo-1" href="/images/gazebo/gazebo1/2.jpg"></a>
        </div>
        <div class="gallery_item">
            <a class="colorbox-gazebo-1" href="/images/gazebo/gazebo1/3.jpg"></a>
        </div>
    </div>
</div>

<a name="house" class="anchor-link"></a>

<div class="custom_elements_title">
    <h2>
        <?= Yii::t('app', 'Дома');?>
    </h2>
</div>


<?php $this->registerJs("
$('.colorbox-1').colorbox({
    rel:'gal-1',
    maxWidth:'95%',
    maxHeight:'95%'
});
$('.colorbox-2').colorbox({
    rel:'gal-2',
    maxWidth:'95%',
    maxHeight:'95%'
});
$('.colorbox-3').colorbox({
    rel:'gal-3',
    maxWidth:'95%',
    maxHeight:'95%'
});
$('.colorbox-4').colorbox({
    rel:'gal-4',
    maxWidth:'95%',
    maxHeight:'95%'
});
$('.colorbox-5').colorbox({
    rel:'gal-5',
    maxWidth:'95%',
    maxHeight:'95%'
});

$('.colorbox-gazebo-1').colorbox({
    rel:'gal-gazebo-1',
    maxWidth:'95%',
    maxHeight:'95%'
});
", \yii\web\View::POS_LOAD);?>


