<?php include('assets/includes/connection.php');
session_start();
$message = $link = '';
if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$query = "SELECT * FROM admin WHERE email = '".$email."'";
	$result = $con->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$id = $row['id'];
		$id_encode = base64_encode($id);
		$link = "<a href='Reset_pass.php?MnoQtyPXZORTE=$id_encode' class='btn btn-info btn-sm'>Click Here</a>";
	}
	}else{
		$message = "<div class='alert alert-danger'>Invalid Email..!!</div>";
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
<link rel="stylesheet" type="text/css" href="assets/css/forget_pass.css">
</head>
<body  class="bg-secondary">
		<div class="container ">
			<form  method="post">
				<?php echo $message; ?>
				<h1 class="text-success">Forget Password</h1>
				<label for="Email">Email:</label><br>
				<p>
				<input type="email" name="email" placeholder="Email Address" class="loginEmail" required><br>
			</p>
				<button type="submit" name="submit" class="button">Reset Password</button>
				<?php echo $link; ?>
			</form>
		</div>
</body>
</html>