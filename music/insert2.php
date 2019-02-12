<?php
include "../../inc/init.php";
if(!is_admin()) {
	header("Location: $set->url");exit;
}
?><?php include("header.php"); ?>
<html>
<head>
<title>Song DataBase</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>



<div id="main">
<h1>Insert Song into database using mysqli</h1>
<div id="login">
<h2>Song's Form</h2>
<hr/>
<form action="insert2.php" method="post">
<label>Song Name :</label>
<input type="text" name="title" id="name" required="required" placeholder="Please Enter Name"/><br /><br />
<label>Song Album :</label>
<input type="text" name="album" id="text" required="required" placeholder="Please Enter Album Name"/><br/><br />
<label>Song Artist :</label>
<input type="text" name="artist" id="city" placeholder="Please Enter Artist name"/><br/><br />
<label>Add New Genre : <a href= "insertcat.php">Click Here </a> </label><br/><br />
<label>Song Genre :</label>
<?php
include("connect.php");

    $result = $conn->query("select id, cname from categories");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='genre'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $cname);
                  $id = $row['id'];
                  $cname = $row['cname']; 
                  echo '<option value="'.$cname.'">'.$cname.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
<br/><br/>

<label>Song Source :</label>
<input type="text" name="source" id="text" required="required" placeholder="Source Name"/><br/><br />
<label>Song Image :</label>
<input type="text" name="image" id="city" placeholder="Image link"/><br/><br />
<label>Song Track Number :</label>
<input type="text" name="trackNumber" id="text" required="required" placeholder="trackNumber"/><br/><br />
<label>Total TrackCount :</label>
<?php
include("connect.php");

    $result = $conn->query("SELECT genre, COUNT(*) AS TotalTracks FROM music GROUP BY genre");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='totalTrackCount'>";

    while ($row = $result->fetch_assoc()) {

                  unset($TotalTracks, $genre);
                  $TotalTracks = $row['TotalTracks'];
                  $genre = $row['genre']; 
                  echo '<option value="'.$TotalTracks.'">'.$genre.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
<br/><br/>

<input type="text" name="duration" id="city" placeholder="Song Duration"/><br/><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
</div>


<?php
if(isset($_POST["submit"])){
/*$servertitle = "localhost";
$usertitle = "rinpasahil333";
$password = "hGayle333@";
$dbtitle = "kinnauriartists";*/
include("connect.php");

  $title = $_POST['title'];
  $album = $_POST['album'];
  $artist = $_POST['artist'];
  $genre = $_POST['genre'];
  $source =$_POST['source'];
  $image = $_POST['image'];
  $trackNumber = $_POST['trackNumber'];
  $totalTrackCount = $totalTrackCount + 1;
  $totalTrackCount = $_POST['totalTrackCount'];
  $duration = $_POST['duration'];


$sql = "insert into music (title,album,artist,genre,source,image,trackNumber,totalTrackCount,duration)
     values ('$title','$album','$artist','$genre','$source','$image','$trackNumber', '$totalTrackCount','$duration')";
 if ($conn->query($sql) === TRUE) {
header('Location: editcat.php?genre='.$genre.'');
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
  </html>