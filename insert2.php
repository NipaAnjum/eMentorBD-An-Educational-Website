
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

$a=$_GET["pst1"];

$sql = "INSERT INTO wri (c1_id, c1_name , past1  ) VALUES ('1', 'study Law of Physics ', '$a')";

if (mysqli_query($conn, $sql)) {
    echo "<script> window.location.assign('live.php'); </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

