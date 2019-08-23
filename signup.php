
<?php
	include 'header.php';
?>


<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	if(strpos($url, 'error=empty') !== false)
	{
		echo "Fill out all fields!"; 
	}
	elseif(strpos($url, 'error=username') !== false)
	{
		echo "User name already exist!"; 
	}
	if(isset($_SESSION['uid']))
	{
		echo "You are already logged in!";
	}
	else
	{
		echo"<form class='signup' action='includes/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='Firstname'><br>
	<input type='text' name='last' placeholder='Lastname'><br>
	<input type='text' name='uid' placeholder='Username'><br>
	<input type='password' name='pwd' placeholder='Password'><br>
	<button type='submit' >Sign Up</button>
	
	</form>";
	}
?>





</body>


</html>