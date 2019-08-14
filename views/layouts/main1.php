<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<div class="container">
<div class="conx">
<h1><center><?= Yii::$app->name; ?></center></h1>
<div class="row row-offcanvas row-offcanvas-right">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="https://cdn3.iconfinder.com/data/icons/user-avatars-1/512/users-10-3-128.png" style="display:inline; vertical-align: top; height:32px;"> '.Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

		<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <div class="col-xs-12 col-sm-9">
			<?= Alert::widget() ?>
			<?= $content ?>
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
		  <a class="thumbnail" href="#">
			<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Carousel example" width="800" height="600">
		  </a>
		  
          <div class="list-group">
			<?= Html::a('<i class="glyphicon glyphicon-home"></i> Beranda',['site/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-alert"></i> Gejala',['gejala/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-flash"></i> Diagnosa',['diagnosa/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-star-empty"></i> Pakar',['pakar/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-random"></i> Aturan',['aturan/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-phone"></i> Konsultasi',['konsultasi/mulai'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-tree-conifer"></i> Hasil Konsultasi',['konsultasi/index'], ['class' => 'list-group-item']) ?>
			<?= Html::a('<i class="glyphicon glyphicon-user"></i> User',['user/index'], ['class' => 'list-group-item']) ?>
            </div>
        </div><!--/.sidebar-offcanvas-->
      </div>
	  <footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>
    </div>
</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
