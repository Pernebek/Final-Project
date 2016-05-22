<?php

    if (isset($_POST['email'])){
        $email=trim($_POST['email']);
    }
	
    if (isset($_POST['name'])){
        $name=trim($_POST['name']);
    }
	
    if (isset($_POST['surname'])){
        $surname=trim($_POST['surname']);
    }
    
    if (isset($_POST['password'])){
        $password=md5($_POST['password']);
    }
	//if($_FILES['photo']['error']){print "Error";exit();}
	//else{
		//print $_FILES['photo']['name'];
		// if (isset($_FILES['photo']['name'])){
		// 	print("ok");
  //           $uploadfile = "images/".$_FILES['photo']['name'];
		// 	move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
		// }
		
		// if(!isset($_FILES['photo']['name']))
		// {	
		// 	print "not ok";
		// 	$uploadfile="images/default.jpg";
			
			
		// }
	//}		
	
    if (!(isset($login) or isset($password) or isset($name))){
        exit ("Fill the blank");
    }

    include("../connect/dataBase.php");
    $result = mysql_query("SELECT id FROM users WHERE email='$email'",$db);
    $myrow = mysql_fetch_array($result);

    if (!empty($myrow['id'])) {
        exit ("SORRY, this email is already used");
        }

    $result2 = mysql_query ("INSERT INTO users (email,password,name,surname,photo) VALUES('$email','$password','$name','$surname','$uploadfile')");  

    if ($result2){
        echo "alert('You are in system! Now you can')";
		header('location:../index.php');
    }
    else {
        echo "Warning";
    }  

?>