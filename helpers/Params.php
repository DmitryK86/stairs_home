<?php
namespace app\helpers;

class Params
{
    public static function appName(){
        return \Yii::$app->params['projectName'];
    }

    public static function phone(){
        return \Yii::$app->params['phones'][0] ?? '';
    }

    public static function phones(string $glue = ''){
        if (!$glue){
            return \Yii::$app->params['phones'];
        }

        return implode($glue, \Yii::$app->params['phones']);
    }

    public static function adminEmail(){
        return \Yii::$app->params['adminEmail'];
    }

    public static function infoEmail(){
        return \Yii::$app->params['infoEmail'];
    }

    public static function infoEmailDomain(){
        $emailData = explode('@', self::infoEmail());

        return $emailData[1] ?? '';

    }
}