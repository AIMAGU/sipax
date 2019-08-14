<?php

namespace app\controllers;

use Yii;
use app\models\Aturan;
use app\models\AturanSearch;
use app\models\HasilKonsultasi;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AturanController implements the CRUD actions for Aturan model.
 */
class AturanController extends Controller
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
                    'delete' => ['get'],
                ],
            ],
        ];
    }

    /**
     * Lists all Aturan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AturanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aturan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
		$model2 = new HasilKonsultasi();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'model2' => $model2,
        ]);
    }

    /**
     * Creates a new Aturan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aturan();

        if ($model->load(Yii::$app->request->post())) {
			if(!empty(Yii::$app->request->post('Aturan')['ya']))
				$ya=Yii::$app->request->post('Aturan')['ya'];
			else
				$ya=null;
			
			if(!empty(Yii::$app->request->post('Aturan')['tidak']))
				$tidak=Yii::$app->request->post('Aturan')['tidak'];
			else
				$tidak=null;
			
			$check_duplicate = Aturan::find()
				->where('kode_gejala = :kode_gejala', [':kode_gejala' => Yii::$app->request->post('Aturan')['kode_gejala']])
				->andWhere('ya = :ya', [':ya' => Yii::$app->request->post('Aturan')['ya']])
				->andWhere('tidak = :tidak', [':tidak' => Yii::$app->request->post('Aturan')['tidak']])
				->all();
			
			if(!$check_duplicate && $model->save()){
				\Yii::$app->session->setFlash('success', 'Data berhasil disimpan dalam sistem.');
				return $this->redirect(['index']);
			}else
				\Yii::$app->session->setFlash('danger', 'Data yang anda masukkan sudah ada dalam database. Silahan periksa kembali.');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Aturan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			\Yii::$app->session->setFlash('success', 'Data berhasil disimpan dalam sistem.');
            return $this->redirect(['view', 'id' => $model->id_aturan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Aturan model.
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
     * Finds the Aturan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aturan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aturan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
