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
        <div class="col-md-8 ms-auto">
            <div class="col-md-12 d-flex">
                <h5 class="mt-5">All Deals</h5>
                <button type="button" class="btn btn-success ms-auto mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#add-deals-modal">Add Deals</button>
            </div>
            <table class="table table-bordered table-responsive text-center shadow">
                <thead class="table-primary">
                    <tr>
                        <th>S.N</th>
                        <th>Deals Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $deals_query = "SELECT * FROM deals";
                        $run_deals_query = mysqli_query($connection, $deals_query);
                        $serioul = 0;
                        if(mysqli_num_rows($run_deals_query)>0){
                            while ($deals_row = mysqli_fetch_assoc($run_deals_query)) {
                                $serioul++;
                                $deals_id = $deals_row['id'];
                                $deals_name = $deals_row['name']; ?>

                                <tr> 
                                    <td><?php echo $serioul;?></td>
                                    <td><?php echo $deals_name;?></td>
                                    <td><a class="btn btn-sm btn-danger" href="delete-core.php?deals_id=<?php echo $deals_id;?>"><i class="fa-solid fa-trash-can"></i></a></td>
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