

<?php
include("../../connect/dataBase.php");
session_start();
$email=$_SESSION['email'];

$news_view = mysql_query("SELECT * FROM news ORDER BY id DESC");
while($row_post = mysql_fetch_array($news_view)){
	// $id = $row_post['id'];
	// echo "<p>$id</p>";
	// $image = $row_post['image'];
	
	// echo $row_post['title']."<br>";
	$author = mysql_query("SELECT * FROM users WHERE email='$email' ");
	$row_author = mysql_fetch_array($author);
	$image = $row_author['photo'];
	echo "<img src='$image' id='friends_avatar'>";
	echo $row_author['name']." ";
	echo $row_author['surname']."<hr>";

	echo  $row_post['text']."<br>";
	
	// echo  "<img id='post_img' src='".$image."'>";
	echo "<br><hr><br>";

 };






?>