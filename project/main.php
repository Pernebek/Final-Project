<html>
	<head>
		<link href="main.css" rel="stylesheet" type="text/css">
		<script src="main.js" type = "text/javascript"></script>
	</head>


<body>
	<nav> 
		<div class="div" > <img src="pictures/logo.png" width="85px" height="15px"></div>
		<a href="#"><div id="first_div" class="div" onClick="viewNews()">News</div></a>
		<a href="#"><div class="div" onClick="viewInbox()">Inbox</div></a>
		<a href="#"><div class="div" onClick="viewSent()">Sent Mail</div></a>
		<a href="logout/logout.php"> <div class="div" >Log out</div> </a>
	</nav>
	<div class="left_part , same">
		<a href="#"><div class="left_nav" onClick="viewProfile()">My Profile</div></a>
		<a href="#"><div class="left_nav" onclick="viewFriends()">My Friends</div></a>
		<a href="#"><div class="left_nav">My Photos</div></a>
		<a href="#"><div class="left_nav">My Documets</div></a>
		<a href="#"><div class="left_nav">My Musics</div></a>
		<a href="#"><div class="left_nav">My Videos</div></a>
	</div>
	
	<div id="main" class="main_part , same">
		
			<?php 
				include("profile.php");
			 	?> 
		
	</div>
	
	<div class="right_part , same">
	
	</div>
	<?php
	//include("connect/dataBase.php");
	//include("friends/friends.php");
	//include("posts/view_post/view_post.php");
	
	?>
</body>


</html>