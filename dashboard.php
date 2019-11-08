<?php
    /*

    //Creates new record as per request
    //Connect to database
    $hostname = "localhost";		//example = localhost or 192.168.0.0
    $username = "santoshdkolur";		//example = root
    $password = "santoshdkolur";	
    $dbname = "hack";
    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed !!!");
    } 

    $table = mysqli_query($conn, "SELECT * FROM hackfest where dustbin_no=1 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno1 = $row["dustbin_no"];
        $content1 = $row["contents"];
        $pin1 = $row["pincode"];
        $time1 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * from hackfest where dustbin_no=2 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno2 = $row["dustbin_no"];
        $content2 = $row["contents"];
        $pin2 = $row["pincode"];
        $time2 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * FROM simtab where dustbin_no=3 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno3 = $row["dustbin_no"];
        $content3 = $row["contents"];
        $pin3 = $row["pincode"];
        $time3 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * from simtab where dustbin_no=4 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno4 = $row["dustbin_no"];
        $content4 = $row["contents"];
        $pin4 = $row["pincode"];
        $time4 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * FROM simtab where dustbin_no=5 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno5 = $row["dustbin_no"];
        $content5 = $row["contents"];
        $pin5 = $row["pincode"];
        $time5 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * from simtab where dustbin_no=6 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno6 = $row["dustbin_no"];
        $content6 = $row["contents"];
        $pin6 = $row["pincode"];
        $time6 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * FROM simtab where dustbin_no=7 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno7 = $row["dustbin_no"];
        $content7 = $row["contents"];
        $pin7 = $row["pincode"];
        $time7 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * from simtab where dustbin_no=8 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno8 = $row["dustbin_no"];
        $content8 = $row["contents"];
        $pin8 = $row["pincode"];
        $time8 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * FROM simtab where dustbin_no=9 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno9 = $row["dustbin_no"];
        $content9 = $row["contents"];
        $pin9 = $row["pincode"];
        $time9 = $row["t"];
    }

    $table = mysqli_query($conn, "SELECT * from simtab where dustbin_no=10 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
    while($row = mysqli_fetch_array($table))
    {

        $dno10 = $row["dustbin_no"];
        $content10 = $row["contents"];
        $pin10 = $row["pincode"];
        $time10 = $row["t"];
    }

    */
    $content1= 89; 
    $content2= 75; 
    $content3= 73; 
    $content4= 88; 
    $content5= 50; 
    $content6= 94; 
    $content7= 42; 
    $content8= 58; 
    $content9= 46; 
    $content10= 90; 

?>

<html>
    <head>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fluentdesignforweb.github.io/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/fluent.css"  rel="stylesheet" type="text/css">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css"  rel="stylesheet" type="text/css">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="customstyles.css"  rel="stylesheet" type="text/css">
        <script src="progress_anim.js"></script>
    </head>
    <body onload="progress_anim1();">
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

            <h3>Smart Waste Management System: </h3>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno1}: {$pin1}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content1)?>%" id="d1"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time1}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno2}: {$pin2}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content2)?>%" id="d2"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time2}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno3}: {$pin3}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content3)?>%" id="d3"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time3}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno4}: {$pin4}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content4)?>%" id="d4"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time4}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno5}: {$pin5}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content5)?>%" id="d5"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time5}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno6}: {$pin6}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content6)?>%" id="d6"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time6}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno7}: {$pin7}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content7)?>%" id="d7"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time7}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno8}: {$pin8}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content8)?>%" id="d8"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time8}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno9}: {$pin9}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content9)?>%" id="d9"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time9}"); ?></h6>
            </div>

            <br><br>

            <div class="column large12 medium12 small12 center primary_white zi2">
                <p>Dustbin <?php echo("{$dno10}: {$pin10}");?></p>
                <div class="progress_container">
                    <div class="progress_bar" style="width: <?php echo($content10)?>%" id="d10"></div>
                </div>
                <h6>Last Updated: <?php echo("{$time10}"); ?></h6>
            </div>

            <br><br>

        </div>
    </body>
</html>