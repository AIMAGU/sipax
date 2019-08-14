<?php

use yii\helpers\Html;
use kartik\password\PasswordInput;
use kartik\widgets\ActiveForm; // optional
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'username',['enableAjaxValidation' => true])->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	
	<?php echo $form->field($model, 'level')->dropDownList(
		['petugas' => 'Petugas', 'pakar' => 'Pakar', 'admin' => 'Admin'],
		['prompt'=>'-- Pilih Level --']
	); ?>
    
	<?php echo $form->field($model, 'password')->widget(PasswordInput::classname(), [
		'pluginOptions' => [
			'language' => 'id',
			'showMeter' => true,
			'toggleMask' => true,
			'number' => 4,
		]
	]); ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="btn-label"><i class="fa fa-shield"></i></span> Mulai Konsultasi', ['class' => 'btn btn-success waves-effect waves-light']) ?>
		<?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span> Kembali', ['index'], ['class' => 'btn btn-danger waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
