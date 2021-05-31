<?php
	include('assets/includes/connection.php');
// $conn= mysqli_connect("localhost", "root", "","ehms");
// if (!$conn) {
// 	exit("Sorry, Connection error..");
// }

$val= $_GET["sem"];

$val_M = mysqli_real_escape_string($con, $val);

$val1= $_GET["trade"];

$val_N= mysqli_real_escape_string($con, $val1);

$sql="SELECT Trade, Semester, Subject FROM subjects WHERE Semester='$val_M' AND Trade='$val_N'";
// echo $sql;
$result= mysqli_query($con, $sql);

if (mysqli_num_rows($result)>0) {

	echo "<select>";

	while ($rows= mysqli_fetch_assoc($result)) {
		echo "<option>".$rows["Subject"]."</option>";
	}

	echo "</select>";
	
} else {
	echo "<select>
			<option>Select Subject</option>
		</select>";
}


?>
