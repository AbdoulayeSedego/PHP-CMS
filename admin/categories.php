<?php include("includes/admin_header.php");?>

   
   
    <div id="wrapper">
       
       
       
       
        <?php include("includes/admin_navigation.php");
        

        ?>

        
        <!-- Navigation -->
        
        
        
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        
                         <div class="col-xs-6">
                           
                           <?php  insert_categories(); ?>
                            <form action="" method="post">
                                <div class="form-group">
                                   <label for="cat_title">Add Category</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                 <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                            
                            <?php
                                if(isset($_GET['update_category'])){
                                    $cat_id = $_GET['update_category'];
                                    include("includes/update_categories.php");
                                }
                             ?>
                            
                        </div> <!-- Add category form-->
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                   <?php
                                        find_all_categories();
                                ?>
                                
                                <?php
                                        delete_categories();
                                ?>
                                
                                
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

   <?php include("includes/admin_footer.php");?>
   

        
        
        <?php
//            if(isset($_GET['update'])){
//                $cat_id = $_GET['update'];
//                $query = "UPDATE FROM categories WHERE cat_id={$cat_id} ";
//                $update = mysqli_query($connection,$query);
//                if(!$update){
//                    die("Update Query Failed ". mysqli_error($connection));
//                }
//            }
                        
        ?>
        