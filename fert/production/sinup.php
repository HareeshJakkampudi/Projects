<?php
  include("db.php");
   if(isset($_POST['submit']))
  {
   $name = $_POST['user'];
   $username = $_POST['username'];
   $pass = mysqli_real_escape_string($con,$_POST['pass']);
   $op=['salt'=> base64_encode(bin2hex(random_bytes('32'))),'cost'=>12];
    $pas=password_hash($pass,PASSWORD_BCRYPT,$op);
   $reslut = mysqli_query($con,"INSERT INTO `users`(`name`,`username`,`password`) VALUES('$name','$username','$pas')");
   if($result){
   	         header("location:default");
   	
   } 
   else{header("location:default");}
  }
?>