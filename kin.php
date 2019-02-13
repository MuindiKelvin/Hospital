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
$patientId=trim($_POST['patientId']);
$firstname=trim($_POST['firstname']);
$surname=trim($_POST['surname']);
$relationship=trim($_POST['relationship']);


//now insert the received values into database using defined variables
$sqli ="INSERT INTO kin(patientId,firstname,surname,relationship) VALUES ('$patientId','$firstname','$surname','$relationship')";
if ($con->query($sqli) === TRUE) {
    echo "New patients record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); //close the connection for security reason
}
?>