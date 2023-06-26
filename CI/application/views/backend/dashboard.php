<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- 以下的<script> 就是 google.visualization 的plugin  -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']}); //它会初始化先
      google.charts.setOnLoadCallback(drawChart);                // 然后 运行 callback function（drawChart）

      function drawChart() { // 这就是drawChart()的function 
        var data = google.visualization.arrayToDataTable(<?=json_encode($finalFormat)?>); // json_encode 把array 变成string // month是string qty是integer

        var options = {
          title: 'Webpage Visitors',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

</head>

<body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>

</html>