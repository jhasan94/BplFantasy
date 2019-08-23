<?php
session_start();
include '../dbh.php';

$uid= $_POST['uid'];
$pwd= $_POST['pwd'];


$sql = "SELECT * FROM users WHERE uid='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd,$hash_pwd);



if($hash==0)
{
	header("Location: ../home.php?error=Incorrect_Password");
	exit();
}
else
{
	$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd ='$hash_pwd' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
if(!$row)
{
	echo "Incorrer username or password";
}
else
{
	if($row['uid']== 'admin')
	{
		$_SESSION['uid']=$row['uid'];
		$_SESSION['admin']= 'admin';
		header("Location: ../home.php?admin");
		exit();
	}
	else
	$_SESSION['uid']=$row['uid'];
}
header("Location: ../home.php");
}

