<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\modules\admin\components\ThemeNav;

?>
<?php $this->beginContent('@app/modules/admin/views/layouts/main.php'); ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

     <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/admin-resources/images/user_accounts.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>
                      <?php
                          $info[] = Yii::t('app','Hello');

                          if(isset(Yii::$app->user->identity->username))
                              $info[] = ucfirst(\Yii::$app->user->identity->username);

                          echo implode(', ', $info);
                      ?>
                    </p>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?php
                echo Menu::widget([
                  'encodeLabels'=>false,
                  'options' => [
                    'class' => 'sidebar-menu'
                  ],
                  'items' => [
                      ['label'=>Yii::t('app','MAIN NAVIGITION'), 'options'=>['class'=>'header']],
                      [
                          'label' => ThemeNav::link('Дашборд', 'fa fa-dashboard'),
                          'url' => ['/admin/'],
                          'visible'=>!Yii::$app->user->isGuest
                      ],
                      [
                          'label' => ThemeNav::link('Категории', 'fa fa-bars'),
                          'url' => ['/admin/categories/index/'],
                          'visible'=>!Yii::$app->user->isGuest
                      ],
                      [
                          'label' => ThemeNav::link('Продукты', 'fa fa-briefcase'),
                          'url' => ['/admin/product-items/index/'],
                          'visible'=>!Yii::$app->user->isGuest
                      ],
                      [
                          'label' => ThemeNav::link('СЕО данные', 'fa fa-cloud'),
                          'url' => ['/admin/seo-data/index/'],
                          'visible'=>!Yii::$app->user->isGuest
                      ],
                  ],
                ]);
            ?>

        </section>
  <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <section class="content-header">
           <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $content; ?>
    </section><!-- /.content -->

</div><!-- /.right-side -->
<?php $this->endContent();