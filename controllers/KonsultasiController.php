<?php

namespace app\controllers;

use Yii;
use app\models\HasilKonsultasi;
use app\models\Konsultasi;
use app\models\KonsultasiSearch;
use app\models\Aturan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KonsultasiController implements the CRUD actions for Konsultasi model.
 */
class KonsultasiController extends Controller
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

	public function actionMulai()
    {
        $idaturan=Aturan::find()->orderBy('id_aturan')->one()->id_aturan;
		if($idaturan){
			return $this->redirect(['aturan/view', 'id' => $idaturan]);
		}
    }
	
    /**
     * Lists all Konsultasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KonsultasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Konsultasi model.
     * @param string $id
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
     * Creates a new Konsultasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Konsultasi();
		
        if ($model->load(Yii::$app->request->post())) {
			$model->tanggal=date('Y-m-d H:i:s');
			$model->id_user=Yii::$app->user->id;
			$model->kode_diagnosa=Null;
			$model->hasil_cf=Null;
			if($model->save()){
				if(Yii::$app->session['id_konsultasi']){
					unset(Yii::$app->session['id_konsultasi']);
				}
				Yii::$app->session['id_konsultasi'] = $model->id_konsultasi;
				return $this->redirect(['mulai', 'id' => $model->id_konsultasi]);
			}
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Konsultasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Konsultasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $konsul = $this->findModel($id);
		$hkonsul=HasilKonsultasi::deleteAll(
			'id_konsultasi = :id_konsultasi', [':id_konsultasi' => $id]);
		/* $konsul = HasilKonsultasi::find()
			->where(['id_konsultasi' => $hkonsul->id_konsultasi]);
		$konsul->delete(); */
		if($hkonsul){
			$konsul->delete();
			return $this->redirect(['index']);
		}
    }

    /**
     * Finds the Konsultasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Konsultasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Konsultasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
