<?php



?>
<html>

    <head>
        <title>Predict</title>
        <link href="https://fluentdesignforweb.github.io/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/fluent.css"  rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css"  rel="stylesheet" type="text/css">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="customstyles.css"  rel="stylesheet" type="text/css">
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>
    <body>
        <div id="myDiv" style="width:80%; height:100%;"></div>
    </body>
    <script>
        var trace3 = {
        x: [81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98],

        y: [16.07, 16.10, 16.13, 16.61, 16.85, 17.20, 17.23, 17.43, 17.87, 17.98, 18.27, 18.48, 18.6, 19.33, 19.36, 19.97, 20.15, 
        20.67, 20.88, 21.00, 21.17, 21.87, 21.89, 22.04, 22.14, 22.95, 23.6, 23.84,],
        mode: 'lines+markers'
        };

        var data = [ trace3 ];

        var layout = {
        title:'Hours vs Contents Plot'
        };

        Plotly.newPlot('myDiv', data, layout);
    </script>

</html>