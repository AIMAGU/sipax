<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aturan */

$this->title = 'TAMBAH DATA ATURAN';
$this->params['breadcrumbs'][] = ['label' => 'Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aturan-create">
	<?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
