<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
			$model->password=User::hide('en',Yii::$app->request->post('User')['password']);
			if($model->save()){
				\Yii::$app->session->setFlash('success', 'Data pengguna berhasil ditambahkan.');
				return $this->redirect(['index']);
			}
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->password=User::hide('en',Yii::$app->request->post('User')['password']);
			if($model->save()){
				\Yii::$app->session->setFlash('success', 'Data pengguna berhasil diubah.');
				return $this->redirect(['index']);
			}
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	public function actionStatus($id, $q)
    {
        $model = $this->findModel($id);
		if($q==1){
			$model->status=0;
			\Yii::$app->session->setFlash('danger', 'Data pengguna non aktif');
		}else{
			$model->status=1;
			\Yii::$app->session->setFlash('success', 'Data pengguna aktif');
		}
		if($model->save()){
			return $this->redirect(['index']);
		}else{
			\Yii::$app->session->setFlash('danger', 'Gagal, username tidak memenuhi syarat.');
			return $this->redirect(['index']);
		}
    }
	
	public function actionFoto($id)
    {
		$model = User::find()->where('id = :id', [':id' => $id])->one();
        if ($model->load(Yii::$app->request->post())) {
			$model->foto = UploadedFile::getInstance($model, 'foto');
            if($model->save() && $model->upload()){
				\Yii::$app->session->setFlash('success', 'Foto berhasil diperbarui.');
				return $this->redirect(['index']);
			}
		}
		return $this->render('foto', [
            'model' => $model,
        ]);
    }
}
