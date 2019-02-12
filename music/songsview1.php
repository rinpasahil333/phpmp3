<?php
    include "../../inc/init.php";
    if(!is_admin()) {
      header("Location: $set->url");exit;
}
?>
<?php include('pagination.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div style="height: 20px;"></div>
  <div class="row">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-8">
  <table width="80%" class="table table-striped table-bordered table-hover">
    <thead>
      <th>UserID</th>
      <th>Name</th>
      <th>Path</th>
      <th>IsDir</th>
      <th>edit</th>
      <th>Duration</th>
      <th>play</th>
    </thead>
    <tbody>
    <?php
      while($crow = mysqli_fetch_array($nquery)){
      ?>
        <tr>
          <td><?php echo $crow['id']; ?></td>
          <td><?php echo $crow['name']; ?></td>
          <td><?php echo $crow['path']; ?></td>
          <td align="auto"><?php echo str_replace(' ', '%20', ($crow["isdir"])); ?></td>
           
         
           <?php $url = $crow["icon"];
           $domain = parse_url($url, PHP_URL_PATH);
?>

          <td><a id="link<?php echo $crow['id'] ?>"
           href="newadd.php?icon=<?php echo $domain; ?>&source=<?php echo $crow["path"]; ?>&title=<?php echo $crow["name"]; ?>&duration=" onclick="window.open(this.href);return false;">Edit</a> 
    </td>
           <td> <p id="demo<?php echo $crow['id']; ?>"> </p> </td>
	<td>
	      <audio id="myAudio<?php echo $crow['id'] ?>"
	             onloadedmetadata="myFunction(<?php echo $crow['id'] ?>);"
	             controls>
	         <source src=../..<?php echo str_replace(' ', '%20', ($crow["path"])); ?> type="audio/mpeg">
	      </audio>
	</td>
	
        </tr>
      <?php  }   ?>
<script>
    function myFunction(id) {
      var x = document.getElementById("myAudio" + id).duration;
      document.getElementById("demo" + id).innerHTML = x;
      var a = document.getElementById("link" + id);
      a.href += x;
    }
  </script>
    </tbody>
  </table>
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div>
  <div class="col-lg-2">
  </div>
  </div>
</div>
</body>
</html>