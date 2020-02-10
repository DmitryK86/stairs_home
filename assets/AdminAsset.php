<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 10.02.20
 * Time: 22:14
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot/admin-resources';
    public $baseUrl = '@web/admin-resources';
    public $css = [
        'css/bootstrap.min.css',
        'css/bootstrap-responsive.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/halflings.css',
        'css/jquery-ui-1.8.21.custom.css',
    ];
    public $js = [

    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//    ];
}