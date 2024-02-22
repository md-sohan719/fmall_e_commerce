<?php 
    include 'config.php';
    if(isset($_REQUEST['add-main-category-btn'])){
        $category_name = $_REQUEST['main-category-name'];
        $query = "INSERT INTO main_category(name)VALUES('$category_name')";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: category-reports.php?added");
        }else{
            header("location: category-reports.php?add_failed");
        }
    }
?>