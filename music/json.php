<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","kinnaurisongs") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from music";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $music = array();
    while($row =mysqli_fetch_array($result))
    {
        array_push($music,array("title"=>$row[0],"album"=>$row[1],"artist"=>$row[2],"genre"=>$row[3],"source"=>$row[4],"image"=>$row[5],"trackNumber"=>$row[6],"totalTrackCount"=>$row[7],"duration"=>$row[8],"site"=>$row[9]));
    }
    echo json_encode(array("music"=>$music));

    //close the db connection
    mysqli_close($connection);
?>