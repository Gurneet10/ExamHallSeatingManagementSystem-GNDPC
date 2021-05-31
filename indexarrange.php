<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/indexarrange.css">
</head>
<body>
<div id="top">
<br>
<h1>Select Exam Hall Seating Plan</h1>
</div>
<div id="inputContainer" >
  <center>


<form action="sittingarrange.php" method="POST">
 <!-- <label for="cars">Room No.</label>
  <select name="room_type" id="cars" style="padding: 10px 16px; margin-left:30px">
    <option> ------Select Trade------</option>
    <option value="M1">M1</option>
    <option value="M9">M9</option>
    <option value="co1">co1</option>
    <option value="N/A">N/A</option>
  </select>-->
  <!-- <input type="text" name="room_no" placeholder="Room No." style="padding: 10px 16px"> -->
  <br><br>
  <label  for="date">Enter Date</label>
        <input id="date" type="date" name="textDate">
  <br><br>
  
 <button class="button" type="submit" name="search" value="search seating arrangement">Submit</button>
</form>
</center>
</div>
</body>
</html>
