<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */

$this->title = 'Ubah Gejala: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Gejalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gejala-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
