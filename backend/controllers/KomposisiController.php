<?php

namespace backend\controllers;

use Yii;
use app\models\Komposisi;
use app\models\KomposisiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KomposisiController implements the CRUD actions for Komposisi model.
 */
class KomposisiController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Komposisi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KomposisiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Komposisi model.
     * @param string $Menu
     * @param string $Bahan_Baku
     * @return mixed
     */
    public function actionView($Menu, $Bahan_Baku)
    {
        return $this->render('view', [
            'model' => $this->findModel($Menu, $Bahan_Baku),
        ]);
    }

    /**
     * Creates a new Komposisi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Komposisi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Menu' => $model->Menu, 'Bahan_Baku' => $model->Bahan_Baku]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Komposisi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Menu
     * @param string $Bahan_Baku
     * @return mixed
     */
    public function actionUpdate($Menu, $Bahan_Baku)
    {
        $model = $this->findModel($Menu, $Bahan_Baku);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Menu' => $model->Menu, 'Bahan_Baku' => $model->Bahan_Baku]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Komposisi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Menu
     * @param string $Bahan_Baku
     * @return mixed
     */
    public function actionDelete($Menu, $Bahan_Baku)
    {
        $this->findModel($Menu, $Bahan_Baku)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Komposisi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Menu
     * @param string $Bahan_Baku
     * @return Komposisi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Menu, $Bahan_Baku)
    {
        if (($model = Komposisi::findOne(['Menu' => $Menu, 'Bahan_Baku' => $Bahan_Baku])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
