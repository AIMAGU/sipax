<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Diagnosa;
use app\models\Gejala;
/* @var $this yii\web\View */
/* @var $model app\models\Pakar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pakar-form">

    <?php $form = ActiveForm::begin(); ?>
	
    	<?php
		$diagnosa=Diagnosa::find()->all();
		echo $form->field($model, 'kode_diagnosa')->dropDownList(ArrayHelper::map($diagnosa,'kode', function($diagnosa) { return $diagnosa->kode . ' - ' . $diagnosa->nama; }), ['prompt'=>'.: Pilih Diagnosa :.']);		
		/* echo $form->field($model, 'kode_diagnosa')->widget(Select2::classname(), [
            'data' => ArrayHelper::map($diagnosa,'kode', function($diagnosa) { return $diagnosa->kode . ' - ' . $diagnosa->nama; }),
            'theme' => Select2::THEME_KRAJEE_BS4,
            'options' => ['placeholder' => '.: Pilih Diagnosa :.'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Diagnosa'); */
	?>
	
	<?php
		$gejala=Gejala::find()->all();	
		echo $form->field($model, 'kode_gejala')->dropDownList(ArrayHelper::map($gejala,'kode', function($gejala) { return $gejala->kode . ' - ' . $gejala->nama; }), ['prompt'=>'.: Pilih Gejala :.']);		
		/* echo $form->field($model, 'kode_gejala')->widget(Select2::classname(), [
            'data' => ArrayHelper::map($gejala,'kode', function($gejala) { return $gejala->kode . ' - ' . $gejala->nama; }),
            'theme' => Select2::THEME_BOOTSTRAP,
            'options' => ['placeholder' => '.: Pilih Gejala :.'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Gejala'); */
	?>

    <?= $form->field($model, 'mb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'md')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="btn-label"><i class="fa fa-check"></i></span> Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>
		<?= Html::a('<span class="btn-label"><i class="fa fa-arrow-left"></i></span> Kembali', ['index'], ['class' => 'btn btn-danger waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
