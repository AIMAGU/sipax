<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Gejala;
use app\models\Diagnosa;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AturanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MANAJEMEN ATURAN';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aturan-index">
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

            //'id_aturan',
			[
				'header'=>'Basis Aturan',
				'format' => 'html',
				'value'=>function($data){
					if(!empty($data->ya) && !empty($data->tidak)){
						if($data->ya[0]=="G"){
							$y = Gejala::find()
								->where(['kode' => $data->ya])
								->one()->nama;
						}elseif($data->ya[0]=="D"){
							$y = Diagnosa::find()
								->where(['kode' => $data->ya])
								->one()->nama;
						}else{
							$y="Tidak Cukup Pengetahuan";
						}
						if($data->tidak[0]=="G"){
							$t = Gejala::find()
								->where(['kode' => $data->tidak])
								->one()->nama;
						}elseif($data->tidak[0]=="D"){
							$t = Diagnosa::find()
								->where(['kode' => $data->tidak])
								->one()->nama;
						}else{
							$t="Tidak Cukup Pengetahuan";
						}
					}else{
						$y="Tidak Cukup Pengetahuan";
						$t="Tidak Cukup Pengetahuan";
					}
					
					return "<b>JIKA</b> ".$data->gejala1->nama."<br><b>MAKA</b> ".$y."<br><b>JIKA TIDAK MAKA</b> ".$t;
				}
			],
            //'kode_gejala',
            //'ya',
            //'tidak',

            //['class' => 'yii\grid\ActionColumn'],
			[
			'class'    => 'yii\grid\ActionColumn',
			'header'   => 'Menu',
			'template' => '{leadUpdate} {leadDelete}',
			'buttons'  => [
				'leadUpdate' => function ($url, $model) {
					$url = Url::to(['update', 'id' => $model->id_aturan]);
					return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
				},
				'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id_aturan]);
					return Html::a('<span class="fa fa-trash"></span>', $url, [
						'title'        => 'delete',
						'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
						'data-method'  => 'post',
						'class'  => 'btn btn-danger',
					]);
				},
				/* 'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->kode]);
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
