<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PakarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MANAJEMEN PAKAR';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pakar-index">

    <p>
        <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Data Baru', ['create'], ['class' => 'btn btn-success waves-effect waves-light']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		'layout' => '{items} {pager}',
		'options' => ['class' => 'full-color-table full-muted-table hover-table'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_pakar',
            'kode_diagnosa',
            'kode_gejala',
            'mb',
            'md',

            //['class' => 'yii\grid\ActionColumn'],
			[
			'class'    => 'yii\grid\ActionColumn',
			'header'   => 'Menu',
			'template' => '{leadUpdate} {leadDelete}',
			'buttons'  => [
				'leadUpdate' => function ($url, $model) {
					$url = Url::to(['update', 'id' => $model->id_pakar]);
					return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
				},
				'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id_pakar]);
					return Html::a('<span class="fa fa-trash"></span>', $url, [
						'title'        => 'delete',
						'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
						'data-method'  => 'post',
						'class'  => 'btn btn-danger',
					]);
				},
				/* 'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id_pakar]);
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
