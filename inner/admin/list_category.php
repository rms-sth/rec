<?php
$title = "List Category";
require_once "header.php";
require_once "class/category.class.php";
$category = new Category();
$catlist = $category->index();



?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List Category</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of All Category
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <?php
                            @session_start();
                            if(isset($_SESSION['success_message'])){
                                echo "<div class='alert alert-success'>" . $_SESSION['success_message']. "</div>";
                            }
                            unset($_SESSION['success_message']);

                            ?>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                        
                                       
                                    </tr>
                                </thead>
                          
                                <tbody>
                                    
                                    <?php
                                    $i = 1;
                                    //echo "<pre>";
                                    //print_r($catlist)
                                    foreach($catlist as $cat){
                                    ?>
                                    <tr class="odd gradeX">
                            
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $cat['cname']; ?></td>
                                        
                                        <td><a href="edit_category.php?id=<?php echo $cat['id'] ?> ">Edit</a> / <a href="delete_category.php?id=<?php echo $cat['id']?>" onclick="return confirm('Do you really want to delete this record?')">Delete</a></td>
                                        
                                    </tr>  
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

<?php require_once "footer.php"; ?>