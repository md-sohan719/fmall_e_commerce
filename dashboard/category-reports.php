<?php 
    include 'config.php';
    include 'header.php';
    include 'sidebar.php';
?>

<!-- ===== alert start here ===== -->
<div class="container">
    <div class="row">
        <div class="col-md-8 ms-auto mt-5">
        <!-- alert php start here -->
        <?php 
            if(isset($_REQUEST['deleted'])){ ?>
            <div class=" mt-5 alert alert-danger alert-dismissible fade show shadow" role="alert">
                Deleted Successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }elseif(isset($_REQUEST['added'])){ ?>
            <div class=" mt-5 alert alert-success alert-dismissible fade show shadow" role="alert">
                Added Successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <!-- alert php end here -->
        </div>
    </div>
</div>
<!-- ===== alert end here ===== -->

<div class="container">
    <div class="row">
        <div class="col-md-4 ms-auto">
            <h5 class="mt-5">Main Category</h5>
            <table class="table table-bordered table-responsive text-center shadow">
                <thead class="table-primary">
                    <tr>
                        <th>S.N</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $find_parent_query = "SELECT * FROM main_category";
                        $run_find_paren_query = mysqli_query($connection, $find_parent_query);
                        $serioul = 0;
                        if($run_find_paren_query == true){
                            while ($parent_info = mysqli_fetch_assoc($run_find_paren_query)) { 
                                $serioul++;
                                $main_category_name = $parent_info['name']; ?>

                                <tr> 
                                    <td><?php echo $serioul;?></td>
                                    <td><?php echo $main_category_name;?></td>
                                    <td><a class="btn btn-sm btn-danger" href="delete-core.php?main_id=<?php echo $parent_info['id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                </tr>
                                
                            <?php } } ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h5 class="mt-5">Sub Category</h5>
            <table class="table table-responsive table-bordered text-center shadow">
                <thead class="table-primary">
                    <tr>
                        <th>S.N</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $find_child_query = "SELECT * FROM child_category";
                        $run_find_paren_query = mysqli_query($connection, $find_child_query);
                        $serioul = 0;
                        if($run_find_paren_query == true){
                            while ($child_info = mysqli_fetch_assoc($run_find_paren_query)) { $serioul++; ?>

                    <tr>
                        <td><?php echo $serioul;?></td>
                        <td><?php echo $child_info['name'];?></td>
                        <td><a class="btn btn-sm btn-danger" href="delete-core.php?child_id=<?php echo $child_info['id'];?>"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                                
                            <?php }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php';?>