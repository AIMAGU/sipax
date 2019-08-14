<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Konsultasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="konsultasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_penderita')->textInput(['maxlength' => true]) ?>
	
	<?php echo $form->field($model, 'jenis_penderita')->dropDownList(
		[
			'Sapi' => 'Sapi', 
			'Kambing' => 'Kambing', 
			'Kuda' => 'Kuda',
			'Kerbau' => 'Kerbau',
			'Anjing' => 'Anjing',
			'Kucing' => 'Kucing',
			'Lain-lain' => 'Lain-lain'
		], ['prompt'=>'-- Pilih Jenis --']
    ); ?>

    <?= $form->field($model, 'usia_penderita')->textInput(['maxlength' => true, 'placeholder' => 'Isikan usia (dalam bulan)']) ?>

	<?= $form->field($model, 'alamat_penderita')->textarea(['rows' => '6']) ?>

    <div class="form-group">
		<?php if(!$model->isNewRecord){ ?>
			<?= Html::submitButton('<span class="btn-label"><i class="fa fa-save"></i></span> Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>
		<?php }else{ ?>
			<?= Html::submitButton('<span class="btn-label"><i class="fa fa-shield"></i></span> Mulai Konsultasi', ['class' => 'btn btn-success waves-effect waves-light']) ?>
		<?php } ?>
		<?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span> Kembali', ['index'], ['class' => 'btn btn-danger waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
