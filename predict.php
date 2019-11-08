<?php



?>
<html>

    <head>
        <title>Predict</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fluentdesignforweb.github.io/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/fluent.css"  rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css"  rel="stylesheet" type="text/css">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>
    <body>
    <div class="sidepanel_container" id="side1">
            <div class="sidepanel_content zi3">
                <button class="primary_red left ta_center mod_close_btn" onclick="closeside1();">X</button>
                <br><br><br><br>
                <div class="page_container">
                    <a href='dashboard.php'><div class='panel_item ta_right'>Dashboard</div></a><br>
                    <a href='predict.php'><div class='panel_item ta_right'>Predict</div></a><br>
                    <a href='navigate.php'><div class='panel_item ta_right'>Navigate</div></a><br>
                </div>
            </div>
        </div>

        <!-- End Of Side Panel -->

        <div class="column large8 medium8 small12 center" id="body"> 


            <div class="pivot_container column large12 small12 medium12 center primary_green zi2" style="padding: 20px;">
                <a class="pivot_button" onclick="openside1();"><i class="ms-Icon ms-Icon--GlobalNavButton"></i></a>
            </div>

            <br><br>

            <h3>Analysis: </h3>

            <br><br>

            <div id="myDiv" class="primary_white zi2"></div>

        </div>
    </body>
    <script>
        var trace3 = {
        x: [81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98,],

        y: [16.07, 16.10, 16.13, 16.61, 16.85, 17.20, 17.23, 17.43, 17.87, 17.98, 18.27, 18.48, 18.6, 19.33, 19.36, 19.97, 20.15, 
        20.67, 20.88, 21.00, 21.17, 21.87, 21.89, 22.04, 22.14, 22.95, 23.6, 23.84,],
        mode: 'lines+markers',
            name: 'Per Hour Prediction',
        };

        var trace2 = {
            x: [90],
            y: [18],
            mode: 'markers',
            name: 'Sweet Spot',
            marker: {
                size: 20,
            },
        };

        var data = [ trace3, trace2 ];

        var layout = {
        title:'Hours vs Contents Plot'
        };

        Plotly.newPlot('myDiv', data, layout);
    </script>

</html>