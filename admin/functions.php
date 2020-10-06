
<?php

function confirmQuery($result){
    global $connection;
    if(!$result){
        die("QUERRY FAILED ". mysqli_error($connection));
    }
}

function insert_categories(){
    global $connection;
          if(isset($_POST['submit'])){
                                 
             $cat_title = $_POST['cat_title'];

             if($cat_title == "" || empty($cat_title)){

                 echo "This field Can't be empty";
             }
             else{
                 $query = "INSERT INTO categories(cat_title) ";
                 $query .= "VALUE('{$cat_title}') ";

                 $create_category_query = mysqli_query($connection, $query);
                 header("Location: categories.php");
                 if(!$create_category_query){
                     die("Query Failed ". mysqli_error($connection));
                 }
             }
         }
}

function find_all_categories(){
    // FIND ALL CATEGORIES QUERY
    global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_categories)){

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?update_category={$cat_id}'>Update</a></td>";
        echo "</tr>";
    }
}

function delete_categories(){
    global $connection;
    
   // DELETE QUERY

  if(isset($_GET['delete'])){

      $cat_id = $_GET['delete'];
      $query = "DELETE FROM categories WHERE cat_id={$cat_id} ";
      $delete = mysqli_query($connection, $query);
      header("Location: categories.php");
      if(!$delete){
          die("Delete Query Failed ". mysqli_error($connection));
      }
  }  
                                    
}















?>