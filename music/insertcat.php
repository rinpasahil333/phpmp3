<?php
include "../../inc/init.php";
if(!is_admin()) {
	header("Location: $set->url");exit;
}
?>

<?php
include("header.php");
?><html>
<head>
<title>Add Genre To DataBase</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>



<div id="main">
<h1>Insert Category into database using mysqli</h1>
<div id="login">
<h2>Song's Form</h2>
<hr/>
<form action="insertcat.php" method="post">
<label>Song Genre :</label>
<input type="text" name="cname" id="name" required="required" placeholder="Please New Genre Name"/><br /><br />

<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
</div>
<?php
if(isset($_POST["submit"])){
include("connect.php");

  $cname = $_POST['cname'];


$sql = "insert into categories (cname) values ('$cname')";
 if ($conn->query($sql) === TRUE) {
header('Location: success.php');
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
  </html>