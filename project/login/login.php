<?php
	session_start();

	if (isset($_POST['email'])) { 
		$email = trim($_POST['email']);
	}

	if (isset($_POST['password'])) { 
		#$password=md5($_POST['password']);
		$password=md5($_POST['password']);
	}
	
	if (empty($email) or empty($password)) {
    	exit ("NOT FULL");
    }

    include ("../connect/dataBase.php");

    $sql = mysql_query("SELECT * FROM users WHERE email='$email'",$db);
    
    $row = mysql_fetch_array($sql);

    echo $row['password'];
    echo "<br>";
    echo $password;

    if (empty($row['password'])){
    	
    	exit ("Sorry mistake.");
    }
    else {
	
    	if ($row['password']==$password) {
    		$_SESSION['email']=$row['email']; 
    		$_SESSION['id']=$row['id'];
    		#$_SESSION['admin']=$myrow['admin'];
			#header('location:../index.php');
    		header('location:../main.php');
    }
 		else {
    		exit ("Mistake.");
    	}
    }

?>