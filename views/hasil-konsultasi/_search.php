<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HasilKonsultasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hasil-konsultasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_hasil_konsultasi') ?>

    <?= $form->field($model, 'id_konsultasi') ?>

    <?= $form->field($model, 'id_aturan') ?>

    <?= $form->field($model, 'jawaban')->checkbox() ?>

    <?= $form->field($model, 'cf_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
