<?php 
    include 'config.php';
    if(isset($_REQUEST['deals-btn'])){
        $deals_name = $_REQUEST['deals-name'];
        $query = "INSERT INTO deals(name)VALUES('$deals_name')";
        $run_query = mysqli_query($connection, $query);
        if($run_query == true){
            header("location: deals-reports.php?added");
        }else{
            echo "Deals Add Failed!";
        }
    }
?>