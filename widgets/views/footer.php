<?php
/**
 * @var \yii\web\View $this
 * @var array $links
 */
use app\helpers\Params;
?>

<footer class="footer">
    <div class="footer_content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_logo_container text-center">
                        <div class="footer_logo">
                            <a href="/"></a>
                            <div><?= Params::appName();?></div>
                            <div>работаем с 2005 года</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_row">

                <!-- Address -->
                <div class="col-lg-3">
                    <div class="footer_title">Наш адрес:</div>
                    <div class="footer_list">
                        <ul>
                            <li>Украина</li>
                            <li>г.Одесса</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer_title">Наши контакты</div>
                    <div class="footer_list">
                        <ul>
                            <?php foreach (Params::phones() as $phone):?>
                            <li>
                                <a href="tel:<?= $phone?>"><?= $phone?></a>
                            </li>
                            <?php endforeach;?>
                            <li><?= Params::infoEmail();?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        &copy;<?= date('Y');?> <?= Params::appName();?> All rights reserved
    </div>
</footer>
