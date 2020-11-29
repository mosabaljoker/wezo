<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $email = mysqli_real_escape_string($connection, $_POST['email']);
 $password = md5($_POST['password']);
 

 $sql = "INSERT INTO `login` (username, email, password) VALUES ('$username', '$email', '$password')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = "تم التسجيل بنجاح  " ;
 }else{
  $fmsg = "عذرا هذا الحساب مستخدم مسبقا";
 }
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
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <form class="form-signin" method="POST">
<!-- strat    ------>

<div class="input-group">
  <h2>شاشة  إنشاء حساب جديد </h2>
    <span class="input-group-addon" id="basic-addon1"><p>User Name :</p></span>
    <input type="text" name="username" class="form-control" placeholder="..............." required>
  </div>
        <label for="inputEmail" class="sr-only"><p>Email address</p></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="................." required autofocus>
        <label for="inputPassword" class="sr-only"><p>Password</p></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="************" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">تأكيد التسجيل </button>
       <a class="btn btn-lg btn-primary btn-block" href="login.php">  </a> 
               <button class="btn btn-lg btn-primary btn-block"><a href="login.php"> الدخول   </a></button>


<!-- end    --------->


<!--- start form 2 ---
<form>
<p>User Name</p>
<input type="text" name="" placeholder="user name ..">
<p>Email</p>
<input type="email" name="" placeholder="Enter Email">
<p>Password</p>
<input type="Password" name="" placeholder="********">
        <a class="btn btn-lg btn-primary btn-block" href="login.php">دخول</a>

<!--<input type="submit" name="" value="Sign In">-->
<!--<button><a href="templet1.html">Log In  </a></button> -->

</form>
<!-- end  form2 --->
</div>
</body>
</html>

