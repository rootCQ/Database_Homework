<?php

namespace backend\controllers;

use Yii;
use backend\models\NklBbsSelectRecord;
use backend\models\NklBbsSelectRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BbsSelectController implements the CRUD actions for NklBbsSelectRecord model.
 */
class BbsSelectController extends Controller
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
     * Lists all NklBbsSelectRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NklBbsSelectRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NklBbsSelectRecord model.
     * @param integer $manager_id
     * @param string $bbs_solveTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($manager_id, $bbs_solveTime)
    {
        return $this->render('view', [
            'model' => $this->findModel($manager_id, $bbs_solveTime),
        ]);
    }

    /**
     * Creates a new NklBbsSelectRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NklBbsSelectRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing NklBbsSelectRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $manager_id
     * @param string $bbs_solveTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($manager_id, $bbs_solveTime)
    {
        $model = $this->findModel($manager_id, $bbs_solveTime);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing NklBbsSelectRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $manager_id
     * @param string $bbs_solveTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($manager_id, $bbs_solveTime)
    {
        $this->findModel($manager_id, $bbs_solveTime)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NklBbsSelectRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $manager_id
     * @param string $bbs_solveTime
     * @return NklBbsSelectRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($manager_id, $bbs_solveTime)
    {
        if (($model = NklBbsSelectRecord::findOne(['manager_id' => $manager_id, 'bbs_solveTime' => $bbs_solveTime])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
