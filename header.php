<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Fantacy Cricket</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>

	<nav>
		<ul>
			<li><a href="home.php">HOME</a></li>
			<?php
			if(isset($_SESSION['uid']))
			{
				echo"<form action='includes/logout.inc.php'>
				<button>Log Out</button>
				</form>";
			}
			else
			{
		echo "<form action='includes/login.inc.php' method='POST'>
			<input type='text' name='uid' placeholder='Username'>
			<input type='password' name='pwd' placeholder='Password'>
			<button type='submit' >Login</button>

			</form>";
			}
			
			
			?>
			<li><a href="signup.php">SIGNUP</a></li>
		</ul>
		
	<nav>

</header>