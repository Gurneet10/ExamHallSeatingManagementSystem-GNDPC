<?php
$servername="localhost";
$username="root";
$password="";
$db="ehms"; 

$con = mysqli_connect($servername,$username,$password,$db);
if (!$con) {
	die("Connection Failed".mysqli_connect_error());
}
else{
	$Sub=$_POST['subject'];
	$Semester=$_POST['semester'];
	$Trade=$_POST['trade'];
	$Date=$_POST['datepicker'];
	$Timings=$_POST['timings'];

	$sql= " INSERT INTO datesheet(Subject, Semester, Trade, Date, Timings) VALUES ('$Sub', '$Semester', '$Trade', '$Date', '$Timings')";
	if (mysqli_query($con,$sql)) {
		echo " One Record inserted!!";
	}
	else{
		echo "Failed to insert";
	}
}

?>