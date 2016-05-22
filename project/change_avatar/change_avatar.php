<?php
session_start();
$id = $_SESSION['id'];	
include("../connect/dataBase.php");

	
	//	print $_FILES['photo']['name'];
		if (isset($_FILES['avatar']['name'])){
  			
           $uploadfile = "images/".$_FILES['avatar']['name'];
			move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile);
		}
			// print("ok");
	$upload = mysql_query ("UPDATE users SET photo='$uploadfile' WHERE  id='$id' ");  
header("location:../main.php");

?>		