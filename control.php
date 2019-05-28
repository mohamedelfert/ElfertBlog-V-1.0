<?php

session_start();

if ( isset($_SESSION['username'])!="" ) {
    header("Location: create.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Control</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            #page{
                margin:40px 80px;
            }
            .table{
                margin-top: 15px;
            }
            #htr{
                font-family: courier;
                font-size: 20px;
                font-weight: bold;
            }
            .footer{
                direction: rtl;
                text-align: center;
            }
            .rtl{
                direction: rtl;
            }
        </style>
    </head>
    <body>
        <div id="page">
            <!-- Navbar -->
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="control.php">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Control</a>
                </li>
                <li role="presentation"><a href="logout.php?adminlogout">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sign Out</a>
                </li>
            </ul>

            <?php

            error_reporting("E_ALL &~ E_NOTIC");
            require 'connect.php';

            if ($_GET['box'] == 'edite') {

                $id = intval($_GET['id']);
                $stmnt = $conn->query("SELECT * FROM posts WHERE id = '$id'");
                $row = $stmnt->fetch(PDO::FETCH_OBJ);

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $title = filter_var($_POST['title'] , FILTER_SANITIZE_STRING);
                    $subject = filter_var($_POST['subject'] , FILTER_SANITIZE_STRING);

                    $stmnt = $conn->prepare("UPDATE posts SET title = :title , subject = :subject WHERE id = :id");
                    $stmnt->bindParam(':title',$title,PDO::PARAM_STR);
                    $stmnt->bindParam(':subject',$subject,PDO::PARAM_STR);
                    $stmnt->bindParam(':id',$id,PDO::PARAM_INT);
                    $stmnt->execute();
                    header("Location: control.php");

                }

            ?>
                
            <form class="form-horizontal rtl" action="" method="POST">

                <!-- Text input-->
                <div class="form-group">
                    <label class="control-label" for="textinput-0">العنوان </label>
                    <div class="controls">
                        <input id="textinput-0" type="text" name="title" value="<?php echo $row->title; ?>"
                               placeholder="أدخل عنوان التدوينه" class="form-control">
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="control-label" for="textarea-0">المقال / التدوينه</label>
                    <div class="controls">                     
                        <textarea id="textarea-0" class="form-control" rows="10" name="subject">
                            <?php echo $row->subject; ?>
                        </textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="control-label" for="singlebutton-0"></label>
                    <div class="controls">
                        <button id="singlebutton-0" name="edite" class="btn btn-lg btn-primary">تعديل</button>
                    </div>
                </div>

            </form>

            <?php

            }elseif ($_GET['box'] == 'delete') {

                $id = intval($_GET['id']);
                $stmnt = $conn->query("DELETE FROM posts WHERE id = '$id'");
                header("Location: control.php");

            }else{

                $stmnt = $conn->query("SELECT * FROM posts ORDER BY id DESC");
                $count = $stmnt->rowCount();
                if ($count > 0) {

                ?>

                <!-- Tabel -->
                <table class="table table-hover">

                  <tr id="htr">
                    <td>ID</td>
                    <td>Title</td>
                    <td>Subject</td>
                    <td>Date</td>   
                    <td>Edit & Delete</td>      
                  </tr>

                  <?php
                  while ($row=$stmnt->fetch(PDO::FETCH_OBJ)) {
                        echo"
                            <tr>
                                <td>$row->id</td>
                                <td>$row->title</td>
                                <td>$row->subject</td>
                                <td>$row->created_at</td>  
                                <td>
                                    <a href='control.php?box=edite&id={$row->id}'><span class='glyphicon glyphicon-cog' 
                                       aria-hidden='true'> </a> &
                                    <a href='control.php?box=delete&id={$row->id}'><span class='glyphicon glyphicon-remove-circle' 
                                       aria-hidden='true'></span></a>
                                </td>      
                            </tr>
                        ";
                  }
                  ?>
                  
                </table>

                <?php
                }else{

                    echo '<h3 class="alert alert-success">لا يوجد أي محتوي .</h3>';

                }
            }
            ?>

            <!-- Start footer -->
            <div class="alert alert-info footer">
                <strong>جميع الحقوق محفوظه &copy;  2017 Mohamed Elfert  &trade;</strong>
            </div>
            <!-- End footer -->
        </div>

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>