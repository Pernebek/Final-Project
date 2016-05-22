
<?php
session_start();
if (isset($_SESSION['id'])){

echo '<form enctype="multipart/form-data" action="save_new.php" method="post">
	<h2>Adding News</h2>
	Title:<input type="text" name="title" placeholder="title"><br>
	-----------------------------------------------------------------------<br>
	Text:<textarea name="text" placeholder="text"></textarea ><br>
	-----------------------------------------------------------------------<br>
	Image:<input type="file" name="userfile"><br>
	<br><br>
	<button type="submit" >Submit</button>

</form>';}

else echo "log in";
?>