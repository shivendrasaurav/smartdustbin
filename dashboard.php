<?php

?>

<html>
    <head>
        <title>Dashboard</title>
        <link href="https://fluentdesignforweb.github.io/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/fluent.css"  rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css"  rel="stylesheet" type="text/css">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="customstyles.css"  rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="sidepanel_container" id="side1">
            <div class="sidepanel_content zi3">
                <button class="primary_red left ta_center mod_close_btn" onclick="closeside1();">X</button>
                <br><br><br><br>
                <div class="page_container">
                    <div class="panel_item ta_right">Panel Item 1</div><br>
                    <div class="panel_item ta_right">Panel Item 2</div><br>
                    <div class="panel_item ta_right">Panel Item 3</div><br>
                    <div class="panel_item ta_right">Panel Item 4</div><br>
                    <div class="panel_item ta_right">Panel Item 5</div><br>
                    <div class="panel_item ta_right">Panel Item 6</div><br>
                </div>
            </div>
        </div>

        <!-- End Of Side Panel -->

        <div class="column large8 medium8 small12 center" id="body"> 


            <div class="pivot_container column large12 small12 medium12 center primary_green zi2" style="padding: 20px;">
                <a class="pivot_button" onclick="openside1();"><i class="ms-Icon ms-Icon--GlobalNavButton"></i></a>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin Location: Some Location</p>
                <div class="progress_bar" style="height: 40px">
                </div>
                <h6>Last Emptied: in Hrs</h6>
                <div class="tooltip_container right">
                    <span class="tooltip_info">Can be used to navigate to the desired dustbin</span>
                    <button class="primary_green">Navigate</button>
                </div>
                <div class="tooltip_container">
                    <span class="tooltip_info">Can be used to predict when dustbin will be full</span>
                    <button class="primary_green">Predict</button>
                </div>
            </div>

        </div>
    </body>
</html>