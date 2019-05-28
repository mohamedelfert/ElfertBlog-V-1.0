<?php
require 'connect.php';
require 'header.php';

@$stmnt = $conn->query("SELECT * FROM posts ORDER BY id DESC");
$count = $stmnt->rowCount();

if($count > 0){
    
    while($row = $stmnt->fetch(PDO::FETCH_OBJ)){
        ?>
            <!-- Start container -->
            <div id='height' class='container'>
                <a href='post.php?id=<?php echo $row->id; ?>'>
                    <h1><?php echo $row->title; ?></h1>
                </a>
                <p class='text-muted'><?php echo $row->created_at; ?></p>
                <p><?php echo $row->subject; ?></p>
            </div>
            <!-- End container -->
        <?php
    }

}else{
    
    echo '<h3 class="alert alert-success">لا يوجد أي محتوي في المدونه حاليا .</h3>';
    
}

require 'footer.php';
?>

