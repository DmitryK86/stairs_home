<?php

namespace app\modules\admin\controllers;

use app\components\Translit;
use app\modules\admin\models\forms\LoginForm;
use app\modules\admin\components\AdminBaseController;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * Class AdminController
 * @package app\modules\controllers
 */
class AdminController extends AdminBaseController
{
    public function actionAdmin()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->redirect(['index']);
        }

        $this->layout = 'main';
        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['admin']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->redirect(['login']);
    }

    /**
     * @param $str string
     */
    public function actionSlug($str)
    {
        $translit = new Translit();

        $result = $translit->translit($str, true, 'ru-en');
        $result = preg_replace('/[`\'\"]+/', '', $result);
        $result = preg_replace('/[^a-zA-Z0-9_\x7f-\xff]+/', '-', $result);
        $result = mb_strtolower($result, \Yii::$app->charset);
        $result = trim($result, '-');

        $this->ajaxResponse($result);
    }
}
