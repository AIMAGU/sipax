<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pakar */

$this->title = 'Ubah Pakar: ' . $model->kode_diagnosa.' & '.$model->kode_gejala;
$this->params['breadcrumbs'][] = ['label' => 'Pakars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pakar, 'url' => ['view', 'id' => $model->id_pakar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pakar-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
