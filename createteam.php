<?php
$score = 50;

echo"
	<p> Enter the player name that will exacty same as players table name</p>
	<form action='includes/create.inc.php' method='POST'>
	<br><br>
	<input type='text' name='player_1' placeholder='Player_1'><br>
	<input type='text' name='player_2' placeholder='Player_2'><br>
	<input type='text' name='player_3' placeholder='Player_3'><br>
	<input type='text' name='player_4' placeholder='Player_4'><br>
	<button type='submit' >Create Team</button>
	</form>";
	
echo "<h2> 'Score = $score'";

