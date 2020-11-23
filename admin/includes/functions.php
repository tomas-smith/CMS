<?php 
function insert_category (){
    global $connection;
     //inserting category to database
    if(isset($_POST['submit'])){
                                
        $cat_title = $_POST["cat_title"];
        if($cat_title == "" || empty($cat_title)){
            echo "This Field should not be empty";
                }else {
                    $query = "INSERT INTO category(cat_title) ";
                    $query .= "VALUES('{$cat_title}') ";
                    $create_cat_query =mysqli_query($connection, $query);
                    if(!$create_cat_query){
                        die("QUERY FAILED" .mysqli_error($connection));
                            }
                        }
    }
}
function find_all_category(){//all categories query
    global $connection;
    $query = "SELECT * FROM category ";
    $select_category = mysqli_query($connection, $query);
         while($row = mysqli_fetch_assoc($select_category)){
            $category_id = $row['id'];
            $category_title = $row['cat_title'];
            echo "<tr>";
            echo "<td>{$category_id}</td>";
            echo "<td>{$category_title}</td>";
            echo "<td><a href='categories.php?delete={$category_id}'>Delete</a></td>";
            echo "<td><a href='categories.php?edit={$category_id}'>edit</a></td>";
            echo "</tr>"; }

    
}
function delete_category(){
    global $connection;
    if(isset($_GET['delete'])){

        $delete_request = $_GET['delete'];
        $query ="DELETE FROM category WHERE id = {$delete_request} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories.php");}
}

?>