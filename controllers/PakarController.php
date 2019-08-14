<?php

namespace app\controllers;

use Yii;
use app\models\Pakar;
use app\models\PakarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PakarController implements the CRUD actions for Pakar model.
 */
class PakarController extends Controller
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
     * Lists all Pakar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PakarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pakar model.
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
     * Creates a new Pakar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pakar();

        if ($model->load(Yii::$app->request->post())) {
			$check_duplicate = Pakar::find()
				->where(['kode_diagnosa' => Yii::$app->request->post('Pakar')['kode_diagnosa'], 'kode_gejala' => Yii::$app->request->post('Pakar')['kode_gejala']])
				->one();
			if(!$check_duplicate && $model->save()){
				\Yii::$app->session->setFlash('success', 'Data berhasil disimpan dalam sistem.');
				return $this->redirect(['index', 'id' => $model->id_pakar]);
			}else
				\Yii::$app->session->setFlash('danger', 'Data yang anda masukkan sudah ada dalam database. Silahan periksa kembali.');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pakar model.
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
            return $this->redirect(['index', 'id' => $model->id_pakar]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pakar model.
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
     * Finds the Pakar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pakar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pakar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
