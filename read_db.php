<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
				color: #1f5380;
				font-family: monospace;
				font-size: 20px;
				text-align: left;
			} 
			th {
				background-color: #1f5380;
				color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head>
	<?php
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
	?>
	<body>
		<table>
			<tr>
				<th>Entry Number</th> 
				<th>Dustbin Number</th> 
				<th>Contents</th>
				<th>Location</th>
                <th>Pincode</th>
                <th>Time</th>
                <th>Date</th>
			</tr>	
			<?php
				$table = mysqli_query($conn, "SELECT * FROM hackfest where dustbin_no=1 order by t desc limit 1;"); //nodemcu_ldr_table = Youre_table_name
				while($row = mysqli_fetch_array($table))
				{
			?>
			<tr>
				<td><?php echo $row["dustbin_no"]; ?></td>
                <td><?php echo $row["contents"]; ?></td>
                <td><?php echo $row["location"]; ?></td>
                <td><?php echo $row["pincode"]; ?></td>
				<td><?php echo $row["time"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>