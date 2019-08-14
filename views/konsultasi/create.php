<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Konsultasi */

$this->title = 'DATA KONSULTASI';
$this->params['breadcrumbs'][] = ['label' => 'Konsultasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-create">
	<?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
