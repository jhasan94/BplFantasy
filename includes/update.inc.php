<?php
session_start();

include '../dbh.php';

$player_name= $_POST['player'];

$score= $_POST['score'];

if(empty($player_name))
{
	header("Location: ../admin.php?error=empty");
	exit();
}

if(empty($score))
{
	header("Location: ../admin.php?error=empty");
	exit();
}



else
{
	$sql = "SELECT * FROM players WHERE P_name = '$player_name'";
	$result = $conn->query($sql);
	$uidcheck = mysqli_num_rows($result);
	
	if($uidcheck<1)
	{
		header("Location: ../admin.php?error=Invalid_playerName");
	    exit();
	}
	else
	{
	
	$sql = "UPDATE players
SET score = '$score'
WHERE P_name = '$player_name' ";
	$result = $conn->query($sql);	
	header("Location: ../admin.php?success");
	}

	
}


