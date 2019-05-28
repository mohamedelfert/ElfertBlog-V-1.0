<?php

session_start();

require 'connect.php';
require 'header.php';

if(isset($_SESSION['username'])){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
        $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
        $errorMsg = array();

        if(empty($title)){

            $errorMsg[] = "من فضلك أدخل عنوان :("; 

        }elseif(empty($subject)){

            $errorMsg[] = "من فضلك أدخل محتوي للتدوينه :(";

        }else{

            $date = date('Y-m-d');
            $stmnt = $conn->prepare("INSERT INTO posts (title,subject,created_at) VALUE ('$title','$subject','$date')");
            $stmnt->execute();
            $successMsg = "تم اضافه التدوينه بنجاح  :)";

        }

    }

    ?>

        <!-- Start container -->
        <div class="container">

            <!-- sign out container -->
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                       aria-expanded="false">
                      <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' &nbsp;
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                    </ul>
                  </li>
                </ul>
            </div>

            <h1>أدخل تدوينه / مقال جديد :</h1>

            <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <fieldset>

                    <?php
                    if(isset($errorMsg)){
                        foreach($errorMsg as $error){
                           echo' 
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span> <strong>'. $error . '</strong>
                                </div>
                            ';
                        }
                    }

                    if(isset($successMsg)){
                    ?>
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $successMsg; ?></strong>
                        </div>
                    <?php   
                    }
                    ?>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="textinput-0">العنوان </label>
                        <div class="controls">
                            <input id="textinput-0" type="text" name="title" placeholder="أدخل عنوان التدوينه" class="form-control">
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label" for="textarea-0">المقال / التدوينه</label>
                        <div class="controls">                     
                            <textarea id="textarea-0" class="form-control" rows="10" name="subject"></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="control-label" for="singlebutton-0"></label>
                        <div class="controls">
                            <button id="singlebutton-0" name="send" class="btn btn-lg btn-primary">ارسال</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        <!-- End container -->

    <?php
    require 'footer.php';

}else{

    echo "<h1 class='danger alert-danger text-center'> You Cant See This , You're Not User : <a href='login.php'>Login</a></h1>";

}
?>