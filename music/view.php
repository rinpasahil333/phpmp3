<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="styles/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="songsview1.php">ADD NEW SONGS</a></p>
<h2>View Records</h2>
<table width="auto" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Artist</strong></th>
<th><strong>Source</strong></th>
<th><strong>genre</strong></th>
<th><strong>Album</strong></th>
<th><strong>TrackNumber</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from music ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["title"]; ?></td>
<td align="center"><?php echo $row["artist"]; ?></td>
<td align="center"><?php echo $row["source"]; ?></td>
<td align="center"><?php echo $row["genre"]; ?></td>
<td align="center"><?php echo $row["album"]; ?></td>
<td align="center"><?php echo $row["trackNumber"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>