<?php
include_once('ChartEntity.class.php');
include_once('queryproxy.class.php');
$queryProxy = new QueryProxy();
?>

<html>
<head>
	<title>
		Chart
	</title>
    <script src="./resource/code/highcharts.js"></script>
    <script src="./resource/code/modules/histogram-bellcurve.js"></script>
    
</head>
<body>
    <div id="container"></div> 

    <script type="text/javascript">
<?php $queryResult = $queryProxy->selectAll(); ?>
Highcharts.chart('container', {
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        min: 0,
        title: {
            text: 'No'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Duration (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        type: 'column',
        name: 'Duration',
        data: <?php echo "[".implode(",",$queryResult[1])."]";?>
    }, {
        type: 'spline',
        name: 'Treshold',
        data: <?php echo "[".implode(",",$queryResult[2])."]";?>
    }]
});
		</script>
</body>
</html>

