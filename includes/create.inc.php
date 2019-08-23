<?php
session_start();

include '../dbh.php';

$user_name = $_SESSION['uid'];
$player_1= $_POST['player_1'];
$player_2= $_POST['player_2'];
$player_3= $_POST['player_3'];
$player_4= $_POST['player_4'];

if(empty($player_1))
{
	header("Location: ../home.php?error=player_1");
	exit();
}

if(empty($player_2))
{
	header("Location: ../home.php?error=player_2");
	exit();
}
if(empty($player_3))
{
	header("Location: ../home.php?error=player_3");
	exit();
}

if(empty($player_4))
{
	header("Location: ../home.php?error=player_4");
	exit();
}
else
{
	$sql = "SELECT * FROM choose WHERE user_name = '$user_name'";
	$result = $conn->query($sql);
	$uidcheck = mysqli_num_rows($result);
	
	if($uidcheck>0)
	{
		header("Location: ../signup.php?error=Already_create");
	    exit();
	}
	else
	{
	
	$sql = "INSERT INTO choose(user_name, player_1, player_2, player_3, player_4)
	VALUES('$user_name','$player_1','$player_2','$player_3','$player_4') ";
	$result = $conn->query($sql);	
	header("Location: ../home.php?success");
	}

	
}


