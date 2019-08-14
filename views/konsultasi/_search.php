<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KonsultasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="konsultasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_konsultasi') ?>

    <?= $form->field($model, 'nama_penderita') ?>

    <?= $form->field($model, 'jenis_penderita') ?>

    <?= $form->field($model, 'kode_diagnosa') ?>

    <?= $form->field($model, 'hasil_cf') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
