<?php include("connection.php");
      include("session_check.php");
      include("function.php");
      
      //Get file name
      $currentFile = $_SERVER["SCRIPT_NAME"];
      $parts = Explode('/', $currentFile);
      $currentFile = $parts[count($parts) - 1];       
       
      
?>
<!DOCTYPE html>
<html>
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title><?php echo APP_NAME;?></title>
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/vendor.css">
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/flat-admin.css">

<!-- Theme -->
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/theme/blue-sky.css">
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/theme/blue.css">
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/theme/red.css">
<link rel="stylesheet" type="text/css" href="/mymp3/assets/css/theme/yellow.css">

 <script src="assets/ckeditor/ckeditor.js"></script>

</head>
<body>
<div class="app app-default">
  <aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header"> <a class="sidebar-brand" href="home.php"><img src="/mymp3/images/<?php echo APP_LOGO;?>" alt="app logo" /></a>
      <button type="button" class="sidebar-toggle"> <i class="fa fa-times"></i> </button>
    </div>
    <div class="sidebar-menu">
      <ul class="sidebar-nav">
        <li <?php if($currentFile=="index2.php"){?>class="active"<?php }?>> <a href="/mymp3/index2.php">
          <div class="icon"> <i class="fa fa-dashboard" aria-hidden="true"></i> </div>
          <div class="title">Dashboard</div>
          </a> 
        </li>
        <li <?php if($currentFile=="test/view_artist.php" or $currentFile=="add_artist.php"){?>class="active"<?php }?>> <a href="/mymp3/view_artist.php">
          <div class="icon"> <i class="fa fa-buysellads" aria-hidden="true"></i> </div>
          <div class="title">Artist</div>
          </a> 
        </li>
        <li <?php if($currentFile=="test/view_category.php" or $currentFile=="add_category.php"){?>class="active"<?php }?>> <a href="/mymp3/view_category.php">
          <div class="icon"> <i class="fa fa-sitemap" aria-hidden="true"></i> </div>
          <div class="title">Categories</div>
          </a> 
        </li>
        <li <?php if($currentFile=="test/view_album.php" or $currentFile=="add_album.php"){?>class="active"<?php }?>> <a href="/mymp3/view_album.php">
          <div class="icon"> <i class="fa fa-image" aria-hidden="true"></i> </div>
          <div class="title">Album</div>
          </a> 
        </li>
        <li <?php if($currentFile=="view_playlist.php" or $currentFile=="add_playlist.php"){?>class="active"<?php }?>> <a href="/mymp3/view_playlist.php">
          <div class="icon"> <i class="fa fa-list" aria-hidden="true"></i> </div>
          <div class="title">Playlist</div>
          </a> 
        </li>

        <li <?php if($currentFile=="view_mp3.php" or $currentFile=="add_mp3.php" or $currentFile=="edit_mp3.php"){?>class="active"<?php }?>> <a href="/mymp3/view_mp3.php">
          <div class="icon"> <i class="fa fa-music" aria-hidden="true"></i> </div>
          <div class="title">Mp3 Songs</div>
          </a> 
        </li>
        <?php if(isAdmin()) { ?>
      

        <li <?php if($currentFile=="send_notification.php"){?>class="active"<?php }?>> <a href="/mymp3/send_notification.php">
          <div class="icon"> <i class="fa fa-bell" aria-hidden="true"></i> </div>
          <div class="title">Notification</div>
          </a> 
        </li>
       
        <li <?php if($currentFile=="settings.php"){?>class="active"<?php }?>> <a href="/mymp3/settings.php">
          <div class="icon"> <i class="fa fa-cog" aria-hidden="true"></i> </div>
          <div class="title">Settings</div>
          </a> 
        </li>

        <li <?php if($currentFile=="api_urls.php"){?>class="active"<?php }?>> <a href="/mymp3/api_urls.php">
          <div class="icon"> <i class="fa fa-exchange" aria-hidden="true"></i> </div>
          <div class="title">API URLS</div>
          </a> 
        </li>
         
       <?php }  ?>
         
      </ul>
    </div>
     
  </aside>   
  <div class="app-container">
    <?php if(isLoggedIn()) { ?>
    <nav class="navbar navbar-default" id="navbar">
      <div class="container-fluid">
        <div class="navbar-collapse collapse in">
          <ul class="nav navbar-nav navbar-mobile">
            <li>
              <button type="button" class="sidebar-toggle"> <i class="fa fa-bars"></i> </button>
            </li>
            <li class="logo"> <a class="navbar-brand" href="#"><?php echo APP_NAME;?></a> </li>
            <li>
              <button type="button" class="navbar-toggle">
                <?php if(PROFILE_IMG){?>               
                  <img class="profile-img" src="images/<?php echo PROFILE_IMG;?>">
                <?php }else{?>
                  <img class="profile-img" src="assets/images/profile.png">
                <?php }?>
                  
              </button>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-left">
            <li class="navbar-title"><?php echo APP_NAME;?></li>
             
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile"> <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"> <?php if(PROFILE_IMG){?>               
                  <img class="profile-img" src="images/<?php echo PROFILE_IMG;?>">
                <?php }else{?>
                  <img class="profile-img" src="assets/images/profile.png">
                <?php }?>
              <div class="title">Profile</div>
              </a>
              <div class="dropdown-menu">
                <div class="profile-info">
                  <h4 class="username"><?php echo $_SESSION['username'];?></h4>
                </div>
                <ul class="action">
                  <li><a href="profile.php">Profile</a></li>                  
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
  <?php } else { ?>
      <nav class="navbar navbar-default" id="navbar">
      <div class="container-fluid">
        <div class="navbar-collapse collapse in">
          <ul class="nav navbar-nav navbar-mobile">
            <li>
              <button type="button" class="sidebar-toggle"> <i class="fa fa-bars"></i> </button>
            </li>
            <li class="logo"> <a class="navbar-brand" href="#"><?php echo APP_NAME;?></a> </li>
            <li>
              <button type="button" class="navbar-toggle">
                  <img class="profile-img" src="assets/images/profile.png">
              </button>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-left">
            <li class="navbar-title"><?php echo APP_NAME;?></li>
             
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="login.php"><input type="submit" class="btn btn-success btn-submit" value="Login"></a></li>
            <li> <a href="#"><input type="submit" class="btn btn-success btn-submit" value="Sign Up"></a></li>
          </ul>
        </div>
      </div>
    </nav> 

    <?php } ?>