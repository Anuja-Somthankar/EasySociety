<?php

$username = $_POST["username"];
$password = $_POST["password"];
require "dbconnection/db.php";
$conn = dbconnect();
$sql = "SELECT Username,Password,FlatOwner FROM housingmembers where Username = '$username' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  	$row = mysqli_fetch_assoc($result);
	  print_r($row);
	if ($row["Password"] == $password)
	{
		echo "Checkpoint 1";
		$username = $row["Username"]; 
		echo $username;
		session_start();
		$_SESSION["name"] = $row["FlatOwner"];
		$_SESSION["username"] = $row["Username"];
		$_SESSION["valid"] = true;
		echo "Checkpoint 2";
		header("Location:residentdashboard.php");
	}
	else{
		echo "Password Didn't match";
	}

}
mysqli_close($conn);
?>