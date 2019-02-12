<?php

include "../../inc/init.php";
    if(!is_admin()) {
      header("Location: $set->url");exit;?>
<?php
 include('pagination.php'); ?>
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
		</thead>
		<tbody>
		<?php
			while($crow = mysqli_fetch_array($nquery)){
			?>
				<tr>
					<td><?php echo $crow['id']; ?></td>
					<td><?php echo $crow['name']; ?></td>
					<td><?php echo $crow['path']; ?></td>
					<td><?php echo $crow['isdir']; ?></td>
                                        <td><a href="newadd.php?source=<?php echo $crow["path"]; ?>&title=<?php echo $crow["name"]; ?>">Edit</a>
				</tr>
			<?php
			}		
		?>
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