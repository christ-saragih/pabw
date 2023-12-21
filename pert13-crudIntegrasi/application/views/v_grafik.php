<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo base_url('assets/fusionchart/js/fusioncharts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/fusionchart/js/fusioncharts.charts.js') ?>"></script> <!-- Include fusioncharts.charts.js for chart types like line -->
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var G1 = new FusionCharts({
                "type": "line",
                "renderAt": "lokasi_grafik",
                "width": "800",
                "height": "500",
                "dataFormat": "json",
                "dataSource": {
                    "chart": {
                        "caption": "Monthly Revenue",
                        "subCaption": "INF Mart",
                        "xAxisName": "Month",
                        "yAxisName": "Revenues",
                        "theme": "fint"
                    },
                    "data": [
                        {"label": "Jan", "value": "100"},
                        {"label": "Feb", "value": "200"},
                        {"label": "Mar", "value": "150"},
                        {"label": "Apr", "value": "400"}
                    ]
                }
            });
            G1.render();
        });
    </script>
</head>
<body>
    <div id="lokasi_grafik">Di sini</div>
</body>
</html>
