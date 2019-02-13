<?php
//create server and database connection constants
$host = "localhost";
$user = "root";
$pwd = "";
$db = "patients";

$con= new mysqli ($host, $user, $pwd, $db);

//Check server connection
if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
		//receive  values from user form and trim white spaces
$patientId=trim($_POST["patientId"]);
$firstname=trim($_POST['firstname']);
$surname=trim($_POST['surname']);
$NationalIDNO=trim($_POST['nationalIdno']);
$DateOfBirth=trim($_POST['DateOfBirth']);
$gender=trim($_POST['gender']);
$county=trim($_POST['county']);



//now insert the received values into database using defined variables
$sqli ="INSERT INTO registration(patientId,firstname,surname,NationalIDNO,DateOfBirth,Gender,County) VALUES ('$patientId','$firstname','$surname','$NationalIDNO','$DateOfBirth','$gender','$county')";
if ($con->query($sqli) === TRUE) {
    echo "New patients record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reason
}
?>