<?php
  include("db.php");
  session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  	$username = mysqli_real_escape_string($con,$_POST['username']);
  	$password = mysqli_real_escape_string($con,$_POST['password']);
  	$sql = "SELECT `name`,`password` FROM `users` WHERE username = '$username'";
  	$result = mysqli_query($con,$sql);
  	$row    = mysqli_fetch_array($result);
  	$password1 = $row['password'];
  	$count = mysqli_num_rows($result);
  	if($count === 1)
  	{
      if(password_verify($password,$password1))
      {
        $_SESSION['user_login'] = $username;
      header("location:index3");
      }
      else{header("location:default");}
  		
  	}
  	else{

  		header("location:default");
  	}

  }

?>


