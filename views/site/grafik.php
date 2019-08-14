<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use app\models\Konsultasi;
$this->title = 'Grafik Tingkat Keparahan';
?>
<?php 
	$connection = Yii::$app->getDb();
$command = $connection->createCommand("
SELECT
		kode_diagnosa as k,
   COUNT(kode_diagnosa) as h
FROM
   konsultasi
WHERE
	kode_diagnosa is not null
GROUP BY
   kode_diagnosa
ORDER BY
	kode_diagnosa
");

$result = $command->queryAll();
$k=array();
$h=array();
foreach ($result as $i => $j){
	$k[]=$j['k'];
	$h[]=$j['h'];
}
?>
<h4 class="card-title">Grafik Tingkat Keparahan</h4><hr>
<div id="bar-chart" style="width:100%; height:400px;"></div>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/material/assets/plugins/echarts/echarts-all.js"></script>
<script>
var myChart = echarts.init(document.getElementById('bar-chart'));

// specify chart configuration item and data
option = {
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data:['Hasil Konsultasi']
    },
    toolbox: {
        show : true,
        feature : {
            
            magicType : {show: true, type: ['line', 'bar']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    color: ["#009efb"],
    calculable : true,
    xAxis : [
        {
            type : 'category',
            data : <?php print json_encode($k); ?>
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'Tingkat Keparahan',
            type:'bar',
            data:<?php print json_encode($h); ?>,
            markPoint : {
                data : [
                    {type : 'max', name: 'Max'},
                    {type : 'min', name: 'Min'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: 'Average'}
                ]
            }
        }
    ]
};
                    

// use configuration item and data specified to show chart
myChart.setOption(option, true), $(function() {
	function resize() {
		setTimeout(function() {
			myChart.resize()
		}, 100)
	}
	$(window).on("resize", resize), $(".sidebartoggler").on("click", resize)
});

</script>