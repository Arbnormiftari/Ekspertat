<?php

session_start();

if(isset($_SESSION['Email'])){
  header("location:Account.php");
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>


    <div id="logo"><a href="#">
        <img src="assets/img/code-school.png">
    </a></div>

  <div class="wrapper">
    <header>Login</header>
       <form  method="POST">
      
        
        
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" id="email" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" id="password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" name="LogInBtn" value="Login">
    
    </form>
    <?php include_once '../Controller/LogInController.php'?>
    <div class="sign-txt">Not yet member? <a href="signup.php">Signup now</a></div>
  </div>
  <script src="validate.js"></script>

  

</body>
</html>
<?php
  }
?>