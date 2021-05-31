<?php
session_start();
?>
<html>
<head>
  <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style><!-- 
    <link rel="stylesheet" type="text/css" href="print.css" media="print"> -->
</head>
<body>
  <center>
          <h1>ROOM NO:- Co1</h1>

    <table>
      <tr>
      <?php
        $Room=$_POST['room_type'];
        // echo $Room;
        // echo $_SESSION['co1'];
        if ($Room=='co1') {
          // echo "************ Output for Room No- co1*****************";
          echo "<table><tr><td>ROW-I</td><td>ROW-II</td><td>ROW-III</td><td>ROW-IV</td><td>ROW-V</td><td>ROW-VI</td></tr>";
          $temp=$_SESSION['co1'];
          for ($i=$temp; $i <= $temp+1 ; $i++) { 
            echo "<tr><td>".$_SESSION['arr1'][$i+37]."</td><td>".$_SESSION['arr2'][$i+38]."</td><td>".$_SESSION['arr4'][$i-4]."</td><td>".$_SESSION['arr3'][$i-3]."</td><td>".$_SESSION['arr4'][$i+3]."</td><td>".$_SESSION['arr3'][$i+4]."</td></tr>";
            echo "<tr><td>".$_SESSION['arr2'][$i+35]."</td><td>".$_SESSION['arr4'][$i-7]."</td><td>".$_SESSION['arr3'][$i-6]."</td><td>".$_SESSION['arr4'][$i]."</td><td>".$_SESSION['arr3'][$i+1]."</td><td>".$_SESSION['arr4'][$i+7]."</td></tr>";
          }
        
          if ($i=$temp+2) {
            echo "<tr><td>".$_SESSION['arr1'][$i+37]."</td><td>".$_SESSION['arr3'][$i-10]."</td><td>".$_SESSION['arr4'][$i-4]."</td><td>".$_SESSION['arr3'][$i-3]."</td><td>".$_SESSION['arr4'][$i+3]."</td><td>".$_SESSION['arr3'][$i+4]."</td></tr>";
            echo "<tr><td>".$_SESSION['arr2'][$i+35]."</td><td>".$_SESSION['arr4'][$i-7]."</td><td>".$_SESSION['arr3'][$i-6]."</td><td>".$_SESSION['arr4'][$i]."</td><td>".$_SESSION['arr3'][$i+1]."</td><td>".$_SESSION['arr4'][$i+7]."</td></tr>";
          }
          if ($i=$temp+3) {
            echo "<tr><td>".$_SESSION['arr4'][$i-11]."</td><td>".$_SESSION['arr3'][$i-10]."</td><td>".$_SESSION['arr4'][$i-4]."</td><td>".$_SESSION['arr3'][$i-3]."</td><td>".$_SESSION['arr4'][$i+3]."</td><td>".$_SESSION['arr3'][$i+4]."</td></tr>"; 
            $_SESSION['co2']=$i+1;
          }  
        

        }
      ?>   
      </table>
      <form action="co2.php" method="Post">
        <label for="room_type">Room No.</label>
        <select name="room_type" id="cars" style="padding: 10px 16px; margin-left:30px">
          <option> ------Select Trade------</option>
          <option value="co1">co1</option>
          <option value="co2">co2</option>
          <option value="N/A">N/A</option>
        </select>
             
        <input type="submit" value="Next Room"> 
      <br><br>
      <div class="text-center">
          <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </form>
      
  </center>

  </body>
</html>
