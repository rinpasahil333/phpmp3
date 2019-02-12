<html>
<head>
<title>Song DataBase</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<div id="main">
<h1>Insert Song into database using mysqli</h1>
<div id="login">
<h2>Song's Form</h2>
<hr/>
<form action="insert.php" method="post">
<label>Song Name :</label>
<input type="text" name="stu_title" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Song Album :</label>
<input type="text" name="stu_album" id="text" required="required" placeholder="Please Enter Album Name"/><br/><br />
<label>Song Artist :</label>
<input type="text" name="stu_artist" id="city" placeholder="Please Enter Artist name"/><br/><br />
<label>Song Genre :</label>
<input type="text" name="stu_genre" id="name" required="required" placeholder="Genre Name"/><br /><br />
<label>Song Source :</label>
<input type="text" name="stu_source" id="text" required="required" placeholder="Source Name"/><br/><br />
<label>Song Image :</label>
<input type="text" name="stu_image" id="city" placeholder="Image link"/><br/><br />
<label>Song Track Number :</label>
<input type="text" name="stu_tnumber" id="text" required="required" placeholder="trackNumber"/><br/><br />
<label>Song Duration :</label>
<input type="text" name="stu_duration" id="city" placeholder="Song Duration"/><br/><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
</div>
<?php

if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kinnaurisongs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `music` (`title`, `album`, `artist`, `genre`, `source`, `image`, `trackNumber`, `totalTrackCount`, `duration`, `site`, `id`)
VALUES ('".$_POST["stu_title"]."','".$_POST["stu_album"]."','".$_POST["stu_artist"]."','".$_POST["stu_genre"]."','".$_POST["stu_source"]."','".$_POST["stu_image"]."','".$_POST["stu_tnumber"]."','".$_POST["stu_duration"]."')";


if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>