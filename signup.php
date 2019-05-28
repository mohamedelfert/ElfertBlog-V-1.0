<?php

session_start();

require 'connect.php';

if ( isset($_SESSION['username'])!="" ) {
    header("Location: create.php");
    exit;
} else if ( isset($_SESSION['admin'])!="" ) {
    header("Location: control.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
  $email    = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
  $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $ErrorMsg = array();

  if(empty($username)){
        
        $ErrorMsg[] = "Input User Name :("; 
        
  }elseif(empty($email)){
        
        $ErrorMsg[] = "Input Email :(";
        
  }elseif(empty($password)){
        
        $ErrorMsg[] = "Input Password :(";
        
  }else{
        
        $stmnt = $conn->prepare("INSERT INTO users (username,email,password) VALUE ('$username','$email','$password')");
        $stmnt->execute();
        $SuccessMsg = "Sign Up Successful :)";
        
  }

}

?>

<!DOCTYPE html>
<html>
  <head>

    <title>SignUP</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-rtl.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <!-- go to index.php -->
    <div class="container">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php">Home Page</a>
          </li>
        </ul>
    </div>

    <?php
    if(isset($ErrorMsg)){
      foreach($ErrorMsg as $error){
        echo' 
            <div class="alert alert-danger ltr">
                <span class="glyphicon glyphicon-info-sign"></span> <strong>'. $error . '</strong>
            </div>
          ';
      }
    }

    if(isset($SuccessMsg)){
    ?>
      <div class="alert alert-success ltr">
        <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $SuccessMsg; ?></strong>
      </div>
    <?php   
    }
    ?>

    <form id="signupform" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <fieldset>

        <h2 id="h">Register</h2>

        <hr>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput-0">UserName :</label>
          <div class="controls">
            <input id="textinput-0" type="text" name="username" placeholder="User Name" class="input-xlarge">
          </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput-1">Email :</label>
          <div class="controls">
            <input id="textinput-1" type="email" name="email" placeholder="Email" class="input-xlarge">
          </div>
        </div>

        <!-- Password input-->
        <div class="control-group">
          <label class="control-label" for="passwordinput-0">Password :</label>
          <div class="controls">
            <input id="passwordinput-0" type="password" name="password" placeholder="Password" class="input-xlarge">
          </div>
        </div>

        <!-- Button -->
        <div class="control-group">
          <label class="control-label" for="singlebutton-0"></label>
          <div class="controls">
            <button id="singlebutton-0" name="signup" class="btn btn-primary">Signup</button>
            <a href="login.php" name="login" class="btn btn-primary">Login</a>
            
          </div>
        </div>

      </fieldset>
    </form>

  </body>
</html>