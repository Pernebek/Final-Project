
<?php
session_start();
$to = $_REQUEST['q'];
	


			echo "<form action='message/save_message.php' method='get'>
			<input type='hidden' name='to' value='$to' ></input>
			<input name='content' type='textarea' placeholder='type...' class='text'></input>
			<input type='submit' value='Send'></input>
		</form>";
?>
