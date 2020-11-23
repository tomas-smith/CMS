<form action="" method="post"><!--edit form -->
  <div class="form-group">
      <label for="cat-title">Edit Category</label>
      <?php 
      
      if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $query = "SELECT * FROM category WHERE id = $edit_id ";
        $select_category_id = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_category_id)){
            $category_id = $row['id'];
            $category_title = $row['cat_title'];
            ?>
<input value="<?php if(isset($category_title)){echo $category_title;} ?>" type="text" class ="form-control" name="category_title">
  <?php  }}?>
  <?php //update
    if(isset($_POST['update'])){
      $update_request = $_POST['category_title'];
      $query ="UPDATE category SET cat_title = '{$update_request}' WHERE id = {$category_id} ";
      $update_query = mysqli_query($connection, $query);
        if(!$update_query){
      die("Query failed: ".mysqli_error($connection));
  }}?>
      
  </div>
  <div class="form-group">
      <input class="btn btn-primary" type="submit" name="update" value="update">
      
  </div>
</form>
</div>