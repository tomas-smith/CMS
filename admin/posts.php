<!DOCTYPE html>
<html lang="en">

<?php include "includes/header_admin.php" ; ?>

<body>
<?php include "includes/nav_admin.php"; ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <?php
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else {
                    $source = "";
                }
                switch($source){
                    case 'add_posts';
                    include "includes/add_posts.php";
                    break;
                    case '';
                        echo "";
                    break;
                    case '';
                        echo "";
                    break;
                    default:
                    include "includes/view_all_posts.php";

                break;
                }


                ?>
                
  
           
            </div>
        </div>
        
    </div>
</div>
   <?php include "includes/footer_admin.php"; ?>