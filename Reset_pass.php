<?php include('assets/includes/connection.php');
session_start();
$id = $_GET['MnoQtyPXZORTE'];
$message = $Home = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forget_pass.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['password'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Password Not Match..!!</div>";
	}
	else{
	$id_decode = base64_decode($id);
	$query = "UPDATE admin SET password = '$password' WHERE id = '$id_decode' ";
	$result = $con->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Reset Your Password Successfully..</div>";
			$Home = "<a href='admin.php' class='btn btn-success btn-sm'>Login</a>";
	}else{
		$message = "<div class='alert alert-danger'>Failed to Reset Password..!!</div>";
	}
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>forget Password</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/Reset_pass.css">
</head>
<body>
		<div class="container">
			<form method="post">
				<?php echo $message; ?>
				<h1>Forget Password</h1>
				<p>
					<label for="password">Password: </label><br>
					<input type="text" name="password" placeholder="Password" class="pwd" required><br>
				</p>
				<p>
					<label for="password">Confirm Password:
					</label><br>
					<input type="text" name="Repassword" placeholder="Confirm Password" class="cpwd" required><br>
				</p>
				<button type="submit" name="submit" class="button">Reset Password</button> <?php echo $Home; ?>
			</form>
		</div>
</body>
</html>