<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AdminlteAsset;
use app\assets\AdminAsset;
use app\managers\MessageManager;
use \yii\helpers\Url;

AdminlteAsset::register($this);
AdminAsset::register($this);

$manager = MessageManager::instance();
$hasMessage = $manager->hasNewMessage();
$messageCount = $manager->getNewMessagesCount();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">

<?php $this->beginBody() ?>
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= Yii::$app->request->baseUrl; ?>" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>S</b>HM</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Stairs</b>HOME</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
                <?php if (!Yii::$app->user->isGuest):?>
                    <div class="navbar-custom-menu">
                  <?php $this->registerCss('.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>h4{margin:0;}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>p{margin:0;}');?>
                  <?= Nav::widget([
                          'options' => ['class' => 'nav navbar-nav'],
                          'encodeLabels' => false,
                          'items' => [
                              [
                                  'label' => $hasMessage
                                      ? '<i class="fa fa-envelope-o"></i><span class="label label-success">'.$messageCount.'</span>'
                                      : '<i class="fa fa-envelope-o"></i>',
                                  'dropDownOptions' => ['class' => 'dropdown-menu'],
                                  'options' => ['class' => 'dropdown messages-menu'],
                                  'items' => [
                                      "<li class=\"header\">{$messageCount} новых сообщений</li>",
                                      $hasMessage
                                          ? "<li>
                                            <ul class=\"menu\">
                                                <li>
                                                    <a href=\"".Url::to(['/admin/messages/view', 'id' => $manager->getLastMessage()->id])."\">
                                                        <h4>
                                                            {$manager->getSenderName()}
                                                            <small><i class=\"fa fa-clock-o\"></i> {$manager->getCreatedAt()}</small>
                                                        </h4>
                                                        <p>{$manager->getSubject()}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>"
                                          : '',
                                      '<li class="footer">
                                        <a href="'.Url::to(['/admin/messages/']).'">Все сообщения</a>
                                      </li>',
                                  ],
                              ],
                              [
                                  'label' => 'Перейти на сайт',
                                  'url' => ['/'],
                                  'linkOptions' => ['target' => '_blank']
                              ],
                              [
                                  'label' => 'Выход (' . Yii::$app->user->identity->username . ')',
                                  'url' => ['/site/logout'],
                                  'linkOptions' => ['data-method' => 'post']
                              ],
                          ],
                      ]);
                  ?>
              </div>
                <?php endif;?>
            </nav>
        </header>

        <?= $content ?>

        <footer class="main-footer">
            Copyright &copy; <?php echo date('Y'); ?> by <?= \app\helpers\Params::appName();?>. All Rights Reserved.
        </footer>

    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
