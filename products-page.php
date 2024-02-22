<!DOCTYPE html>
<html class="no-js" lang="en">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$main_category_result = $conn->query("SELECT * FROM main_category");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Fusion Sports - eCommerce Shop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fsicon-01.svg" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    info@website.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    0123456789
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="my-account.php">my account</a>
                                                    <a class="dropdown-item" href="login-register.php"> login</a>
                                                    <a class="dropdown-item" href="login-register.php">register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">my wishlist</a>
                                        </li>
                                        <li>
                                            <a href="#">my cart</a>
                                        </li>
                                        <li>
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo-red.svg" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Working time</h5>
                                            <span>Mon- Sun: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>free shipping</h5>
                                            <span>On order over $199</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>money back 100%</h5>
                                            <span>Within 30 Days after delivery</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>total</span>
                                            $50.00
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.php"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.php">simple product 09</a></h4>
                                                    <span>$60.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.php"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.php">virtual product 10</a></h4>
                                                    <span>$50.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">subtotal : </span>
                                                <span class="subtotal-price">$88.66</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="#">checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        category
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu">
                                        <ul>
                                            <?php

                                            if ($main_category_result->num_rows > 0) {
                                                // Fetch each row as an associative array
                                                while ($main_category = $main_category_result->fetch_assoc()) {
                                            ?>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.php"><?= $main_category['name']; ?></a>
                                                        <!-- Mega Category Menu Start -->
                                                        <?php
                                                        $main_category_id = $main_category['id'];
                                                        $sub_category_result = $conn->query("SELECT * FROM child_category WHERE parent_id = $main_category_id");
                                                        ?>
                                                        <ul class="category-mega-menu">
                                                            <?php
                                                            if ($sub_category_result->num_rows > 0) {
                                                                // Fetch each row as an associative array
                                                                while ($sub_category = $sub_category_result->fetch_assoc()) {
                                                            ?>
                                                                    <li class="menu-item-has-children">
                                                                        <a href="shop-grid-left-sidebar.php"><?= $sub_category['name']; ?></a>
                                                                <?php }
                                                            } ?>
                                                                <!-- <ul>
                                                                    <li><a href="shop-grid-left-sidebar.php">Samsome</a></li>
                                                                    <li><a href="shop-grid-left-sidebar.php">GL Stylus</a></li>
                                                                    <li><a href="shop-grid-left-sidebar.php">Uawei</a></li>
                                                                    <li><a href="shop-grid-left-sidebar.php">Cherry Berry</a></li>
                                                                </ul> -->
                                                                    </li>
                                                        </ul><!-- Mega Category Menu End -->
                                                    </li>
                                            <?php }
                                            } ?>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a>
                                            </li>
                                            <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.php">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar.php">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-full-3-col.php">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.php">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="product-details.php">product details</a></li>
                                                            <li><a href="product-details-affiliate.php">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.php">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.php">product details
                                                                    group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="cart.php">cart</a></li>
                                                            <li><a href="checkout.php">checkout</a></li>
                                                            <li><a href="compare.php">compare</a></li>
                                                            <li><a href="wishlist.php">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="my-account.php">my-account</a></li>
                                                            <li><a href="login-register.php">login-register</a></li>
                                                            <li><a href="about-us.php">about us</a></li>
                                                            <li><a href="contact-us.php">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="products-page.php">Our All Products <i class="fa fa-angle-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-left-sidebar.php">blog left sidebar</a></li>
                                                    <li><a href="blog-left-sidebar-2-col.php">blog left sidebar 2 col</a></li>
                                                    <li><a href="blog-right-sidebar.php">blog right sidebar</a></li>
                                                    <li><a href="blog-full-2-column.php">blog full 2 column</a></li>
                                                    <li><a href="blog-full-3-column.php">blog full 3 column</a></li>
                                                    <li><a href="blog-details.php">blog details</a></li>
                                                    <li><a href="blog-details-audio.php">blog details audio</a></li>
                                                    <li><a href="blog-details-video.php">blog details video</a></li>
                                                    <li><a href="blog-details-image.php">blog details image</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.php">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->
        <!-- header area end -->

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products Page</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page wrapper start -->
        <div class="page-main-wrapper">
            <div class="container">
                <div class="row">
                    <!-- sidebar start -->
                    <div class="col-lg-3 order-2">
                        <div class="shop-sidebar-wrap mt-md-28 mt-sm-28">
                            <!-- sidebar categorie start -->
                            <div class="sidebar-widget mb-30">
                                <div class="sidebar-category">
                                    <ul>
                                        <li class="title"><i class="fa fa-bars"></i> Categoys</li>
                                        <?php
                                        $sub_cat_query = "SELECT * FROM child_category";
                                        $run_sub_cat = mysqli_query($conn, $sub_cat_query);
                                        if ($run_sub_cat == true) {
                                            while ($sub_row = mysqli_fetch_assoc($run_sub_cat)) {
                                                $sub_cat_name = $sub_row['name'];
                                                $sub_post = $sub_row['post']; ?>
                                                <li><a href="#"><?php echo $sub_cat_name; ?></a><span>(<?php echo $sub_post; ?>)</span></li>
                                        <?php }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- sidebar categorie start -->

                            <!-- manufacturer start -->
                            <div class="sidebar-widget mb-30">
                                <div class="sidebar-title mb-10">
                                    <h3>Manufacturers</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i><a href="#">calvin klein</a><span>(10)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">diesel</a><span>(12)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">polo</a><span>(20)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Tommy Hilfiger</a><span>(12)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Versace</a><span>(16)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- manufacturer end -->

                            <!-- pricing filter start -->
                            <div class="sidebar-widget mb-30">
                                <div class="sidebar-title mb-10">
                                    <h3>filter by price</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <div class="price-range-wrap">
                                        <div class="price-range" data-min="50" data-max="400"></div>
                                        <div class="range-slider">
                                            <form action="#" class="d-flex justify-content-between">
                                                <button class="filter-btn">filter</button>
                                                <div class="price-input d-flex align-items-center">
                                                    <label for="amount">Price: </label>
                                                    <input type="text" id="amount">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- pricing filter end -->

                            <!-- product size start -->
                            <div class="sidebar-widget mb-30">
                                <div class="sidebar-title mb-10">
                                    <h3>size</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right"></i><a href="#">s</a><span>(10)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">m</a><span>(12)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">l</a><span>(20)</span></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">XL</a><span>(12)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- product size end -->

                            <!-- product tag start -->
                            <div class="sidebar-widget mb-30">
                                <div class="sidebar-title mb-10">
                                    <h3>tags</h3>
                                </div>
                                <div class="sidebar-widget-body">
                                    <div class="product-tag">
                                        <?php
                                        $tag_query = "SELECT * FROM main_category";
                                        $run_tag_query = mysqli_query($conn, $tag_query);
                                        if ($run_tag_query == true) {
                                            while ($tag_row = mysqli_fetch_assoc($run_tag_query)) {
                                                $tag_name = $tag_row['name']; ?>
                                                <a href="#"><?php echo $tag_name; ?></a>
                                        <?php }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- product tag end -->

                            <!-- sidebar banner start -->
                            <div class="sidebar-widget mb-30">
                                <div class="img-container fix img-full">
                                    <a href="#"><img src="assets/img/banner/banner_shop.jpg" alt=""></a>
                                </div>
                            </div>
                            <!-- sidebar banner end -->
                        </div>
                    </div>
                    <!-- sidebar end -->

                    <!-- product main wrap start -->
                    <div class="col-lg-9 order-1">
                        <div class="shop-banner img-full">
                            <img src="assets/img/banner/banner_static1.jpg" alt="">
                        </div>
                        <!-- product view wrapper area start -->
                        <div class="shop-product-wrapper pt-34">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode mr-70 mr-sm-0">
                                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–16 of 21 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" name="sortby">
                                                    <option value="trending">Relevance</option>
                                                    <option value="sales">Name (A - Z)</option>
                                                    <option value="sales">Name (Z - A)</option>
                                                    <option value="rating">Price (Low &gt; High)</option>
                                                    <option value="date">Rating (Lowest)</option>
                                                    <option value="price-asc">Model (A - Z)</option>
                                                    <option value="price-asc">Model (Z - A)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item start -->
                            <div class="shop-product-wrap grid row">
                                <?php
                                $find_product_query = "SELECT * FROM product ORDER BY id DESC";
                                $run_find_product_query = mysqli_query($conn, $find_product_query);
                                if ($run_find_product_query == true) {
                                    while ($product_row = mysqli_fetch_assoc($run_find_product_query)) {
                                        $product_img = $product_row['image'];
                                        $product_title = $product_row['title'];
                                        $product_id = $product_row['id'];
                                        $product_price = $product_row['price'];
                                        $product_description = $product_row['description']; ?>

                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <!-- product single grid item start -->
                                            <div class="product-item fix mb-30">
                                                <div class="product-thumb">
                                                    <a href="product-details.php?id=<?php echo $product_id; ?>">
                                                        <img src="dashboard/image/<?php echo $product_img; ?>" class="img-pri" alt="">
                                                        <!-- <img src="assets/img/product/product-img2.jpg" class="img-sec" alt=""> -->
                                                    </a>
                                                    <!-- <div class="product-label">
                                                <span>hot</span>
                                            </div> -->
                                                    <div class="product-action-link">
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h4><a href="product-details.php?id=<?php echo $product_id; ?>"><?php echo $product_title; ?></a></h4>
                                                    <div class="pricebox">
                                                        <span class="regular-price"><?php echo $product_price; ?> BDT</span>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- product single grid item end -->
                                            <!-- product single list item start -->
                                            <div class="product-list-item mb-30">
                                                <div class="product-thumb">
                                                    <a href="product-details.php?id=<?php echo $product_id; ?>">
                                                        <img src="dashboard/image/<?php echo $product_img; ?>" class="img-pri" alt="">
                                                        <!-- <img src="assets/img/product/product-img2.jpg" class="img-sec" alt=""> -->
                                                    </a>
                                                    <!-- <div class="product-label">
                                                <span>hot</span>
                                            </div> -->
                                                </div>
                                                <div class="product-list-content">
                                                    <h3><a href="product-details.php?id=<?php echo $product_id; ?>"><?php echo $product_title; ?></a></h3>
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <div class="pro-review">
                                                            <span>1 review(s)</span>
                                                        </div>
                                                    </div>
                                                    <div class="pricebox">
                                                        <span class="regular-price"><?php echo $product_price; ?> BDT</span>
                                                        <!-- <span class="old-price"><del>$90.00</del></span> -->
                                                    </div>
                                                    <p><?php echo $product_description; ?></p>
                                                    <div class="product-list-action-link">
                                                        <a class="buy-btn" href="#" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product single list item start -->
                                        </div> <!-- product single column end -->
                                <?php }
                                } ?>
                            </div>
                            <!-- product item end -->
                        </div>
                        <!-- product view wrapper area end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center pt-28">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="Next" href="#"> Next </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end pagination area -->

                    </div>
                    <!-- product main wrap end -->
                </div>
            </div>
        </div>
        <!-- page wrapper end -->

        <!-- brand area start -->
        <div class="brand-area pt-4 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Popular Brand</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br1.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br2.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br3.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br5.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br6.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- footer area start -->
        <!-- footer area start -->
        <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>sign up for newsletter</h3>
                                    <p>Duis autem vel eum iriureDuis autem vel eum</p>
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">subscribe!</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa-brands fa-square-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa-brands fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>contact us</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address: 1234 - Bandit Tringi Aliquam
                                            Vitae. New York</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">open in google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">my cart</a></li>
                                        <li><a href="#">checkout</a></li>
                                        <li><a href="#">my wishlist</a></li>
                                        <li><a href="#">login</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>short code</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">gallery</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">carousel</a></li>
                                        <li><a href="#">map</a></li>
                                        <li><a href="#">tab</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>product tags</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">computer</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">smart phone</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">tablet</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a target="_blank" href="http://jobland.unaux.com/?i=1">&copy;Copyright By Adnan Mahmud Masud</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="assets/js/switcher.js"></script>
</body>



</html>