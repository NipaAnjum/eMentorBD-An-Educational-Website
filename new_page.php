<?php  session_start(); ?>
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

$user = $_GET["email"];
     $pass = $_GET["psw"];
     $_SESSION["use"]=$user;
     $_SESSION["p"]=$pass;

$sql = "SELECT username,email,id,password FROM registration where email='$user' and password='$pass' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $pp=  $row["id"];
        $_SESSION["xname"]=$row["username"];

        $_SESSION["uid"]=$pp;
    }

    }

if (mysqli_num_rows($result) ==1) {

    
    if(!empty($_GET["remember"])) {
       
	setcookie ("x",$_GET["uname"],time()+60);
	setcookie ("y",$_GET["psw"],time()+60);
	echo "Cookies Set Successfuly";
	
} 
else {
	setcookie("uname","");
	setcookie("psw","");
	echo "Cookies Not Set";
}

echo "<script> window.location.assign('profile.php'); </script>";
    
    }
 else {
    echo "<script> window.location.assign('http://localhost/bitfest/action_page.php'); </script>";
}

mysqli_close($conn);



?>
