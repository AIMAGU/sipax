<?php
use yii\helpers\Html;
use yii\bootstrap4\Modal;
use kartik\widgets\ActiveForm;
use kartik\widgets\FileInput;

$this->title = 'Update Foto';
?>
<?= Html::a('Upload', '#', ['data-toggle'=>"modal", 'data-target'=>"#modalku", 'class' => '']) ?>
<?php 
Modal::begin([
	'id' => 'modalku',
    'title' => $this->title,
    //'toggleButton' => ['label' => 'click me'],
]);
?>
<?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'] // important
]); ?>
	<?php echo $form->field($model, 'foto')->widget(FileInput::classname(), [
		'options' => ['accept' => 'image/*'],
	])->label(false); ?>
	<?= Html::submitButton('<span class="btn-label"><i class="fa fa-check"></i></span> Simpan', ['class' => 'btn btn-success waves-effect waves-light']) ?>

<?php ActiveForm::end(); ?>
<?php
Modal::end();
?>