<?php

include("connect.php");
$genre=$_REQUEST['genre'];

$query = "SELECT * from music where genre='".$genre."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Dashboard</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$genre=$_REQUEST['genre'];

$totalTrackCount =$_REQUEST['totalTrackCount'];
$update="update music set totalTrackCount='".$totalTrackCount."', trackNumber = trackNumber +1 where genre='".$genre."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>
<a href='insert2.php'>Insert New Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="genre" type="hidden" value="<?php echo $row['genre'];?>" />
<label>Song Genre :</label>
<p><input type="text" name="genre" placeholder="Enter genre" 
required value="<?php echo $row['genre'];?>" /></p>
<label>Total TrackCount:</label>
<p><input type="text" name="totalTrackCount" placeholder="Enter totalTrackCount" 
required value="<?php echo $row['totalTrackCount']+1;?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>

<h2>View Total Track Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Genre</strong></th>
<th><strong>Totaltracks</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT genre, COUNT(*) AS TotalTracks FROM music GROUP BY genre";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["genre"]; ?></td>
<td align="center"><?php echo $row["TotalTracks"]; ?></td>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
