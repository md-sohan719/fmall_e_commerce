<?php 
    include 'config.php';
    if(isset($_REQUEST['main_id'])){
        $main_category = $_REQUEST['main_id'];
        $query = "DELETE FROM main_category WHERE id='$main_category'";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: category-reports.php?deleted");
        }
    }
    // main category reports end here

    if(isset($_REQUEST['child_id'])){
        $child_category = $_REQUEST['child_id'];
        $query = "DELETE FROM child_category WHERE id='$child_category'";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: category-reports.php?deleted");
        }
    }
    //sub category reports end here

    if(isset($_REQUEST['deals_id'])){
        $deals = $_REQUEST['deals_id'];
        $query = "DELETE FROM deals WHERE id='$deals'";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: deals-reports.php?deleted");
        }
    }
?>