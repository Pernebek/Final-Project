
<?php 
session_start();
$id =  $_SESSION['id'];
include("connect/dataBase.php");

$user_inf = mysql_query("SELECT * FROM users WHERE id = $id");
$profile = mysql_fetch_array($user_inf);
	$image = $profile['photo'];
	echo "<img id='avatar' src='$image'><br>";
	echo "	<form action='change_avatar/change_avatar.php' method='post' enctype='multipart/form-data'>
				<input class='change_ava_button' type='file' name='avatar' >
				</input><br>
				<input type='submit' value='change avatar' >
				</input>
			</form>";
	
	echo "<div id = 'user_inf'>";
		echo 'email: ';
		echo $profile['email']."<br>";
		echo 'name: ';
		echo $profile['name']."<br>";
		echo 'surname: ';
		echo $profile['surname']."<br>";
	echo "</div>";
	
	echo "<hr>";
	
		echo "<div class='news_area'>";
		echo "<form method='post' action='posts/add_new/save_new.php'>";
		echo "<textarea id='news' rows='4' cols='60' placeholder='news' name='content' ></textarea>";
		echo "<br><br>";
		echo "<div>";
			echo "<input class='submit' type='submit' value='share'></input>";
			// echo "<input class='add_photo' type='file' value='photo'></input>";
		echo "</div>";	
		echo "</form>";
		

	echo "</div>";
?>