<?php
namespace app\widgets;


use yii\base\Widget;
use yii\helpers\Url;

class Header extends Widget
{
    public function run()
    {
        return $this->render('header', [
            'links' => self::getMenuLinks(),
        ]);
    }

    public static function getMenuLinks(){
        return [
            [
                'url' => '/',
                'title' => \Yii::t('app', 'Главная'),
            ],
            [
                'url' => Url::to(['about']),
                'title' => \Yii::t('app', 'Наши работы'),
            ],
            [
                'url' => Url::to(['contact']),
                'title' => \Yii::t('app', 'Контакты'),
            ],
        ];
    }
}
