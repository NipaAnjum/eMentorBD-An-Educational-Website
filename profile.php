<?php
session_start();
?>
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
  <style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color: white;
}

p.trast_and_safty_para{
  max-width: 66%;
  max-height: 300px;
  border: 2px solid  white;
  padding: 10px;
  margin: 2px; 
  overflow:auto;
  text-overflow: ellipsis; 
}

</style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php" style="color: #333">eMentorBD</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php#home-section" class="nav-link" style="color: #333">Home</a></li>
                <li><a href="index.php#courses-section" class="nav-link" style="color: #333">Courses</a></li>
                <li><a href="index.php#programs-section" class="nav-link" style="color: #333">Programs</a></li>
                <li><a href="makeMoney.php" class="nav-link" style="color: #333">Make Money</a></li>
              </ul>
            </nav>
          </div>
<?php
$username = "";
if(isset($_SESSION['xname']))
$username = $_SESSION['xname'];
?>
          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="profile.php" class="nav-link"><span>user</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
    </header>

    <div class="site-section bg-light" id="contact-section">
      <div class="slide-1" style="color:#333;" data-stellar-background-ratio="0.5">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4"> 
                </div>    
    </div>
  <div style="padding:10px">
     <div style="max-width: 100%;">
         <div style="float: left; width: 50%;">  
         <h4 style="color:white;">Courses</h4>      
         <table style="color: white;">
                    <tr>
                        <td> Study Law of Physics </td>
                    </tr>
                    <tr>
                        <td> Logo Design Course </td>
                    </tr>                    
                    <tr>
                        <td> JS Programming Language </td>
                    </tr>
        </table>  
         </div>
         <div style="float: left; width: 50%;">  
         <h4 style="color:white;">Upload</h4>
         <table style="color: white;">
                    <tr>
                        <td> Study Law of Physics </td>
                    </tr>
                    <tr>
                        <td> Logo Design Course </td>
                    </tr>                    
                    <tr>
                        <td> JS Programming Language </td>
                    </tr>
        </table> 
  </div>
<div style="width:100%;"> 
<h4 style="color:white;padding-top:150px;">Photos</h4>       
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="images/t1.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="images/t2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="images/t3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="images/t4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="images/t3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


<div style="padding-top:250px">
<h4 style="color:white;">Videos</h4> 
<video width="320" height="240" controls>
  <source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
  <source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<video width="320" height="240" controls>
  <source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
  <source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
<video width="320" height="240" controls>
  <source src="SampleVideo_1280x720_1mb.mp4" type="video/mp4">
  <source src="SampleVideo_1280x720_1mb.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
</div>
     <div style="padding-top:50px">
     <h4 style="color:white;">Writings</h4> 
        <div style="max-width: 100%;">
            <div style="float: left; width: 33%;">  
               
                <p class="trast_and_safty_para" style="color: white">
             cation and book knowledge remain imperfect without travelling.
               </p>
            </div>
            <div style="float: left; width: 33%;">  
               
               <p class="trast_and_safty_para" style="color: white">
            cation and book knowledge remain imperfect without travelling.
              </p>
           </div>
           <div style="float: left; width: 33%;">  
               <p class="trast_and_safty_para" style="color: white">
            cation and book knowledge remain imperfect without travelling.
              </p>
           </div>
     </div>
       
 <!-- .site-wrap -->

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