<?php
function dbconnect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "easysociety";
  $conn = mysqli_connect($servername, $username, $password, $db);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  else{
    return $conn;
  }
}
?>
