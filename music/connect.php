<?php
	$servername = "localhost";
$username = "rinpasahil333";
$password = "hGayle333@";
$dbname = "kinnaurisongs";


/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kinnaurisongs";*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
      
  ?> 