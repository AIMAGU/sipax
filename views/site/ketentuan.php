<?php
use yii\helpers\Html;
?>
<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4><i class="icon fa fa-exclamation-triangle"></i> Petunjuk Pengisian Pakar !</h4>
	<hr><small>
	Silahkan pilih gejala yang sesuai dengan kondisi penderita, dan berikan <b>nilai kepastian (MB &amp; MB)</b> dengan cakupan sebagai berikut:<br>
	<b>1.0</b> (Pasti Ya)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.8</b> (Hampir Pasti)&nbsp;&nbsp;|<br>
	<b>0.6</b> (Kemungkinan Besar)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.4</b> (Mungkin)&nbsp;&nbsp;|<br>
	<b>0.2</b> (Hampir Mungkin)&nbsp;&nbsp;|&nbsp;&nbsp;<b>0.0</b> (Tidak Tahu atau Tidak Yakin)&nbsp;&nbsp;|<br>
	<b>CF(Pakar) = MB – MD</b><br>
	MB : Ukuran kenaikan kepercayaan (measure of increased belief) <br>
	MD : Ukuran kenaikan ketidakpercayaan (measure of increased disbelief) <br>
	<b>Contoh:</b><br>
	Jika kepercayaan <b>(MB)</b> anda terhadap gejala lemas untuk tingkat keparahan sub akut adalah <b>0.8 (Hampir Pasti)</b><br>
	Dan ketidakpercayaan <b>(MD)</b> anda terhadap gejala lemas untuk tingkat keparahan sub akut adalah <b>0.2 (Hampir Mungkin)</b><br>
	<b>Maka:</b> <br>
	CF(Pakar) = MB – MD (0.8 - 0.2) = <b>0.6</b> <br>
	Dimana nilai kepastian anda terhadap gejala lemas untuk tingkat keparahan sub akut adalah <b>0.6 (Kemungkinan Besar)</b></small>
</div>
