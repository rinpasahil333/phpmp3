# phpmp3
<h1> Installation Guide </h1>
<ol>
  <li>Copy this complete code inside HTDOCS folder (if using XAMPP ) or paste in directory path in case of live server.</li>
  <li>Make Sure to import database from DB folder (onlinemp3.sql file).</li>
  <li>Check conncetion.php inside Includes & includes2 Folder and Define Database name etc.</li>
  </ol>
<h2> UnderStanding Interfaces </h2>
<strong> index.php </strong>
<p>From here You will Log into Admin Panel Directly. That will have many options such ass add, delete albums artists categories, sending Notification, and other Settings </p>
<strong> index2.php </strong>
<p> This is currently testing phase of Unified Display for 3 diffrent types of users.
<ul>
  <li>Non LoggedIn</li>
  <li>LoggedIn (Admin)</li>
  <li>LoggedIn (Users)</li>
  </p>
</ul>
Different Options will be Displayed according to their roles and types.

<p>For Now you will notice 2 folders includes, includes2 and might get confuse, i will list files using includes2 folders files as they are less and easy to list  </p>
<h3> Files Using includes2 headers </h3>
<ul>
<li>login.php </li>
<li>index2.php </li>
<li>view_album.php </li>
<li>view_artist.php </li>
<li>view_category.php </li>
<li>view_mp3.php  </li>
<li>view_playlist.php</li>
<li>index2.php</li>
<li>login.php</li>

<li>Session_check.php (Is commented For Now Inside includes2 Folder)</li>
</ul>

<p> Rest of the files are using includes folders files. 
Later we will make it unified and will delete one of the includes folder.</p>

<h2> TODO </h2>
<ol>
  <li>Viewable Seprate Pages For Categories, Albums, Artist, Songs.</li>
  <li>Responsivly display content in smaller devices i.e. mobiles, smartphone.</li>
  <li> Url simplification. </li>
  <li> Audio Player. </li>
  <li> Single Page Transition.</li>
  <li> Seperate Sections For Artists that willl Allow them to upload their Songs.</li>
  <li> Different Sorting options for results</li>
</ol>
  
