<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $password = ($_POST['password']);

 $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
  $_SESSION['username'] = $username;
 }else{

  $fmsg = "<div class='fmsg fmg'>تم ضبط محاولة دخول فاشلة وغير مصرح بها </div>";

  
 }
}
if(isset($_SESSION['$username'])){
 $smsg = "<div class='smsg'>دخول ناجح</div>";
 echo "
 <meta HTTP-EQUIV='REFRESH' content='16666666; url=login/welcome.php'/>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MyWebsite</title>
<link rel="stylesheet" href="css/from.css">
</head>
<body>
<div class="loginbox">
<h2>شاشة الدخول </h2>
<form>
<p>user name</p>
<input type="text" name="" placeholder="................">
<p>Password</p>
<input type="password" name="" placeholder="*******">
<!--<input type="submit" name="" value="Sign In">-->
<!-- <button><a href="templet1.html">Log In  </a></button> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit"><a href="web app_program/home.html">الدخول</a> </button>
                <button class="btn btn-lg btn-primary btn-block" type="submit"> <a href="regest.php"> تسجيل جديد </a> </button>



</form>
</div>
</body>
</html>





