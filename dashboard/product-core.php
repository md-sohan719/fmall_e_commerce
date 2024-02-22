<?php 
    include 'config.php';
    if(isset($_REQUEST['uploade-btn'])){
        $error = array();
        $file = $_FILES['product-image'];

        $file_name = $file['name'];
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
        $file_type = $file['type'];
        $file_ext = end(explode('.', $file_name));

        $extensions = array("jpeg", "jpg", "png");
        
        if(in_array($file_ext,$extensions) === false){
            $error[] = "This extension file not allowed, Please chose a JPG or PNG file";
        }

        if($file_size > 2097152){
            $error[] = "File size must be 2mb or lower";
        }
        $new_name = time()."-".basename($file_name);
        $target = "image/".$new_name;

        if(empty($error) == true){
            move_uploaded_file($file_tmp,$target);
        }else{
            print_r($error);
            die();
        }
        
        $title = mysqli_real_escape_string($connection, $_REQUEST['title']);
        $description = mysqli_real_escape_string($connection, $_REQUEST['description']);
        $price = mysqli_real_escape_string($connection, $_REQUEST['price']);
        $main_cat = mysqli_real_escape_string($connection, $_REQUEST['main-category']);
        $child_cat = mysqli_real_escape_string($connection, $_REQUEST['child-category']);
        $deals = mysqli_real_escape_string($connection, $_REQUEST['deals']);
        $date = date("d M Y");
        $author = "A-M-M";

        $query = "INSERT INTO product(title, description, price, main_cat, child_cat, deals, image, date, author)VALUES('$title', '$description', '$price', '$main_cat', '$child_cat', '$deals', '$new_name', '$date', '$author');";
        $query .= "UPDATE main_category SET post = post + 1 WHERE id ='$main_cat';";
        $query .= "UPDATE child_category SET post = post + 1 WHERE id ='$child_cat'";

        if(mysqli_multi_query($connection, $query)){
            header("location: index.php");
        }else{
            echo "query failed";
        }
    }
?>