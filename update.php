<?php

 include 'assets/includes/connection.php';

 if(isset($_POST['done'])){


	$Roll_No = $_POST['Roll_No'];
	$Student_name = $_POST['Student_name'];
	$Semester = $_POST['Semester'];
	$Trade = $_POST['Trade'];
	$section= $_POST['section'];
	$q = " update  student set Roll_No='$Roll_No', Student_name='$Student_name', Semester='$Semester',Trade='$Trade',section='$section' where Roll_No=$Roll_No ";

	$query = mysqli_query($con,$q);

header('location:display.php');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update A Record </h1>
 </div><br>

 

<label> Roll_No: </label>
<input type="text" name="Roll_No" class="form-control"> <br>

<label> Student_name: </label>
<input type="text" name="Student_name" class="form-control"> <br>

<label> Semester: </label>
<input type="text" name="Semester" class="form-control"> <br>

<label> Trade: </label>
<input type="text" name="Trade" class="form-control"> <br>

<label> section: </label>
<input type="text" name="section" class="form-control"> <br>


<button class="btn btn-success" type="submit" name="done"> Submit </button><br>

</div>
</form>
</div>
</body>
</html>