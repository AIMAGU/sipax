<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */

$this->title = 'Ubah Diagnosa: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Diagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diagnosa-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
