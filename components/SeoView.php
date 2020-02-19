<?php

namespace app\components;


use app\models\SeoData;
use yii\web\View;

/**
 * Class SeoView
 * @package app\components
 *
 * @property string $h1
 * @property string $keywords
 * @property string $description
 */
class SeoView extends View
{
    public $h1;

    public function init()
    {
        parent::init();

        $this->registerSeo();
    }

    private function registerSeo(){
        /** @var SeoData $seoData */
        $seoData = SeoData::find()->where('route = :route', [':route' => \Yii::$app->request->getUrl()])->one();
        if ($seoData){
            $this->title = $seoData->title;
            $this->h1 = $seoData->h1;
            $attributes = $seoData->getAttributes(['keywords', 'description']);
            foreach ($attributes as $name => $value){
                if (!empty($value)){
                    $this->registerMetaTag([
                        'name' => $name,
                        'content' => $value,
                    ]);
                }
            }
        }
    }
}