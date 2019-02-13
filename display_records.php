<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="hospital.css">
	<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="validation.css">
    <style >
 		table,th,tr,td
		{
 			border: 2px solid black;
 		}
 		tbody tr:nth-child(odd) 
		 {
        background: #03A9F4;
         }
 	</style>
</head>
<body>
		<div class="container">
		<div id="header">
			<div id="image"><img src="My Post.jpg" width="200" height="100"></div>
			<div id="head">
				<h1>The Sala Hospital</h1>
			    <h2>"Every Life Deserves World Class Care" ~ Man Sala</h2>
			</div>
		</div>
		<div>
				<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#"class="navbar-brand">Sala Hospital  <i class="far fa-hospital"></i></a>
				</div>
				<div class="collapse navbar-collapse"id="bs-nav-demo">
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://localhost/hospital.html">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="http://localhost/display_records.php">Records</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://localhost/registration.php">Registration <i class="fa fa-user-plus" aria-hidden="true"></i> </a></li>
						<li><a href="#">Contacts <i class="far fa-address-book"></i></a></li>
					</ul>
				</div>
			</nav>
		</div>
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
	$sql = "SELECT PatientID, Firstname, Middlename, Surname, TIMESTAMPDIFF(YEAR, dob, CURDATE()), Gender, County FROM registration";
	$result1 = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql);
	$datarow ="";
	while ($row2 = mysqli_fetch_array($result2)) {
		$datarow = $datarow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td></tr>";
		
	}
	mysqli_close($conn);

	?>

		<div>
			<h1>Patients Records</h1>
			<table width="600" border="1" cellpadding="1" cellspacing="1">
 		<tr>
 			<th>PatientID</th>
 			<th>Firstname</th>
 			<th>Middlename</th>
 			<th>Surname</th>
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
 		
 	</table>	
		</div>

		
			<?php
			  $servername = "localhost";
			  $username = "root";
			  $password = "";
			  $dbname = "";
			  
			  // Create connection
			  $conn = mysqli_connect($servername, $username, $password, $dbname);
			  // Check connection
			  if (!$conn) {
			      die("Connection failed: " . mysqli_connect_error());
			  }
				$sql = "select `Hospital`.`Patient`.`PatientID` AS `PatientID`,`Hospital`.`Patient`.`Firstname` AS `Patient.Firstname`,`Hospital`.`Patient`.`Surname` AS `Patient.Surname`,`Hospital`.`Nextkin`.`Firstname` AS `Nextkin.Firstname`,`Hospital`.`Nextkin`.`Surname` AS `Surname`,`Hospital`.`Nextkin`.`relationship` AS `relationship` from (`Hospital`.`Patient` join `Hospital`.`Nextkin` on((`Hospital`.`Patient`.`PatientID` = `Hospital`.`Nextkin`.`PatientID`)))";
				$result1 = mysqli_query($conn,$sql);
				$result2 = mysqli_query($conn,$sql);
				$datarow ="";
				while ($row2 = mysqli_fetch_array($result2)) {
				$datarow = $datarow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td></tr>";
				
			}
			mysqli_close($conn);

			?>
		<div>
			<div>
			<h1>Next Kin Records</h1>
			<table width="600" border="1" cellpadding="1" cellspacing="1">
 		<tr>
 			<th>PatientID</th>
 			<th>Patient.Firstname</th>
 			<th>Patient.Lastname</th>
 			<th>Nextkin.Firstname</th>
 			<th>Nextkin.surname</th>
 			<th>Relationship</th>
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
 		</tr>
 			
 		 <?php endwhile;?>
 		
 	</table>	
		</div>


		</div>
		

</body>
</html>


  