

<!--  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">We give you an opportuinity to earn money. Upload video on educational topics. We will add your video to our courses.</p>
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>eMentorBD &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">eMentorBD</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Courses</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="makeMoney.php" class="nav-link">Make Money</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">

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

<center>
  <script>
function validateForm() {
  var x = document.forms["uform"]["wrt"].value;
  if (x == "") {
    alert("Writing Type must be filled out");
    return false;
  }
}
</script>

<div>
<p data-aos="fade-up" data-aos-delay="300"><a href="live.php" class="btn btn-primary py-3 px-5 btn-pill">Quick Response </a></p>
</div>

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
<br> 


    
<?php

$pql = "SELECT past1 FROM wri ";
$res = mysqli_query($conn, $pql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    if($pql==true)
    {
    while($row = mysqli_fetch_assoc($res)) {
      //$str=$row["golpo"] ;
   echo "<h2 style= 'color: white'> ^.^  : ". $row["past1"]."<br><br><br></h2>" ;
      
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
  

  


