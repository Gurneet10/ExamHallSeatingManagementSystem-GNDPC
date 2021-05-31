<!DOCTYPE html>
<html>
<head>
  <title>searching data</title>

<!--   <style>
    body{
      background-color: lightgreen;
    }
    table,td{
/*      border:1px solid black;*/
      width: 1100px;
      background-color: lightblue;
      text-align: center;
    }
    th {
      width: 1100px;
      background-color: lightblue;
      text-align: center;
      font-size: 25px;
    }
    /*.btn{
      width: 20%;
      height: 5%;
      font-weight: bold;
    }*/
  </style> -->
  <link rel="stylesheet" type="text/css" href="assets/css/datesheet.css">
</head>
<center>
<body>
  <h1>DATESHEET</h1>
  <div class="container" >
    <form action=""method="POST">
      <label  for="date">Enter Date</label>
        <input id="date" type="date" name="textDate">
        <p>
            <!-- <input id="bttn" type="submit" name="search" value="search exam"> -->
            <button class="button" type="submit" name="search" value="search exam">Search Exam</button>

        </p>

      <table>
        <tr>
<!--           <th> id </th> -->
          <th>Subject</th>
          <th>Semester</th>
          <th>Trade</th>
          <th>Date</th>
          <th>Timings</th>
          
        </tr>
      
      
    </form>
    <?php
        if(isset($_POST['search']))
            {
        $conn=mysqli_connect("localhost","root","","ehms");
        if(!$conn)
        {
            die("connection Failed=" .mysqli_connect_error());

        }
            $textDate=$_POST['textDate'];
        $qry="Select * from datesheet where Date = '$textDate' order by Date";
            $query=mysqli_query($conn,$qry);
            $count1=mysqli_num_rows($query);

            
            if($count1 == "0")
            {
                echo "no datesheet is found";

            }
            else
            {
                echo "<table border=1> ";
                
                while($row = mysqli_fetch_array($query)){
                    echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";
                }
                echo "</table>";
            }
        }
            ?>
  </div>
</center>
</body>
</html>