    
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <script>
    


function nextData() {
    var trade=document.getElementById('trade').value;
    var semester = document.getElementById('sem').value;
    $.ajax( {
        url: "helper.php",
        type: "GET",
        data: {sem : semester, trade : trade},
        success: function(data) {
            $('#poll').html(data);
        }
    });
}
function tradeFunc() {
        document.getElementById('sem').disabled=false;
    }

</script>
<!-- <script src='insert.js'></script> -->
<link rel="stylesheet" type="text/css" href="assets/css/sd.css">
</head>
    


<body>
    <div id="top">
        <br>
        <h1>DATESHEET</h1>
    </div>

<div id="inputContainer" >

    
    <form action="ds.php" method="POST">

    <label><b>Select Trade:</b></label><br>
    <select id="trade" name="trade" onchange="tradeFunc()" >
        <option>-------Trade-------</option>
        <option value="CSE">CSE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="MECHANICAL">MECHANICAL</option>
        <option value="ECE">ECE</option>
        <option value="AUTOMOBILE">AUTOMOBILE</option>
        <option value="ELECTRICAL">ELECTRICAL</option>
    </select><br><br>

    <label><b>Select Semester:</b></label><br>
    <select id="sem" name="semester" onchange="nextData()" disabled="">
        <option>----Semeser----</option>
        <option value ="1st">1st</option>
        <option value ="2nd">2nd</option>
        <option value ="3rd">3rd</option>
        <option value ="4th">4th</option>
        <option value ="5th">5th</option>
        <option value ="6th">6th</option>
    </select>
    

    <br><br>

    <label><b>Select subject:</b></label><br>
    <select id="poll" name="subject">
        <option>Subjects</option>
    </select>
    <br><br>

    <label><b>Date :</b></label><br>
        <input id="datepicker" type="date" name="datepicker">
        <br><br>
    <label class="container" for="morning">Morning
        <input type="radio" checked="checked" id="morning" name="timings" value="Morning">
        <span class="checkmark"></span>
    </label>
    <label class="container" for="evening">Evening
        <input type="radio" id="evening" name="timings" value="Evening">
        <span class="checkmark"></span>
    </label>
    <button class="button" type="submit" name="search" value="search exam">Submit</button>





 
    </form>
</div>
</body>
</html>


<!-- <?php 
// $connection = mysqli_connect("localhost","root","");
// $db = mysqli_select_db($connection,'ehms');

// if(isset($_POST['submit'])) {
    // $Trade = $_POST['Trade'];
    // $Semester = $_POST['Semester'];
    // $Subject = $_POST['Subject'];
    // $Date = $_POST['Date'];
    // $Timings = $_POST['Timings'];

    // $query = "INSERT INTO 'datesheet' ('Trade', 'Semester', 'Subject', 'Date', 'Timings') values ('$Trade','$Semester','$Subject','$Date','$Timings')";
    // $query_run= mysqli_query($connection,$query);
    // if ($query_run) {
        // echo $query;
        // echo '<script type="text/javascript"> alert("Data Inserted") </script>';
    // }
    // else{
        // echo '<script type="text/javascript"> alert("Data not Inserted") </script>';
    // }
// }