<?php 
	include("db.php");
	session_start();
	$user_id = $_SESSION['user_login'];
	$sess = mysqli_query($con,"SELECT `username`,`name` FROM `users` WHERE username='$user_id'");
	$row= mysqli_fetch_array($sess,MYSQLI_ASSOC);
	$user =$row['name'];
	if(!isset($_SESSION['user_login']))
	{
		header("location:default");
	}
?>