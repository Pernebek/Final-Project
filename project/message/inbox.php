

<?php
include("../connect/dataBase.php");
session_start();
$id=$_SESSION['id'];

$message = mysql_query("SELECT * FROM message WHERE to_id = '$id' ORDER BY id DESC");
while($row_message = mysql_fetch_array($message)){
	$author_id=$row_message['from_id'];
	$author = mysql_query("SELECT * FROM users WHERE id = '$author_id' ");
	$email = mysql_fetch_array($author);
	echo "FROM: ";
	echo $email['name'];
	echo "   "; 
	echo $email['surname'];
	echo "<br>";
	echo "TEXT: ";
	echo  $row_message['content']."<br>";
	
};


?>