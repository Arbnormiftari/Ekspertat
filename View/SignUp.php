
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../css/signup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

    <div id="logo"><a href="#">
        <img src="assets/img/code-school.png">
    </a></div>

  <div class="wrapper">
    <header>Sign Up</header>
    <form action="" method="post">
        
        <div class="field name">
            <div class="input-area">
              <input type="text" placeholder="Name" name="name"> 
              <i class="icon fas fa-envelope"></i>
              <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Name can't be blank</div>
          </div>

          <div class="field surname">
            <div class="input-area">
              <input type="text" placeholder="Surname" name="surname">
              <i class="icon fas fa-envelope"></i>
              <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Surname can't be blank</div>
          </div>

      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" name="email">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      
      
      <input type="submit" name="SignUpBtn" value="SignUp">
    </form>
    <?php include_once '../Controller/SignUpController.php'?>
  </div>
  <script src="validate.js"></script>
  
</body>

</html>

