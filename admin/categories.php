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
                <div class="col-xs-6">
                    <?php insert_category();?>  
                        <form action="" method="post"> <!--add category form -->
                        <div class="form-group">
                            <label for="cat-title">Add Category</label>
                            <input type="text" class ="form-control" name="cat_title">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                             
                        </div>
                        </form>
                        
                        <?php //update /include query 
                        if(isset($_GET['edit'])){
                            $category_id = $_GET['edit'];
                            include "includes/update_categories.php";

                        }
                        ?>
                        <div class="col-xs-6"> <!--adding category form-->
               
                        <table class="table table-bordered table-hover"> 
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php find_all_category();?>
                            <?php delete_category(); //delete function?>    
                            </tbody>
                        </table>

                        
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/footer_admin.php"; ?>