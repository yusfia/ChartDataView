<?php
//phpinfo();
include('db.class.php'); // call db.class.php
include('chartobject.class.php');
$bdd = new db(); // create a new object, class db()
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
    
<?php
	$entity = new ChartEntity();
    $entity
        ->setMtrHndingCode("Towing Z")
        ->setTrollyCodeStart("A-B-C")
        ->setTrollyCodeEnd("A-B-C")
        ->setCycleNumber(1)
        ->setTreshold(12)
        ->setTimeToGo("10:00:00")
        ->setTimeToBack("10:06:00")
        ->setDuration(6)
        ->setAcptnceStat(true);
    echo $entity->sqlInsertString();
    //$bdd->execute($entity->sqlInsertString());
?>
    <script type="text/javascript">
        var data = [3.5, 3, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3, 3, 4, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3, 3.8, 3.2, 3.7, 3.3, 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2, 3, 2.2, 2.9, 2.9, 3.1, 3, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3, 2.8, 3, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3, 3.4, 3.1, 2.3, 3, 2.5, 2.6, 3, 2.6, 2.3, 2.7, 3, 2.9, 2.9, 2.5, 2.8, 3.3, 2.7, 3, 2.9, 3, 3, 2.5, 2.9, 2.5, 3.6, 3.2, 2.7, 3, 2.5, 2.8, 3.2, 3, 3.8, 2.6, 2.2, 3.2, 2.8, 2.8, 2.7, 3.3, 3.2, 2.8, 3, 2.8, 3, 2.8, 3.8, 2.8, 2.8, 2.6, 3, 3.4, 3.1, 3, 3.1, 3.1, 3.1, 2.7, 3.2, 3.3, 3, 2.5, 3, 3.4, 3];
Highcharts.chart('container', {
    title: {
        text: 'Highcharts Histogram'
    },
    xAxis: [{
        title: { text: 'Data' },
        alignTicks: false
    }, {
        title: { text: 'Histogram' },
        alignTicks: false,
        opposite: true
    }],

    yAxis: [{
        title: { text: 'Data' }
    }, {
        title: { text: 'Histogram' },
        opposite: true
    }],
    
    series: [{
        name: 'Histogram',
        type: 'histogram',
        xAxis: 1,
        yAxis: 1,
        baseSeries: 's1',
        data:data,
        zIndex: -1
    }]
});
		</script>
</body>
</html>

