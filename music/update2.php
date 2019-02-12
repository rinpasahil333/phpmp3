<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update</title>
        <link rel="stylesheet" type="text/css" href="styles/stylenav.css">
    </head>
    <body>
        <div id = "main">
        <form action="update2.php" method="post">
            <input type="hidden" value="<?= $_GET['id'] ?>" name="id"/>
            <br>

            <label>Song Genre :</label>

<?php
include('connect.php');

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

           
<label>Song trackcount :</label>

            <?php
$conn = new mysqli('localhost', 'root', '', 'kinnaurisongs') 
or die ('Cannot connect to db');

    $result = $conn->query("SELECT genre, COUNT(*) AS TotalTracks FROM music GROUP BY genre");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='totalTrackCount'>";

    while ($row = $result->fetch_assoc()) {

                  unset($TotalTracks, $genre);
                  $TotalTracks = $row['TotalTracks'];
                  $genre = $row['genre']; 
                  echo '<option value="'.$TotalTracks.'>'.$genre.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
<br/>
          <input type="submit" value=" Submit " name="submit"/><br />
        </form>
    </div>
    </body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kinnaurisongs";



if ($_POST['submit']) {

    $name = $_POST['genre'];
    $totalTrackCount = $_POST['totalTrackCount'];
    $id = $_POST['id'];
    
    if (!empty($genre) && !empty($totalTrackCount) && !empty($id)) {
       // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

        }

        $query = "UPDATE music SET totalTrackCount=$totalTrackCount WHERE genre = $genre";
        
        if ($conn->query($query) === TRUE) {
            header('location: http://localhost/music/insert2.php');
        }	
        else {
echo "<script type= 'text/javascript'>alert('Error: " . $query . "<br>" . $conn->error."');</script>";
}
        $conn->close();
    }
}

?>