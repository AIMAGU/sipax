<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HasilKonsultasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hasil Konsultasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-konsultasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil Konsultasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_hasil_konsultasi',
            'id_konsultasi',
            'id_aturan',
            'jawaban:boolean',
            'cf_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
