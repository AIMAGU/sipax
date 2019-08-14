<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SIPAX - Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<h3 class="box-title m-b-20">LOGIN SIPAX</h3><hr>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
		'options' => [
			'class' => 'form-horizontal form-material'
		 ],
        //'layout' => 'horizontal',
        /* 'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ], */
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username'])->label(false) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false) ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-6\">{input} {label}</div>\n<div class=\"col-lg-6\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light', 'name' => 'login-button']) ?>
            </div>
        </div>
		<div class="form-group m-b-0">
			<div class="col-sm-12 text-center">
				<small><strong>Balai Besar Veteriner Wates</strong><br>
				Jl. Raya Yogya – Wates Km. 27 Kulon Progo, Yogyakarta 55651
				</small>
				<br>
				<small><a href="https://forms.gle/HfkRKMaPDgvbpdbZ8" target="_blank">(ISI KUISIONER)</a></small>
			</div>
		</div>
    <?php ActiveForm::end(); ?>
