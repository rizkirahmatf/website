<?php
//    $serv = "192.168.1.13";
  //  $uname = "adjiejr1";
    //$pass = "Adjiejr12";
 //   $dbname = "peminjaman";

//    $conn = mysqli_connect($serv, $uname, $pass, $dbname);

    // Check connection
 //   if(!$conn){
  //      die("Connection failed: " . mysqli_connect_error());
   // }

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'peminjaman';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
 // Check connection
if (!$conn) {
	die ("connection failed.". mysqli_connect_error()); //close connection
}
?>

