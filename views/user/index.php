<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\User;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MANAJEMEN USER';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
   <p>
        <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Data Baru', ['create'], ['class' => 'btn btn-success waves-effect waves-light']) ?>
    </p>
	
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		'layout' => '{items} {pager}',
		'options' => ['class' => 'full-color-table full-muted-table hover-table'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            [
				'header'=>'Password',
				'format' => 'html',
				'value'=>function($data){
					$de = User::hide('de',$data->password);
					return Html::a($data->password, "#", ['title'=>$de]);
				}
			],
            'level',
            //'status:boolean',
            'email:email',

            //['class' => 'yii\grid\ActionColumn'],
			[
			'class'    => 'yii\grid\ActionColumn',
			'header'   => 'Menu',
			'template' => '{leadStatus} {leadUpdate} {leadDelete}',
			'buttons'  => [
				'leadStatus' => function ($url, $model) {
					$user = User::find()
						->where(['id' => $model->id])
						->one();
					if($user->status==1){
						$url = Url::to(['status', 'id' => $model->id, 'q' => 1]);
						return Html::a('<span class="fa fa-check"></span>', $url, ['class' => 'btn btn-primary', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Data Aktif']);
					}else{
						$url = Url::to(['status', 'id' => $model->id, 'q' => 0]);
						return Html::a('<span class="fa fa-remove"></span>', $url, ['class' => 'btn btn-inverse', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Data Non Aktif']);
					}
				},
				'leadUpdate' => function ($url, $model) {
					$url = Url::to(['update', 'id' => $model->id]);
					return Html::a('<span class="fa fa-pencil"></span>', $url, ['class' => 'btn btn-warning']);
				},
				'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id]);
					return Html::a('<span class="fa fa-trash"></span>', $url, [
						'title'        => 'delete',
						'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
						'data-method'  => 'post',
						'class'  => 'btn btn-danger',
					]);
				},
				/* 'leadDelete' => function ($url, $model) {
					$url = Url::to(['delete', 'id' => $model->id]);
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
