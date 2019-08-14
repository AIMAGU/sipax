<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\KonsultasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'HASIL KONSULTASI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsultasi-index">

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
   <p>
        <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Konsultasi Baru', ['create'], ['class' => 'btn btn-success waves-effect waves-light']) ?>
        <?= Html::a('<span class="btn-label"><i class="fa fa-arrow-up"></i></span> Grafik', ['site/grafik'], ['class' => 'btn btn-info waves-effect waves-light']) ?>
    </p>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		'layout' => '{items} {pager}',
		'options' => ['class' => 'full-color-table full-muted-table hover-table'],
		'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_konsultasi',
            'nama_penderita',
            'jenis_penderita',
            'usia_penderita',
            'alamat_penderita',
            'kode_diagnosa',
            'hasil_cf',
            //'tanggal',
            //'id_user',

            //['class' => 'yii\grid\ActionColumn'],
			[
			'class'    => 'yii\grid\ActionColumn',
			'header'   => 'Menu',
			'headerOptions' => ['style' => 'width:15%'],
			'template' => '{hasil} {leadUpdate} {leadDelete}',
			'buttons'  => [
				'hasil' => function ($url, $model) {
					Yii::$app->session->remove('id_konsultasi');
					$url = Url::to(['/site/no-pengetahuan', 'id' => $model->id_konsultasi]);
					return Html::a('<span class="fa fa-arrow-right"></span>', $url, ['class' => 'btn btn-info']);
				},
				'leadUpdate' => function ($url, $model) {
					$url = Url::to(['update', 'id' => $model->id_konsultasi]);
					return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
				},
				'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id_konsultasi]);
					return Html::a('<span class="fa fa-trash"></span>', $url, [
						'title'        => 'delete',
						'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
						'data-method'  => 'post',
						'class'  => 'btn btn-danger',
					]);
				},
				/* 'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id_konsultasi]);
					return Html::beginForm($url, 'post')
					. Html::submitButton(
						'<span class="fa fa-trash"></span>',
						['class' => 'btn btn-danger']
					)
					. Html::endForm();
				}, */
			]
			]
        ],
    ]); ?>


</div>
