
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Fantacy Cricket</title>

</head>

<body>

<header>

	<nav>
		
			
			<?php
			
			
			echo"
			<h2>Enter Player data<h2><br>
			<form action='includes/player.inc.php' method='POST'>
			<input type='text' name='player_name' placeholder='Player_name'><br>
			<input type='text' name='team' placeholder='Team_name'><br>
			<input type='text' name='weight' placeholder='Weight'><br>
		
			<button>Add player</button><br><br><br><br>
				</form>";
				
				
			
	
			echo "
			<h2> Update score here</h2><br>
			<form action='includes/update.inc.php' method='POST'>
			<input type='text' name='player' placeholder='Player_name'><br>
			<input type='text' name='score' placeholder='Score'><br>
			<button type='submit' >Update Score</button><br><br>

			</form>";
			
			echo"<form action='includes/logout.inc.php'>
				<button>Log Out</button>
				</form>";
			
			
			?>
			
		
		
	<nav>

</header>