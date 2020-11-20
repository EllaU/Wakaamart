<?php


    $fullUrl ="$_SERVER[QUERY_STRING]";

    parse_str($fullUrl);
    // echo $fullUrl;
    $Id = $id;

    include 'database.inc.php';
    $sql="select * from product where id='$Id';";
    $result = mysqli_query($conn,$sql);

    if(isset($_POST['submit'])){
        // header("Location: ../includes/edit.inc.php?id=$Id");
        include_once 'database.inc.php';

        $productName = mysqli_real_escape_string($conn,$_POST['product_Name']);
        $categories = mysqli_real_escape_string($conn,$_POST['categories']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $currency = mysqli_real_escape_string($conn,$_POST['currency']);
        $condition = mysqli_real_escape_string($conn,$_POST['condition']);
        $delivery = mysqli_real_escape_string($conn,$_POST['delivery']);
        $status = mysqli_real_escape_string($conn,$_POST['status']);
        $weight = mysqli_real_escape_string($conn,$_POST['weight']);
        $features = mysqli_real_escape_string($conn,$_POST['features']);
        $image = mysqli_real_escape_string($conn,$_POST['images']);

        // $phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
        $location = mysqli_real_escape_string($conn,$_POST['location']);
        $plan = mysqli_real_escape_string($conn,$_POST['plan']);
        $date = time();
        $merchantId = $_SESSION['Id'];

        $name = $_FILES['images']['name'];
        $target_dir = 'upload/';
        $target_file = $target_dir.basename($_FILES['images']['name']);

        $imagesFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // echo $target_dir;
        // exit();
        // if(move_uploaded_file($_FILES['images']['tmp_name'],$target_dir.$name)){
        //     echo "yes";
        // }else{
        //     echo "no";
        // }
        // exit();
        // Valid file extensions
        $extensions_arr = array('jpg','jpeg','png','gif');
       
        if(in_array($imagesFileType,$extensions_arr)){
            $sql = "UPDATE product SET
            pname='$productName',
            category='$categories',
            description='$description',
            price='$price',
            currency='$currency',
            condi='$condition',
            delivery='$delivery',
            stat='$status',
            weight='$weight',
            feature='$features',
            pic='$name',
            location='$location'

            WHERE id=$Id ;
            ";
           
            $result=mysqli_query($conn,$sql);
            move_uploaded_file($_FILES['images']['tmp_name'],$target_dir.$name);

            header("Location: ../dashboard.php?id=$merchantId");

            exit();
        }
        // echo $productName;
 
        // echo mysqli_affected_rows($conn);
        
        // exit();
        // exit();
       



    }
?>