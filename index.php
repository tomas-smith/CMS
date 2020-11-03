<!DOCTYPE html>
<html lang="en">
<?php include "includes/db.php";?>
<?php
include "includes/header.php";
?>

<body>

    <!-- Navigation -->
    <?php
    include "includes/nav.php";
    ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php
            $query = "SELECT * FROM posts";
            
                $select_post = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_post)){
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
            ?>        
              <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>



               <?php }?>
              
           
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php
        include "includes/sidebar.php";
        ?>   
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php
        include "includes/footer.php";
        ?>