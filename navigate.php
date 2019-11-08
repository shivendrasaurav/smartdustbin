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
    

    if ($content1 >= 60){
        $cl1 = "activated";
    }
    else{
        $cl1 = "deactivated";
    }
    if ($content2 >= 60){
        $cl2 = "activated";
    }
    else{
        $cl2 = "deactivated";
    }
    if ($content3 >= 60){
        $cl3 = "activated";
    }
    else{
        $cl3 = "deactivated";
    }
    if ($content4 >= 60){
        $cl4 = "activated";
    }
    else{
        $cl4 = "deactivated";
    }
    if ($content5 >= 60){
        $cl5 = "activated";
    }
    else{
        $cl5 = "deactivated";
    }
    if ($content6 >= 60){
        $cl6 = "activated";
    }
    else{
        $cl6 = "deactivated";
    }
    if ($content7 >= 60){
        $cl7 = "activated";
    }
    else{
        $cl7 = "deactivated";
    }
    if ($content8 >= 60){
        $cl8 = "activated";
    }
    else{
        $cl8 = "deactivated";
    }
    if ($content9 >= 60){
        $cl9 = "activated";
    }
    else{
        $cl9 = "deactivated";
    }
    if ($content10 >= 60){
        $cl10 = "activated";
    }
    else{
        $cl10 = "deactivated";
    }

    /*------------------------------------Line Classes From Here-------------------------------------- */


/*
$cl = array("$cl0", "$cl1", "$cl2", "$cl3", "$cl4", "$cl5", "$cl6", "$cl7", "$cl8", "$cl9", "$cl10", );
$cls = "cls";
$c = 1;
$d = 2;
$sc = (string)$c;
$sd = (string)$d;

if($cl[$c] == $cl[$d] and ($cl[$c] == 'activated' or $cl[$d] == 'activated')){
    echo("$cls$sc$sd");
}
else{
    $cls12 = 'deactivated';			
}
*/

$cls12 = "activated";
$cls23 = "activated";
$cls14 = "activated";
$cls35 = "activated";
$cls46 = "activated";
$cls510 = "activated";

$cls45 = "deactivated";
$cls67 = "deactivated";
$cls78 = "deactivated";
$cls89 = "deactivated";
$cls810 = "deactivated";

echo("
        <html>

        <head>
            <title>Navigate</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://fluentdesignforweb.github.io/normalize.css' rel='stylesheet' type='text/css'>
            <link href='https://fluentdesignforweb.github.io/fluent.css'  rel='stylesheet' type='text/css'>
            <link href='https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css'  rel='stylesheet' type='text/css'>
            <script src='https://fluentdesignforweb.github.io/fluent.js'></script>
            <link href='customstyles.css'  rel='stylesheet' type='text/css'>
            <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
        </head>
        <body>
        <body onload='progress_anim1();'>
            <div class='sidepanel_container' id='side1'>
                <div class='sidepanel_content zi3'>
                    <button class='primary_red left ta_center mod_close_btn' onclick='closeside1();'>X</button>
                    <br><br><br><br>
                    <div class='page_container'>
                        <a href='dashboard.php'><div class='panel_item ta_right'>Dashboard</div></a><br>
                        <a href='predict.php'><div class='panel_item ta_right'>Predict</div></a><br>
                        <a href='navigate.php'><div class='panel_item ta_right'>Navigate</div></a><br>
                    </div>
                </div>
            </div>

            <!-- End Of Side Panel -->

            <div class='column large8 medium8 small12 center' id='body'> 


                <div class='pivot_container column large12 small12 medium12 center primary_green zi2' style='padding: 20px;'>
                    <a class='pivot_button' onclick='openside1();'><i class='ms-Icon ms-Icon--GlobalNavButton'></i></a>
                </div>

                <br><br>

                <h3>Navigate: </h3>

                <br><br>

                <svg class='primary_white zi2'>

                    <g id='a' class='{$cl1}'>
                        <circle cx='50' cy='50' r='20' stroke='black' stroke-width='3' />
                        <text fill='white' x='45' y='55'>1</text>
                    </g>
                    <g id='b' class='{$cl2}'>
                        <circle cx='250' cy='50' r='20' stroke='black' stroke-width='3'  />                
                        <text fill='white' x='245' y='55'>2</text>
                    </g>
                    <g id='c' class='{$cl4}'>
                        <circle cx='140' cy='125' r='20' stroke='black' stroke-width='3'  />
                        <text fill='white' x='135' y='130'>4</text>
                    </g>
                    <g id='d' class='{$cl6}'>
                        <circle cx='70' cy='220' r='20' stroke='black' stroke-width='3'  />                
                        <text fill='white' x='65' y='225'>6</text>
                    </g>
                    <g id='e' class='{$cl7}'>
                        <circle cx='200' cy='250' r='20' stroke='black' stroke-width='3'  />
                        <text fill='white' x='195' y='255'>7</text>
                    </g>
                    <g id='f' class='{$cl8}'>
                        <circle cx='350' cy='200' r='20' stroke='black' stroke-width='3'  />                
                        <text fill='white' x='345' y='205'>8</text>
                    </g>
                    <g id='g' class='{$cl9}'>
                        <circle cx='350' cy='340' r='20' stroke='black' stroke-width='3'  />
                        <text fill='white' x='345' y='345'>9</text>
                    </g>
                    <g id='h' class='{$cl5}'>
                        <circle cx='360' cy='120' r='20' stroke='black' stroke-width='3'  />                
                        <text fill='white' x='355' y='125'>5</text>
                    </g>
                    <g id='i' class='{$cl3}'>
                        <circle cx='500' cy='80' r='20' stroke='black' stroke-width='3'  />
                        <text fill='white' x='500' y='85'>3</text>
                    </g>
                    <g id='j' class='{$cl10}'>
                        <circle cx='520' cy='300' r='20' stroke='black' stroke-width='3'  />
                        <text fill='white' x='520' y='305'>10</text>
                    </g>
                    <line x1='70' y1='50' x2='230' y2='50' id='ab' class='{$cls12}'/>
                    <line x1='70' y1='50' x2='120' y2='120' id='ac' class='{$cls14}'/>
                    <!--<line x1='160' y1='120' x2='230' y2='50' id='bc'/>-->
                    <line x1='270' y1='50' x2='480' y2='80' id='bi' class='{$cls23}'/>
                    <line x1='160' y1='120' x2='340' y2='120' id='ch' class='{$cls45}'/>
                    <line x1='380' y1='120' x2='480' y2='80' id='hi' class='{$cls35}'/>
                    <line x1='145' y1='145' x2='90' y2='215' id='cd' class='{$cls46}'/>
                    <line x1='90' y1='215' x2='180' y2='250' id='de' class='{$cls45}'/>
                    <line x1='220' y1='250' x2='330' y2='200' id='ef' class='{$cls78}'/>
                    <line x1='350' y1='320' x2='350' y2='220' id='fg' class='{$cls67}'/>
                    <line x1='370' y1='200' x2='500' y2='300' id='fj' class='{$cls810}'/>
                    <line x1='380' y1='120' x2='500' y2='300' id='hj' class='{$cls510}'/>

                </svg>

            </div>
        </body>

    </html>
    ");

?>
