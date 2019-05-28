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
  $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $ErrorMsg = array();

  if(empty($username)){
        
        $ErrorMsg[] = "Input User Name :("; 
        
  }elseif(empty($password)){
        
        $ErrorMsg[] = "Input Password :(";
        
  }else{
        
        $stmnt = $conn->prepare("SELECT * FROM users WHERE username = :username and password = :password");
        $stmnt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmnt->bindParam(':password',$password,PDO::PARAM_STR);
        $stmnt->execute();
        $row   = $stmnt->fetch(PDO::FETCH_OBJ); 
        $count = $stmnt->rowCount();

        if ($count > 0) {
          
          $_SESSION['username'] = $row->username;
          $_SESSION['password'] = $row->password;
          header('refresh:5;create.php');
          $SuccessMsg = "Success You Will Be Redirected To The Page In 5 Seconds :)";

        } else{

          $ErrorMsg[] = "Sorry Username Not Found :(";

        }
        
  }

}

?>
<!DOCTYPE html>
<html>
  <head>

    <title>Login</title>
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

    <form id="loginform" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <fieldset>

        <h2 id="h">Login</h2>

        <hr>

        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="textinput-0">UserName :</label>
          <div class="controls">
            <input id="textinput-0" type="text" name="username" placeholder="User Name" class="input-xlarge">
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
            <button id="singlebutton-0" name="Login" class="btn btn-primary">Login</button>
            <a href="signup.php" name="Signup" class="btn btn-primary">Signup</a>
          </div>
        </div>

      </fieldset>
    </form>

  </body>
</html>