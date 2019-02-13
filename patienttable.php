<?php
//make connection
mysql_connect('localhost','root','');

//select db
mysql_select_db('patients') or die("unable to select database"); 
$sql="SELECT * FROM kin";
$records=mysql_query($sql);
echo "<table>";
?>
<html>
<title>records</title>
<head>
<style>
tr:nth-child(even){background-color:yellow;
}
tr:nth-child(odd){background-color:grey;
}
</style>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>PatientID</th>
<th>FirstName</th>
<th>SurName</th>
<th>Relationship</th>
<tr>
<?php

While($patient=mysql_fetch_assoc($records)){

    echo "<tr>";
	echo "<td>$patient[patientId]</td>";
	echo "<td>$patient[firstname]</td>";
	echo "<td>$patient[surname]</td>";
	echo "<td>$patient[relationship]</td>";
	echo "</tr>";
}
?>

</table>
</body>
</html>