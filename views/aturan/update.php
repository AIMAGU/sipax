<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aturan */

$this->title = 'Ubah Aturan: ' . $model->kode_gejala;
$this->params['breadcrumbs'][] = ['label' => 'Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_aturan, 'url' => ['view', 'id' => $model->id_aturan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aturan-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
