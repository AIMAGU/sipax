<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Gejala;
use app\models\Diagnosa;
use app\models\User;
use app\models\Konsultasi;
use kartik\mpdf\Pdf;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		/* if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        } */
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
		$this->layout = 'm_login';
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
			$user = User::find()
				->where([
					'username' => Yii::$app->request->post('LoginForm')['username'], 
					'password' => User::hide('en',Yii::$app->request->post('LoginForm')['password']),
					'status' => 1
				])
				->one();
            if($user && $model->login()){
				Yii::$app->session->set('level',$user->level);
				Yii::$app->session->set('email',$user->email);
				\Yii::$app->session->setFlash('success', 'Login berhasil. Silahkan gunakan aplikasi dengan baik.');
				//return $this->goBack();
				return $this->redirect(['/site/index']);
			}else
				\Yii::$app->session->setFlash('danger', 'Login gagal. Periksa kembali kombinasi username dan password anda.');
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
        Yii::$app->user->logout();
		Yii::$app->session->remove('level');
		Yii::$app->session->remove('email');
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionGrafik()
    {
        return $this->render('grafik');
    }
	
	public function actionPengembang()
    {
        return $this->render('pengembang');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionKode()
    {
		$ctrl1=ucwords(Yii::$app->request->queryParams['r'] );
		$ctrl=explode("/", $ctrl1);
		if($ctrl[0]=='Gejala' || $ctrl[0]=='Diagnosa'){
			if($ctrl[0]=='Gejala')
				$cari=Gejala::find()->orderBy("kode DESC")->one()->kode;
			else
				$cari=Diagnosa::find()->orderBy("kode DESC")->one()->kode;
			$id_max = $cari;
			$sort_num = (int) substr($id_max, 1, 3);
			$sort_num++;
			$new_code = sprintf("%03s", $sort_num);
			$new_code = $ctrl1[0].$new_code;
			return $new_code;
		}
    }
	
	public function actionNoPengetahuan()
    {
		if(!empty(Yii::$app->session['id_konsultasi']))
			$s_konsultasi=Yii::$app->session['id_konsultasi'];
		else
			$s_konsultasi=Yii::$app->request->queryParams['id'];
		IF(!empty($s_konsultasi))
			$model=Konsultasi::find()->where('id_konsultasi = :id_konsultasi', [':id_konsultasi' => $s_konsultasi])->one();
        return $this->render('c_hasil', [
            'model' => $model,
        ]);
    }
	
	public function actionReport() {
		$s_konsultasi=Yii::$app->session['id_konsultasi'];
		IF(!empty($s_konsultasi))
			$model=Konsultasi::find()->where('id_konsultasi = :id_konsultasi', [':id_konsultasi' => $s_konsultasi])->one();
        $content = $this->renderPartial('c_hasil', [
            'model' => $model,
        ]);
		// setup kartik\mpdf\Pdf component
		Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
		$pdf = new Pdf([
			'mode' => Pdf::MODE_CORE, 
			'format' => Pdf::FORMAT_A4, 
			'orientation' => Pdf::ORIENT_PORTRAIT,
			'destination' => Pdf::DEST_BROWSER, 
			'content' => $content,  
			'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
			'cssInline' => '.kv-heading-1{font-size:18px}', 
			'options' => ['title' => 'Balai Besar Veteriner Wates'],
			'methods' => [
				'SetTitle' => 'SIPAX - Balai Besar Veteriner Wates',
				'SetSubject' => 'Sistem Pakar Diagnosa Penyakit Anthrax',
				'SetHeader' => ['SIPAX - Balai Besar Veteriner Wates || Tanggal: ' . date("r")],
				'SetFooter' => ['|Halaman {PAGENO}|'],
				'SetAuthor' => 'SIPAX',
				'SetCreator' => 'SIPAX',
				'SetKeywords' => 'sipax, sistem pakar, certainty factor, bbvet wates',
			]
		]);
		
		// return the pdf output as per the destination setting
		return $pdf->render(); 
	}
}
