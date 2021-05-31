<?php
require('assets/includes/db.php');
$msg='';
if(isset($_POST['submit'])){
   $password=mysqli_real_escape_string($con,$_POST['password']);
   $update_sql='';
   if(isset($_POST['logout'])){
      mysqli_query($con,"delete from users_login where user_id='".$_SESSION['UID']."' and rand_no!='".$_SESSION['UID_RAND']."'");
   }
   mysqli_query($con,"update admin set password='$password' $update_sql where id='".$_SESSION['IS_LOGIN']."'");
   $msg="Password updated";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Change Password</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/css/change_password.css">
   </head>
   <body>
      <body>
         
            <div class="container">
               
               <form id="login-form" class="form" method="post">
                  <h3 class="text-center text-info">Change Password</h3>
                              
                              
                  <p>
                     <label for="password" class="text-info">New Password:</label>
                     <input type="text" name="password" id="password">
                  </p>
                              
                  <p>
                     <label for="logout" class="text-info">Logout from all:</label>
                     <input type="checkbox" name="logout">
                  </p>
                          
                  <input type="submit" name="submit" class="button" value="submit">
                             
                  <span class="error"><?php echo $msg?></span>
               </form>
            </div>
   
   </body>
   
   <script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/custom.js"></script>
   </body>
</html>