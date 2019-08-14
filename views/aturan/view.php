<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\form\ActiveForm;
use app\models\Aturan;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Aturan */

$this->title = "KONSULTASI #".Yii::$app->session['id_konsultasi'];
$this->params['breadcrumbs'][] = ['label' => 'Aturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aturan-view">

	<?php
		//Ya
		if($model->ya!=null){
    		$kode_y=$model->ya[0];
    		if($kode_y=='G')
    			$url_y=Aturan::find()->where('kode_gejala = :kode_gejala', [':kode_gejala' => $model->ya])->one()->id_aturan;
    		elseif($kode_y=='D')
    			$url_y=$model->ya;
		}else
			$url_y=1000;
		//Tidak
		if($model->tidak!=null){
		$kode_t=$model->tidak[0];
    		if($kode_t=='G')
    			$url_t=Aturan::find()->where('kode_gejala = :kode_gejala', [':kode_gejala' => $model->tidak])->one()->id_aturan;
    		elseif($kode_t=='D')
    			$url_t=$model->tidak;
		}else
			$url_t=1000;
		//--Stop--//
		echo '
			<div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">'.$model->gejala1->kode.'</div><br>';
		echo "<h2>".Yii::$app->params['tanya_awal']." ".$model->gejala1->nama." ".Yii::$app->params['tanya_akhir']."</h2>";
		echo Html::a('<span class="btn-label"><i class="fa fa-check"></i></span> YA', '#.', ["onclick" => "toggler('myContent');", 'class' => 'btn btn-warning waves-effect waves-light']);
		echo "&nbsp";
		echo Html::a('<span class="btn-label"><i class="fa fa-remove"></i></span> TIDAK', ['hasil-konsultasi/riwayat', 'j'=>0, 'id'=>$url_t, 'p'=>$model->id_aturan], ['class' => 'btn btn-primary waves-effect waves-light']); 
		echo '<div id="myContent" style="display:none">';
			echo '<br><div class="row">
				<div class="col-md-4">
					<div class="card card-outline-warning">
						<div class="card-header">
							<h4 class="m-b-0 text-white">Masukkan Nilai CF</h4>
						</div>
						<div class="card-body">';
							$form = ActiveForm::begin([
								'method' => 'get',
								'action' => Url::to(['hasil-konsultasi/riwayat', 'j'=>1, 'id'=>$url_y, 'p'=>$model->id_aturan]),
							]);
								echo $form->field($model, 'cfuser')->textInput(['class' => 'form-control'])->label(false);
								echo Html::submitButton('<i class="fa fa-save"></i> SIMPAN', ['class' => 'btn btn-block btn-warning']);
							ActiveForm::end();
					echo '</div></div>
				</div>
				<div class="col-md-8 text-left">';
					echo $this->render("/site/ketentuan");
				echo '</div>
			</div>
		</div>';
	?>

</div>
<script type="text/javascript">
function toggler(divId) {
    $("#" + divId).toggle();
}
</script>