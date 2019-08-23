<?php
session_start();

include '../dbh.php';

$player_name= $_POST['player_name'];
$team= $_POST['team'];
$weight= $_POST['weight'];
$score=0;

if(empty($player_name))
{
	header("Location: ../admin.php?error=name");
	exit();
}

if(empty($team))
{
	header("Location: ../admin.php?error=team");
	exit();
}
if(empty($weight))
{
	header("Location: ../admin.php?error=weight");
	exit();
}


else
{
	$sql = "SELECT * FROM players WHERE P_name = '$player_name'";
	$result = $conn->query($sql);
	$uidcheck = mysqli_num_rows($result);
	
	if($uidcheck>0)
	{
		header("Location: ../admin.php?error=playerName");
	    exit();
	}
	else
	{
	
	$sql = "INSERT INTO players(P_name, Team_name, weight, score)
	VALUES('$player_name','$team','$weight','$score') ";
	$result = $conn->query($sql);	
	header("Location: ../admin.php?success");
	}

	
}


