<?php
require 'connect.php';
require 'header.php';

$id = $_GET['id'];

if(isset($id)){
    
    $stmnt = $conn->query("SELECT * FROM posts WHERE id = '$id'");
    $row = $stmnt->fetch(PDO::FETCH_OBJ);
    $count = $stmnt->rowCount();

    if($count > 0){
        ?>
            <!-- Start container -->
            <div class='container'>
                <h1><?php echo $row->title ?></h1>
                <p class='text-muted'><?php echo $row->created_at ?></p>
                <p><?php echo $row->subject ?></p>
            </div>
            <!-- End container -->
        <?php
    }else{

        echo '<h3 class="alert alert-success">لا يوجد أي محتوي .</h3>';

    }
    
}

require 'footer.php';
?>

