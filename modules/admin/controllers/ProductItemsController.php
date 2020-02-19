<?php

namespace app\modules\admin\controllers;

use app\models\ProductItemsImages;
use app\modules\admin\components\AdminBaseController;
use Yii;
use app\models\ProductItems;
use app\modules\admin\models\ProductItemsSearch;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductItemsController implements the CRUD actions for ProductItems model.
 */
class ProductItemsController extends AdminBaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProductItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductItems model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProductItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProductItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param $productId
     * @param $itemId
     * @return string
     * @throws Exception
     * @throws NotFoundHttpException
     */
    public function actionMain($productId, $itemId){
        if (!ProductItemsImages::changeMainImage($productId, $itemId)){
            throw new Exception('Can not update main photo');
        }

        $gallery = $this->findModel($productId);

        return $this->render('view', [
            'model' => $gallery,
        ]);
    }

    /**
     * @param $itemId
     * @return string
     * @throws Exception
     * @throws NotFoundHttpException
     * @throws \Exception
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDeleteItem($itemId){
        $item = ProductItemsImages::findOne($itemId);
        $productItemId = $item->product_item_id;

        if (!$item->delete()){
            throw new Exception('Can not delete photo');
        }

        $gallery = $this->findModel($productItemId);

        return $this->render('view', [
            'model' => $gallery,
        ]);
    }

    /**
     * Finds the ProductItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductItems::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
