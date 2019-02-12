<?php
    include "../../inc/init.php";
    if(!is_admin()) {
      header("Location: $set->url");exit;
}
?><?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert2.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="auto" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Path</strong></th>
<th><strong>IsDir</strong></th>
<th><strong>Duration</strong></th>

<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from nxt_files where isdir=0 ORDER BY id asc LIMIT 0,30;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo str_replace(' ', '%20', ($row["path"])); ?></td>
<td align="center"><?php echo $row["isdir"]; ?></td>
<td align="center">

<audio id="<?php echo $row["id"]; ?>" controls>
  <source src=../..<?php echo str_replace(' ', '%20', ($row["path"])); ?> type="audio/mpeg">
</audio>
</td>

<td align="center">
<button  onclick="myFunction<?php echo $row["id"]; ?>()">Try it</button>

<p id="<?php echo $row["name"]; ?>"></p>

<script>
function myFunction<?php echo $row["id"]; ?>() {
    var x<?php echo $row["id"]; ?> = document.getElementById("<?php echo $row["id"]; ?>").duration;
    document.getElementById("<?php echo $row["name"]; ?>").innerHTML = x<?php echo $row["id"]; ?>;
}
</script>

</td>
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