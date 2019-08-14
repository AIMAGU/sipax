<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diagnosa */

$this->title = 'TAMBAH DATA DIAGNOSA';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
