<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PakarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pakar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pakar') ?>

    <?= $form->field($model, 'kode_diagnosa') ?>

    <?= $form->field($model, 'kode_gejala') ?>

    <?= $form->field($model, 'mb') ?>

    <?= $form->field($model, 'md') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
