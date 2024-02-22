<?php 
    include 'config.php';
    if(isset($_REQUEST['child-category-btn'])){
        $child_category_name = $_REQUEST['child-category-name'];
        $parent_category_id = $_REQUEST['parent-category-id'];
        $query = "INSERT INTO child_category(name, parent_id)VALUES('$child_category_name', '$parent_category_id')";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: category-reports.php?added");
        }else{
            header("location: category-reports.php?add_failed");
        }
    }
?>