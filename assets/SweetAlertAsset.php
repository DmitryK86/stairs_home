<?php

namespace app\assets;


use yii\web\AssetBundle;

class SweetAlertAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/sweetalert2.min.css',
    ];
    public $js = [
        'js/sweetalert2.all.mi.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}