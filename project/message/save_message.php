
<?php 
	include("../connect/dataBase.php");
	session_start();
	$from = $_SESSION['id'];
	$to = $_REQUEST['to'];
	$content = $_REQUEST['content'];
	$message=mysql_query ("INSERT INTO message (from_id,to_id,content) VALUES('$from','$to','$content')");  
	header('location:../main.php');	


?>
