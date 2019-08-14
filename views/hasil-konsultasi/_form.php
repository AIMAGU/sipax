<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HasilKonsultasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hasil-konsultasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_konsultasi')->textInput() ?>

    <?= $form->field($model, 'id_aturan')->textInput() ?>

    <?= $form->field($model, 'jawaban')->checkbox() ?>

    <?= $form->field($model, 'cf_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
