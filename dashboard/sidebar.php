<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
      <i class="fa-solid fa-list"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="category-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="" data-bs-toggle="modal" data-bs-target="#add-main-category-modal">
          <i class="bi bi-circle"></i><span>Add Main Category</span>
        </a>
      </li>
      <li>
        <a href="" data-bs-toggle="modal" data-bs-target="#add-child-category-modal">
          <i class="bi bi-circle"></i><span>Add Child Category</span>
        </a>
      </li>
    </ul>
  </li><!-- End category Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
      <i class="fa-solid fa-upload"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="product-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="" data-bs-toggle="modal" data-bs-target="#add-product-modal">
          <i class="bi bi-circle"></i><span>Uploade Product</span>
        </a>
      </li>
      <li>
        <a href="" data-bs-toggle="modal" data-bs-target="#add-deals-modal">
          <i class="bi bi-circle"></i><span>Add Product Deals</span>
        </a>
      </li>
    </ul>
  </li><!-- End product Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
    <i class="fa-solid fa-chart-line"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="category-reports.php">
          <i class="bi bi-circle"></i><span>Category Reports</span>
        </a>
      </li>
      <li>
        <a href="deals-reports.php">
          <i class="bi bi-circle"></i><span>Deals Reports</span>
        </a>
      </li>
      <li>
        <a href="product-reports.php">
          <i class="bi bi-circle"></i><span>Product Reports</span>
        </a>
      </li>
    </ul>
  </li><!-- End reports Nav -->

  <li class="nav-heading">Pages</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->



<!-- ====== modal start here ===== -->

  <!-- add main category modal start here -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="modal fade" id="add-main-category-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Main Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form action="main-category-core.php" method="post">
                  <input class="form-control" type="text" name="main-category-name" placeholder="Main Category Name" required>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input class="btn btn-danger" type="submit" name="add-main-category-btn" value="Add Category">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- add main category modal end here -->

  <!-- add sub category modal start here -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="modal fade" id="add-child-category-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Child Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form action="child-category-core.php" method="post">
                  <input class="form-control mb-3" type="text" name="child-category-name" placeholder="Child Category Name" required>
                  <select class="form-control" name="parent-category-id" id="" required>
                    <option value="">Select Parent Chategory</option>
                    <?php 
                      include 'config.php';
                      $parent_category_find_query = "SELECT * FROM main_category";
                      $parent_category_run_query = mysqli_query($connection, $parent_category_find_query);
                      if($parent_category_run_query == true){
                        while ($parent_category_info = mysqli_fetch_assoc($parent_category_run_query)) { ?>

                          <option value="<?php echo $parent_category_info['id'];?>"><?php echo $parent_category_info['name'];?></option>

                        <?php }
                      }
                    ?>
                  </select>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input class="btn btn-danger" type="submit" name="child-category-btn" value="Add Child Category">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- add sub category modal end here -->

  <!-- add product deals modal start here -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="modal fade" id="add-deals-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Product Deals</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form action="deals-core.php" method="post">
                  <input class="form-control" type="text" name="deals-name" placeholder="Products Deals Name" required>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input class="btn btn-danger" type="submit" name="deals-btn" value="Add Deals">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- add product deals modal end here -->

  <!-- products uploade modal start here -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="modal fade modal-lg" id="add-product-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form action="product-core.php" method="post" enctype="multipart/form-data">
                  <label class="form-label" for="product-title">Product Title</label>
                  <input class="form-control mb-3" type="text" id="product-title" name="title" placeholder="Products Title" required>
                  <label class="form-label" for="product-description">Product Descriptions</label>
                  <textarea class="form-control mb-3" name="description" id="product-description" rows="4" placeholder="Product Descriptions" required></textarea>
                  <label class="form-label" for="product-price">Product Price</label>
                  <input class="form-control mb-3" type="number" id="product-price" name="price" placeholder="Products Price" required>
                  <div class="row mb-3">
                    <div class="col-md-4">
                      <label class="form-label" for="main-catgory">Main Category</label>
                      <select class="form-control" name="main-category" id="main-category" required>
                        <option value="">Select Main Category</option>
                        <?php 
                          $main_cat_query = "SELECT * FROM main_category";
                          $run_main_cat_query = mysqli_query($connection, $main_cat_query);
                          if(mysqli_num_rows($run_main_cat_query)>0){
                            while ($main_row = mysqli_fetch_assoc($run_main_cat_query)) {
                              $main_cat_id = $main_row['id'];
                              $main_cat_name = $main_row['name']; ?>
                              <option value="<?php echo $main_cat_id;?>"><?php echo $main_cat_name;?></option>
                            <?php }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="child-catgory">Child Category</label>
                      <select class="form-control" name="child-category" id="child-category" required>
                        <option value="">Select Child Category</option>
                        <?php 
                          $child_cat_query = "SELECT * FROM child_category";
                          $run_child_cat_query = mysqli_query($connection, $child_cat_query);
                          if(mysqli_num_rows($run_child_cat_query)>0){
                            while ($child_row = mysqli_fetch_assoc($run_child_cat_query)) {
                              $child_cat_id = $child_row['id'];
                              $child_cat_name = $child_row['name']; ?>
                              <option value="<?php echo $child_cat_id;?>"><?php echo $child_cat_name;?></option>
                            <?php }
                          }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="product-deals">Product Deals</label>
                      <select class="form-control" name="deals" id="product-deals" required>
                        <option value="">Select Product Deals</option>
                        <?php 
                          $deals_query = "SELECT * FROM deals";
                          $run_deals_query = mysqli_query($connection, $deals_query);
                          if(mysqli_num_rows($run_deals_query)>0){
                            while ($deals_row = mysqli_fetch_assoc($run_deals_query)) {
                              $deals_id = $deals_row['id'];
                              $deals_name = $deals_row['name']; ?>
                              <option value="<?php echo $deals_id;?>"><?php echo $deals_name;?></option>
                            <?php }
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  <label class="form-label" for="product-image">Uploade Product Image</label>
                  <input class="form-control" type="file" name="product-image" id="product-image" required>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input class="btn btn-danger" type="submit" name="uploade-btn" value="Uploade Product">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- product uploade modal end here -->

  <!-- ====== modal end here ===== -->