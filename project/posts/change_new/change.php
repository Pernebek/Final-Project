<?php
	
	session_start();

	if (isset($_SESSION['id'])){
		if ($_SESSION['admin']==1){

	include("db.php");

	$id=$_GET['id'];

	$myrow = mysql_fetch_array(mysql_query("SELECT * FROM news WHERE id='$id'")) or die('soe');

	echo '
	<form enctype="multipart/form-data" action="changesql.php?id='.$id.'" method="post">
	<h2>Изменение</h2>
	Заголовок:<input type="text" name="title" value="'.$myrow['title'].'"><br>
	-----------------------------------------------------------------------<br>
	Текст:<textarea name="text" >'.$myrow['text'].'</textarea ><br>
	-----------------------------------------------------------------------<br>
	Изображение:<input type="file" name="userfile"><br>
	<br><br>
	<button type="submit" >Submit</button>

</form>

	';}
	else {echo "only admin can change news";}
}	
	else {echo "log in to change";}
	

?>