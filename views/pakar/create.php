<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pakar */

$this->title = 'TAMBAH DATA PAKAR';
$this->params['breadcrumbs'][] = ['label' => 'Pakars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pakar-create">
    <?= $this->render('/site/ketentuan') ?>
	<?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
