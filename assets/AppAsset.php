<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    const STATIC_VERSION = 2;

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/bootstrap-4.1.2/bootstrap.min.css',
        'plugins/font-awesome-4.7.0/css/font-awesome.min.css',
        'plugins/OwlCarousel2-2.3.4/owl.carousel.css',
        'plugins/OwlCarousel2-2.3.4/owl.theme.default.css',
        'plugins/OwlCarousel2-2.3.4/animate.css',
        'plugins/colorbox/colorbox.css',
        'styles/main_styles.css',
        'styles/responsive.css',
    ];
    public $js = [
        'styles/bootstrap-4.1.2/popper.js',
        'styles/bootstrap-4.1.2/bootstrap.min.js',
        'plugins/OwlCarousel2-2.3.4/owl.carousel.js',
        'plugins/colorbox/jquery.colorbox-min.js',
        'js/custom.js',
        'js/my_custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public function init()
    {
        parent::init();

        $this->css = $this->addVersion($this->css);
        $this->js = $this->addVersion($this->js);
    }

    private function addVersion(array $sources){
        $_s = [];
        foreach ($sources as $source){
            $_s[] = $source . '?v=' . self::STATIC_VERSION;
        }

        return $_s;
    }
}
