# phpmp3
<h1> Installation Guide </h1>
<ol>=
  <li>Copy this complete code inside HTDOCS folder (if using XAMPP ) or paste in directory path in case of live server.</li>
  <li>Make Sure to import database from DB folder (onlinemp3.sql file).</li>
  <li>Check conncetion.php inside Includes & includes2 Folder and Define Database name etc.</li>
  </ol>

First Open index2.php, That is the interface for normal users </br>
<ul>
<li> On Top Right there will be login option for users to login. </li>
<li> Options According to their roles using <strong>isAdmin() , isLoggedIn()</strong> functions </li>
 </ul>

<h3> Files Using includes2 headers </h3>
<ul>
<li>view_album.php </li>
<li>view_artist.php </li>
<li>view_category.php </li>
<li>view_mp3.php  </li>
<li>view_playlist.php</li>
<li>index2.php</li>
<li>login.php</li>

<li>Session_check.php (Is commented For Now Inside includes2 Folder)</li>
</ul>


<h2> TODO </h2>
<ol>
  <li>Viewable Seprate Pages For Categories, Albums, Artist, Songs.</li>
  <li>Responsivly display content in smaller devices i.e. mobiles, smartphone.</li>
  <li> Url simplification. </li
  <li> Audio Player. </li>
  <li> Single Page Transition.</li
  <li> Seperate Sections For Artists that willl Allow them to upload their Songs.</li>
</ol>
  
