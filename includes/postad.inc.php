<?php

    // echo "yo";

    // include 'database.inc.php';

    // if(isset($_COOKIE['RegId'])){
    //     $mid = $_COOKIE['RegId'];
    // }else{
    //     $mid = $_COOKIE['Id'];
    // }
    // $sql = "INSERT INTO product (pname,category,pic,description,price,weight,mid,stat,dat,feature,location,delivery,currency,condi,pic2,pic3,pic4,pic5) VALUES (' ',' ',' ',' ',' ',' ','$mid','0',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ');";
    // $result = mysqli_query($conn,$sql);
    // setcookie('pId', mysqli_insert_id($conn), time() + (86400 * 30), "/");

    header('Location: ../dashboard_postad.php');
    die();


    // include 'database.inc.php';
    // $emailCookie = $_COOKIE["RegEmail"];
    // $query="select * from users where user_email='$emailCookie';";
    // $resultSet = mysqli_query($conn,$query);
    // $rowData = mysqli_fetch_assoc($resultSet);

    // $RegId = $rowData['user_id'];
    // echo $RegId;

    // $merchantId = $RegId;

    // $sql = "INSERT INTO product (pname,category,pic,description,price,weight,mid,stat,dat,feature,location,delivery,currency,condi,pic2,pic3,pic4,pic5) VALUES (' ',' ',' ',' ',' ',' ','$RegId','0',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ');";
    // $result = mysqli_query($conn,$sql);
    // $resultId = mysqli_insert_id($result);
    // echo $resultId;


//   if(isset($_POST['ad_draft'])){

//     }




//  if(!isset($_POST['ad_submit'])){
//         header('Location: ../index.php');
//         exit();
//     }
//     else{
//         include_once 'database.inc.php';
//         $emailCookie = $_COOKIE["RegEmail"];
//         $query="select * from users where user_email='$emailCookie';";
//         $resultSet = mysqli_query($conn,$query);
//         $rowData = mysqli_fetch_assoc($resultSet);

//         $RegId = $rowData['user_id'];
//         echo $RegId;


//         $productName = mysqli_real_escape_string($conn,$_POST['product_Name']);
//         $categories = mysqli_real_escape_string($conn,$_POST['categories']);
//         $description = mysqli_real_escape_string($conn,$_POST['description']);
//         $price = mysqli_real_escape_string($conn,$_POST['price']);
//         $currency = mysqli_real_escape_string($conn,$_POST['currency']);
//         $condition = mysqli_real_escape_string($conn,$_POST['condition']);
//         $delivery = mysqli_real_escape_string($conn,$_POST['delivery']);
//         $status = mysqli_real_escape_string($conn,$_POST['status']);
//         $weight = mysqli_real_escape_string($conn,$_POST['weight']);
//         $features = mysqli_real_escape_string($conn,$_POST['features']);
//         $phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
//         $location = mysqli_real_escape_string($conn,$_POST['location']);
//         $plan = mysqli_real_escape_string($conn,$_POST['plan']);
//         $date = time();
//         $merchantId = $RegId;

//         $name = $_FILES['images']['name'];
//         $target_dir = 'upload/';
//         $target_file = $target_dir.basename($_FILES['images']['name']);

//         $imagesFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
//         $extensions_arr = array('jpg','jpeg','png','gif');
       
//         if(in_array($imagesFileType,$extensions_arr)){
//             $sql = "INSERT INTO product (pname,category,pic,description,price,weight,mid,stat,dat,feature,location,delivery,currency,condi,pic2,pic3,pic4,pic5) VALUES ('$productName','$categories','$name','$description','$price','$weight','$merchantId','$status','$date','$features','$location','$delivery','$currency','$condition','$image','$image','$image','$image');";
//             mysqli_query($conn,$sql);
//             move_uploaded_file($_FILES['images']['tmp_name'],$target_dir.$name);

//             header("Location: ../dashboard.php?id=$merchantId");

//             exit();
//         }


      

       
       



//     }
?>