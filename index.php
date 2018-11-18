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
    <link rel="stylesheet" href="./resource/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./resource/bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div id="containerline" class="col-md-6"></div> 
        <div id="containerpie" class="col-md-6"></div>
    </div>

    <script type="text/javascript">
<?php $queryResult = $queryProxy->selectAll(); ?>
Highcharts.chart('containerline', {
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
    
    <script type="text/javascript">
<?php $countResult = $queryProxy->selectByTreshold(); ?>
Highcharts.chart('containerpie', {
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
            text: 'Duration'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
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
        type: 'pie',
        name: 'Total',
        data: [{
            name: 'Above Treshold',
            y: <?php echo $countResult[2]?>,
            color: Highcharts.getOptions().colors[0]
        }, {
            name: 'Below Treshold',
            y: <?php echo $countResult[1]?>,
            color: Highcharts.getOptions().colors[1] 
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});
        
    </script>
</body>
</html>

