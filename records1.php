<?php
	  $servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "Patients";
	  
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	      die("Connection failed: " . mysqli_connect_error());
	  }
	$sql = "SELECT patientId, firstname, surname,NationalIDNo, TIMESTAMPDIFF(YEAR,DateOfBirth, CURDATE()), Gender, County FROM registration";
	$result1 = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql);
	$datarow ="";
	while ($row2 = mysqli_fetch_array($result2)) {
		$datarow = $datarow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td></tr>";
		
	}
	mysqli_close($conn);

	?>

		<div>
			<table width="600" border="1" cellpadding="1" cellspacing="1">
 		<tr>
 			<th>PatientID</th>
 			<th>Firstname</th>
 			<th>Surname</th>
 			<th>NationalIdNo</th>
 			<th>Age</th>
 			<th>Gender</th>
 			<th>County</th>
 		</tr>

 		<?php 
 		while ($row1 = mysqli_fetch_array($result1)):;?>
 		<tr>
 			<td><?php echo $row1[0] ;?></td>
 			<td><?php echo $row1[1] ;?></td>
 			<td><?php echo $row1[2] ;?></td>
 			<td><?php echo $row1[3] ;?></td>
 			<td><?php echo $row1[4] ;?></td>
 			<td><?php echo $row1[5] ;?></td>
 			<td><?php echo $row1[6] ;?></td>
 		</tr>
 			
 		 <?php endwhile;?>
 <html>
 <title>records</title>
<head>
<style>
tr:nth-child(even){background-color:yellow;
}
tr:nth-child(odd){background-color:grey;
}
</style>
<h1 style="color:red";>Patients Records</h1>
</head></html>