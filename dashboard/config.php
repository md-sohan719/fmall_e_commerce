<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'fmall');
    if(!$connection){
        die("database not connection".mysqli_error());
    }
?>