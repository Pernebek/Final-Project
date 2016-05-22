<html>
    <head>
	<link href="../style.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" charset=UTF-8" />
    	<title>Bublya</title>
    </head>
    
    <body>
	
    	<h2>Registration</h2>
    	
    	<form action="save_user.php" method="post" enctype="multipart/form-data">
			<p>
    			<label>Your Email:<br></label>
    			<input name="email" type="text" size="20" maxlength="20" placeholder="email">
    		</p>
			
			<p>
    			<label>Name:<br></label>
    			<input name="name" type="text" size="20" maxlength="20" placeholder="name">
    		</p>
			
			<p>
    			<label>Surname:<br></label>
    			<input name="surname" type="text" size="20" maxlength="20" placeholder="surname">
    		</p>
			
			<p>
    			<label>Your Password:<br></label>
    			<input name="password" type="password" size="20" maxlength="20" placeholder="password">
    		</p>
			<p>
    			<input type="submit" name="submit" value="Registration">
			</p>
		</form>
    </body>
</html>