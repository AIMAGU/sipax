<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */

$this->title = 'TAMBAH DATA GEJALA';
$this->params['breadcrumbs'][] = ['label' => 'Gejalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
