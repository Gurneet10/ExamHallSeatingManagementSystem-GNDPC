<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ehms";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="assets/css/sittingarrange.css">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
  </head>
  <body>
<div id="top">

<h1>ROOM NO:-M1</h1>
</div>
    
    <center>
    <table>
      <tr>
    <?php 
      if (isset($_POST["textDate"])) {
        //$Room_No=$_POST["room_type"];
        $Date=$_POST["textDate"];
        // $Trade1=$_POST["Trade1"];
        // $Trade2=$_POST["Trade2"];
        // $sem1=$_POST["sem1"];
        // $sem2=$_POST["sem2"];
       
        // echo  "<p style= 'font-size: 30px ; font-weight: bolder'>ROOM NO:".$Room_No."  <br>  TRADE:".$Trade1.",".$Trade2." </p>";

      
        // $sql = "SELECT * FROM datesheet INNER JOIN student ON datesheet.Semester, datesheet.Date = student.Roll_No ";
        $sql = "SELECT * FROM datesheet where Date='".$Date."'";
        // echo $sql;
        $result = $conn->query($sql);
       // $_SESSION['trade']=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //array_push($_SESSION['trade'],$row['Trade']."-".$row['semester']);    
              // $trade[]=array('Trade'=>$row['Trade']);
              // var_dump($trade);
              // $sem[]=array('Sem'=>$row['Semester']);
              // var_dump($sem); 
              // foreach ($trade as $value) {
              //   echo $value;
              // } 
              // foreach ($sem as $value) {
              //   echo $value;
              // }
            
              $trade=$row['Trade'];
              // echo $trade;
              $sem=$row['Semester'];
// echo $sem;
            if ($trade='CSE' and $sem='5') {
              $sql1 = "SELECT * FROM student WHERE `Trade`='$trade' AND `Semester`='$sem' ORDER BY Roll_No ASC";
              // echo "<br>".$sql1;
              $result = $conn->query($sql1);
              $_SESSION['arr1']=array();
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      array_push($_SESSION['arr1'],$row['Trade']."-".$row['Roll_No']);
                  }
              } else {
                  echo "0 results";
                }
            }
            if ($trade='ME' and $sem='5') {
               $sql1 = "SELECT * FROM student WHERE `Trade`='$trade' AND `Semester`='$sem' ORDER BY Roll_No ASC";
        // echo "<br>".$sql1;
        $result = $conn->query($sql1);
        $_SESSION['arr2']=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($_SESSION['arr2'],$row['Trade']."-".$row['Roll_No']);
// echo $row['Trade']."-----".$row['Roll_No']."<br>";
            }
        } else {
            echo "0 results";
        }
             }
             if ($trade='ECE' and $sem='5') {
              $sql1 = "SELECT * FROM student WHERE `Trade`='$trade' AND `Semester`='$sem' ORDER BY Roll_No ASC";
              // echo "<br>".$sql1;
              $result = $conn->query($sql1);
              $_SESSION['arr3']=array();
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      array_push($_SESSION['arr3'],$row['Trade']."-".$row['Roll_No']);
                  }
              } else {
                  echo "0 results";
                }
            } 
            if ($trade='Civil' and $sem='5') {
              $sql1 = "SELECT * FROM student WHERE `Trade`='$trade' AND `Semester`='$sem' ORDER BY Roll_No ASC";
              // echo "<br>".$sql1;
              $result = $conn->query($sql1);
              $_SESSION['arr4']=array();
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      array_push($_SESSION['arr4'],$row['Trade']."-".$row['Roll_No']);
                  }
              } else {
                  echo "0 results";
                }
            } 
        //   echo $trade[0];
        // $sql1 = "SELECT * FROM student WHERE `Trade`= '$trade[0]' AND `Semester`='$sem[0]' ORDER BY Roll_No ASC";
//           $sql1 = "SELECT * FROM student WHERE `Trade`='$trade' AND `Semester`='$sem' ORDER BY Roll_No ASC";
//         echo "<br>".$sql1;
//         $result = $conn->query($sql1);
//         $_SESSION['arr2']=array();
//         if ($result->num_rows > 0) {
//             while($row = $result->fetch_assoc()) {
//                 array_push($_SESSION['arr2'],$row['Trade']."-".$row['Roll_No']);
// // echo $row['Trade']."-----".$row['Roll_No']."<br>";
//             }
//         } else {
//             echo "0 results";
        }
        $i = 0; 

        // $Room=$_POST['room_type'];
        
echo "<table><tr><td>ROW-I</td><td>ROW-II</td><td>ROW-III</td><td>ROW-IV</td><td>ROW-V</td><td>ROW-VI</td></tr>";
        // if ($Room =='M1') {
          for ($i=0; $i<=2; $i++) { 
            
          echo "<tr><td>".$_SESSION['arr1'][$i]."</td><td>".$_SESSION['arr2'][$i+3]."</td><td>".$_SESSION['arr1'][$i+7]."</td><td>".$_SESSION['arr2'][$i+10]."</td><td>".$_SESSION['arr1'][$i+14]."</td><td>".$_SESSION['arr2'][$i+17]."</td></tr>";
          echo "<tr><td>".$_SESSION['arr2'][$i]."</td><td>".$_SESSION['arr1'][$i+4]."</td><td>".$_SESSION['arr2'][$i+7]."</td><td>".$_SESSION['arr1'][$i+11]."</td><td>".$_SESSION['arr2'][$i+14]."</td><td>".$_SESSION['arr1'][$i+18]."</td></tr>";

          }

          if ($i=3) {
            echo "<tr><td>".$_SESSION['arr1'][$i]."</td><td>".$_SESSION['arr2'][$i+3]."</td><td>".$_SESSION['arr1'][$i+7]."</td><td>".$_SESSION['arr2'][$i+10]."</td><td>".$_SESSION['arr1'][$i+14]."</td><td>".$_SESSION['arr2'][$i+17]."</td></tr></table>";
          
            $_SESSION['in']=$i+1;
          }
          ?>
          <form action="M9.php" method="Post">
   <label for="room_type">Room No.</label>
  <select name="room_type" id="cars" style="padding: 10px 16px; margin-left:30px">
    <option> ------Select Trade------</option>
    <option value="M9">M9</option>
    <option value="CO1">co1</option>
    <option value="N/A">N/A</option>
  </select>
       
   <input type="submit" value="Next Room">
     <?php   
      }
      }
    // }
    ?>
    </table>
    <br><br>
    <div class="text-center">
        <button onclick="window.print();" class="button" id="print-btn">Print</button>
      </div>
    </center>

  </body>
</html>