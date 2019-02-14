<?php 
	include("includes2/header.php");
	include("includes2/classes/Artist.php");

  require("language/language.php");


$artist_id = $_GET['artist_id'];
echo $artist_id;
$artist = new Artist($con, $artistId);
echo $artist->getName();

	
?>