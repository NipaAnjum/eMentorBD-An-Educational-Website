<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
  </head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bitfest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
  <script>
function validateForm() {
  var x = document.forms["uform"]["wrt"].value;
  if (x == "") {
    alert("Writing Type must be filled out");
    return false;
  }
}
</script>

<div class="row">
  <div class="column" style="background-color:#aaa;">
  <span style="align:left">
<form action="insert2.php" name="uform"  method="get" name="myForm" onsubmit="return validateForm()">
<label for="pst1"><b><h2>ASK and DISCUSS</h2></b></label>

<textarea  name = "pst1"
                  rows = "3"
                  cols = "100"
                  placeholder="Write Here">

</textarea>
<br>
<br>
<button type="submit" name="submit">Submit</button>
</form>
</span>
</div>
  <div class="column" style="background-color:#bbb;">
  <span style="align:right" class="booth">
     <video id="video" width="400" height="300" autoplay></video>
       <canvas id="canvas" width="400" height="300"></canvas>
</span>
    <script src="video.js"></script>

</div>
</div>   
<?php

$pq = "SELECT past1 FROM wri ";
$r = mysqli_query($conn, $pq);
if (mysqli_num_rows($r) > 0) {
    // output data of each row
    if($pq==true)
    {
    while($row = mysqli_fetch_assoc($r)) {
      //$str=$row["golpo"] ;
   echo "<h2 style= 'color: black'> ^.^  : ". $row["past1"]."<br><br><br></h2>" ;
      
}
}
}



mysqli_close($conn);
?>
                  </p>
                  <br>
                  

                </div>

                <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--video upload-->
    



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
  

  




<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>test</title>
        <link rel="stylesheet" href="main.css">
    </head>

<body>
    <div class="booth">
     <video id="video" width="400" height="300" autoplay></video>
       <canvas id="canvas" width="400" height="300"></canvas>
    </div>
    <script src="video.js"></script>
</body>
</html>
-->