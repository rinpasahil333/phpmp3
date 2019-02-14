<?php include("includes2/header.php");
	
  require("language/language.php");


  if(isset($_GET['artist_id'])){
  	$artist_id = $_GET['artist_id'];
  	// echo $artist_id;
  }
 
     $artist_qry="SELECT DISTINCT album_name,album_image FROM tbl_album t1 INNER JOIN tbl_artist t2 ON t1.id = '$artist_id'"; 
     $result=mysqli_query($mysqli,$artist_qry);


?>

<div class="row">
      <div class="col-xs-12">
        <div class="card mrg_bottom">
          <div class="page_title_block">
          	
            <div class="col-md-4 col-xs-12">
              <div class="page_title">Albums and Songs By Artists</div>
            </div>
            <div class="col-md-4 col-xs-12"> 
          		<img class="profile-img" src="../images/<?php echo getArtistImage($artist_id); ?>">
          	</div>
            <div class="col-md-4 col-xs-12">
              <div class="search_list">
                <div class="search_block">
                <form  method="post" action="">
                        <input class="form-control input-sm" placeholder="Search artist..." aria-controls="DataTables_Table_0" type="search" name="search_text" required>
                        <button type="submit" name="data_search" class="btn-search"><i class="fa fa-search"></i></button>
                </form>
              </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row mrg-top">
            <div class="col-md-12">
               
              <div class="col-md-12 col-sm-12">
                <?php if(isset($_SESSION['msg'])){?> 
               	 <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                	<?php echo $client_lang[$_SESSION['msg']] ; ?></a> </div>
                <?php unset($_SESSION['msg']);}?>	
              </div>
            </div>
          </div>
           
          <div class="col-md-12 mrg-top">
            <div class="row">
              <?php 
              $i=0;
              while($row=mysqli_fetch_array($result))
              {         
          ?>
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="block_wallpaper">           
                  <div class="wall_image_title">
                    <h2><a href="#"><?php echo $row['album_name'];?></a></h2>
                    <ul>
                                  
                      <li><a href="album/<?php echo $row['id'];?>" data-toggle="tooltip" data-tooltip="View Songs"><i class="fa fa-eye"></i></a></li>               
                      <li><a href="#" data-toggle="tooltip" data-tooltip="Send" onclick="return confirm('Are you sure you want to delete this artist?');"><i class="fa fa-location-arrow"></i></a></li>
                    </ul>
                  </div>
                  <span><img src="../images/<?php echo $row['album_image'];?>" /></span>
                </div>
              </div>
          <?php
            
            $i++;
              }
        ?>     
               
      </div>
          </div>

          <div class="col-md-12 col-xs-12">
            <div class="pagination_item_block">
              <nav>
                <?php if(!isset($_POST["data_search"])){ include("pagination.php");}?>
              </nav>
            </div>
          </div> 
          <div class="clearfix"></div>
        </div>
      </div>
    </div>