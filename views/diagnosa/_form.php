<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diagnosa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
	if($model->isNewRecord)
		echo $form->field($model, 'kode')->textInput(['value' => Yii::$app->runAction('site/kode'), 'readonly'=> true]);
	else
		echo $form->field($model, 'kode')->textInput(); 
	?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'solusi')->textarea(['rows' => '6']) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="btn-label"><i class="fa fa-check"></i></span> Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>
		<?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span> Kembali', ['index'], ['class' => 'btn btn-danger waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
