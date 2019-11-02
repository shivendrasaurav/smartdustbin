<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";		//example = localhost or 192.168.0.0
    $username = "santoshdkolur";		//example = root
    $password = "santoshdkolur";	
    $dbname = "hack";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $d = date("Y-m-d");
    $t = date("H:i:s");

    //if(!empty($_POST['contents']))
    //{
        //$entry_no=1;
		$dustbin_no = 2;
        $contents = $_POST['content'];
        $location = 'Hennur';
        $pincode = 560077;
	    $sql = "INSERT INTO hackfest (dustbin_no,contents,loc,pincode,d) VALUES ('.$dustbin_no.','.$contents.', '.$location.', '.$pincode.', '.$d.');"; //nodemcu_ldr_table = Youre_table_name

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	//}


	$conn->close();
?>