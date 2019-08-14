<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HasilKonsultasi */

$this->title = 'Create Hasil Konsultasi';
$this->params['breadcrumbs'][] = ['label' => 'Hasil Konsultasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-konsultasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
