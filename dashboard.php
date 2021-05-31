<?php
require('assets/includes/db.php');
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:indexx.php');
	die();
}
?>
<a href="logout.php">Logout</a>&nbsp;&nbsp;

<a href="change_password.php">Change Password</a>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/custom.js"></script>
