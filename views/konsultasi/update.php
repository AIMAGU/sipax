<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Konsultasi */

$this->title = 'Update Konsultasi: ' . $model->id_konsultasi;
$this->params['breadcrumbs'][] = ['label' => 'Konsultasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_konsultasi, 'url' => ['view', 'id' => $model->id_konsultasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konsultasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
