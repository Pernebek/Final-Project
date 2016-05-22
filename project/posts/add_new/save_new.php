
<?php
	
	session_start();

	include("../../connect/dataBase.php");

	$text=$_POST['content'];
	// $text=$_POST['text'];
	$author=$_SESSION['id'];
	if(isset($_POST['content']) ) {
	
		// $uploadfile = "images/".$_FILES['userfile']['name'];
  		// move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
		
		mysql_query("INSERT INTO  news (text, author) VALUES ('$text','$author')") or die("New isn't added");

	}

		
		header('location:../../main.php');



?>