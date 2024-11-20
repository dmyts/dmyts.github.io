<?php
$host = "localhost";
$user= "root";
$passw = "";
$db = "basecodes";

$conn = mysqli_connect($host, $user, $passw, $db);
if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>