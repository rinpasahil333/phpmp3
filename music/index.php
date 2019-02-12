<?php
    include "../../inc/init.php";
    if(!is_admin()) {
      header("Location: $set->url");exit;
}
?>
<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Songs Upload</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<h2>SONGS ADMIN PANEL</h2>
<div style="padding-left:300px">
  
  <div id ="login">
  
	<li id ="cat" ><a href="insert2.php">Insert Songs</a></li>
	<li id ="cat"><a href="insertcat.php">Insert Categories</a></li>
	<li id ="cat"><a href="editcat.php">UPDATE Categories</a></li>
	<li id ="cat" ><a href="view.php">View Songs</a></li>
	<li id ="cat" ><a href="viewcat.php">View Categories</a></li>
	<li id ="cat" ><a href="songsview1.php">Songs To Be Updated....</a></li>
</div>
</div>

</body>
</html>
