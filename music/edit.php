<?php

include("connect.php");
$id=$_REQUEST['id'];
$query = "SELECT * from music where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="styles/style.css" />
</head>
<body>
<div class="main">
<p><a href="index.php">Dashboard</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
	<div id="main1">
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$title =$_REQUEST['title'];
$artist =$_REQUEST['artist'];
$source =$_REQUEST['source'];
$genre =$_REQUEST['genre'];
$album =$_REQUEST['album'];
$trackNumber =$_REQUEST['trackNumber'];
$update="update music set genre='".$genre."',
title='".$title."', artist='".$artist."',
source='".$source."', album='".$album."', trackNumber='".$trackNumber."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div id ="login1">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<label>Song Title :</label>
<p><input type="text" name="title" placeholder="Enter Name" 
required value="<?php echo $row['title'];?>" /></p>
<label>Song Artist :</label>
<p><input type="text" name="artist" placeholder="Enter Artist" 
required value="<?php echo $row['artist'];?>" /></p>
<label>Song Source :</label>
<p><input type="text" name="source" placeholder="Enter Source" 
required value="<?php echo $row['source'];?>" /></p>
<label>Song Genre :</label>
<p><input type="text" name="genre" placeholder="Enter Genre" 
required value="<?php echo $row['genre'];?>" /></p>
<label>Song Album :</label>
<p><input type="text" name="album" placeholder="Enter Album" 
required value="<?php echo $row['album'];?>" /></p>
<label>Enter TrackNumber :</label>
<p><input type="text" name="trackNumber" placeholder="Enter TrackNumber" 
required value="<?php echo $row['trackNumber'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</div>
</body>
</html>