<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\HasilKonsultasi;
$this->title = 'Hasil Diagnosa';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card-body">
	<div class="row">
		<div class="col-md-3 col-xs-6 b-r"> <strong>Nama Penderita/Pemilik</strong>
			<br>
			<p class="text-muted"><?= $model->nama_penderita; ?></p>
		</div>
		<div class="col-md-2 col-xs-6 b-r"> <strong>Jenis</strong>
			<br>
			<p class="text-muted"><?= $model->jenis_penderita; ?></p>
		</div>
		<div class="col-md-2 col-xs-6 b-r"> <strong>Usia</strong>
			<br>
			<p class="text-muted"><?php 
				if($model->usia_penderita>=12)
					echo ($model->usia_penderita/12)." tahun";
				else
					echo $model->usia_penderita." bulan"; ?></p>
		</div>
		<div class="col-md-2 col-xs-6 b-r"> <strong>Alamat</strong>
			<br>
			<p class="text-muted"><?= $model->alamat_penderita; ?></p>
		</div>
		<div class="col-md-2 col-xs-6  b-r"> <strong>Diagnosa</strong>
			<br>
			<p class="text-danger"><?= !empty($model->kodeDiagnosa->nama)? $model->kodeDiagnosa->nama : 'Tidak Cukup Pengetahuan'; ?></p>
		</div>
		<div class="col-md-1 col-xs-6"> <strong>CF</strong>
			<br>
			<span class='badge badge-danger'><?= !empty($model->kodeDiagnosa->nama)? $model->hasil_cf*100 : 0; ?>%</span>
		</div>
	</div>
	<hr>
	<?php
	if(!empty(Yii::$app->session['id_konsultasi']))
			$s_konsultasi=Yii::$app->session['id_konsultasi'];
		else
			$s_konsultasi=Yii::$app->request->queryParams['id'];
	$riwayat = HasilKonsultasi::find()
		->where('id_konsultasi = :s_konsultasi', [':s_konsultasi' => $s_konsultasi])
		->orderBy('id_hasil_konsultasi')
		->all();
	$tabs = HasilKonsultasi::find()
		->where('id_konsultasi = :s_konsultasi', [':s_konsultasi' => $s_konsultasi])
		->andWhere('jawaban = :jawaban', [':jawaban' => 1])
		->orderBy('id_hasil_konsultasi')
		->all();

	echo '<div class="row">
		<div class="col-md-4">
			<h4 class="font-medium m-t-30">Gejala Terpilih</h4><br>';
		foreach($riwayat as $i){
			echo '<p><i class="fa fa-check-square-o"></i> ['.$i->aturan->gejala1->kode."] ".Yii::$app->params['tanya_awal'].' '.$i->aturan->gejala1->nama.Yii::$app->params['tanya_akhir'];
			if($i->jawaban==1){
				echo " <span class='badge badge-success'>YA </span></p>";
			}else{
				echo " <span class='badge badge-danger'>TIDAK</span></p>";
			};
		}
		?>
		</div>
		<div class="col-md-5">
		<h4 class="font-medium m-t-30">Hasil Identifikasi</h4>
		<?php foreach($tabs as $tab){
			echo '<h5 class="m-t-30">'.$tab->aturan->gejala1->nama.' <span class="badge badge-info pull-right">'.$tab->cf_user.'</span></h5>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" aria-valuenow="'.($tab->cf_user*100).'" aria-valuemin="0" aria-valuemax="100" style="width:'.($tab->cf_user*100).'%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
				</div>';
		} ?>
		</div>
		<div class="col-md-3">
		<h4 class="font-medium m-t-30">Solusi</h4><br>
		<p><?= !empty($model->kodeDiagnosa->solusi)? $model->kodeDiagnosa->solusi : '-'; ?></p>
			<?= Html::a('<i class="fa fa-shield"></i> Konsultasi Ulang', ['/konsultasi/create'], ['class' => 'btn btn-danger btn-block waves-effect waves-light']) ?>
			<?= Html::a('<i class="fa fa-print"></i> Cetak Hasil', ['/site/report'], ['class' => 'btn btn-warning btn-block waves-effect waves-light']) ?>
		</div>
	</div>
</div>