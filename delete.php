<?php

include 'assets/includes/connection.php';

$Roll_No = $_GET['Roll_No'];

$q = " DELETE FROM `student` WHERE Roll_No = $Roll_No ";

mysqli_query($con, $q);

header('location:display.php');

?>