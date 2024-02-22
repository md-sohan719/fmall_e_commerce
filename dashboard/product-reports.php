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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 ms-auto">
            <div class="col-md-12 d-flex">
                <h5 class="mt-5">All Products</h5>
                <button type="button" class="btn btn-success ms-auto mt-5 mb-3" data-bs-toggle="modal" data-bs-target="#add-product-modal">Add Product</button>
            </div>
            <table class="table table-bordered table-responsive text-center shadow">
                <thead class="table-primary">
                    <tr>
                        <th>S.N</th>
                        <th>Product Title</th>
                        <th hidden>Product Description</th>
                        <th>Product Price</th>
                        <th>Main Category</th>
                        <th>Child Category</th>
                        <th>Product Deals</th>
                        <th hidden>Product Image</th>
                        <th>Post Date</th>
                        <th>Post Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $product_query = "SELECT * FROM product";
                        $run_product_query = mysqli_query($connection, $product_query);
                        $serioul = 0;
                        if(mysqli_num_rows($run_product_query)>0){
                            while ($product_row = mysqli_fetch_assoc($run_product_query)) {
                                $serioul++;
                                $product_id = $product_row['id'];
                                $product_title = $product_row['title']; 
                                $product_description = $product_row['description'];
                                $product_price = $product_row['price'];
                                $product_main_cat = $product_row['main_cat'];
                                $product_child_cat = $product_row['child_cat'];
                                $product_deals = $product_row['deals'];
                                $product_image = $product_row['image'];
                                $product_post_date = $product_row['date'];
                                $post_author = $product_row['author'];

                                $main_cat_query = "SELECT * FROM main_category WHERE id='$product_main_cat'";
                                $run_main_cat_query = mysqli_query($connection, $main_cat_query);
                                if($run_main_cat_query == true){
                                    while ($main_cat_row = mysqli_fetch_assoc($run_main_cat_query)) {
                                        $main_cat_name = $main_cat_row['name'];

                                        $child_cat_query = "SELECT * FROM child_category WHERE id='$product_child_cat'";
                                        $run_child_cat_query = mysqli_query($connection, $child_cat_query);
                                        if($run_child_cat_query == true){
                                            while ($child_cat_row = mysqli_fetch_assoc($run_child_cat_query)) {
                                                $child_cat_name = $child_cat_row['name'];

                                                $product_deals_query = "SELECT * FROM deals WHERE id='$product_deals'";
                                                $run_product_deals_query = mysqli_query($connection, $product_deals_query);
                                                if($run_product_deals_query == true){
                                                    while ($product_deals_row = mysqli_fetch_assoc($run_product_deals_query)) {
                                                        $product_deals_name = $product_deals_row['name'];
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>

                                <tr> 
                                    <td><?php echo $serioul;?></td>
                                    <td><?php echo $product_title;?></td>
                                    <td hidden><?php echo $product_description;?></td>
                                    <td><?php echo $product_price;?></td>
                                    <td><?php echo $main_cat_name;?></td>
                                    <td><?php echo $child_cat_name;?></td>
                                    <td><?php echo $product_deals_name;?></td>
                                    <td hidden><?php echo $product_image;?></td>
                                    <td><?php echo $product_post_date;?></td>
                                    <td><?php echo $post_author;?></td>
                                    <td><a class="btn btn-sm btn-success" href="edit-core.php?product_id=<?php echo $product_id;?>"><i class="fa-solid fa-pen-to-square"></i></a> <a class="btn btn-sm btn-danger" href="delete-core.php?product_id=<?php echo $product_id;?>"><i class="fa-solid fa-trash-can"></i></a></td>
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