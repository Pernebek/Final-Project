<?php
$id=$_SESSION['id'];
include("../connect/dataBase.php");
$friends = mysql_query("SELECT * FROM friends WHERE user_id = $id");
echo "<br>";
while($row_friends = mysql_fetch_array($friends)){
	$friends_id = $row_friends['friends_id'];
	$friends_inf = mysql_query("SELECT * FROM users WHERE id = $friends_id");	
	while($view_friends = mysql_fetch_array($friends_inf)){
		echo "<div id='friends_div'>";
		if($view_friends['photo'])
		{
			$image = $view_friends['photo'];
		}
		else{
			$image = "images/default.jpg";
		}
		echo  "<img id='friends_avatar' src='".$image."'>"." ";
		echo $view_friends['name']." ";
		echo  $view_friends['surname']."<br>";
		echo "</div>";
}
	};


?>