<?php
	
	session_start();

	include("db.php");

	$title=$_POST['title'];
	$text=$_POST['text'];
	$image=$_POST['image'];
	

	$id=$_GET['id'];

	if(isset($_POST['text']) and isset($_POST['title'])){

		$uploadfile = "images/".$_FILES['userfile']['name'];
  		move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

		
		
		mysql_query("UPDATE `news` SET `title`='$title',`text`='$text',`image`='$uploadfile' WHERE id='$id'",$db) or die("error");
		header('location:index.php');

	}
	else {
		echo "Error";
	}




?>