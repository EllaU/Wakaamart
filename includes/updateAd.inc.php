<?php
    session_start();
    include 'database.inc.php';
    $fullUrl ="$_SERVER[QUERY_STRING]";

    parse_str($fullUrl);
    //  echo $fullUrl;
    $getId = $fullUrl;

    $productName = mysqli_escape_string($conn,$_POST['product_Name']);
    $categories = mysqli_escape_string($conn,$_POST['categories']);
    $description = mysqli_escape_string($conn,$_POST['description']);
    $price = mysqli_escape_string($conn,$_POST['price']);
    $currency = mysqli_escape_string($conn,$_POST['currency']);
    $condition = mysqli_escape_string($conn,$_POST['condition']);
    $weight = mysqli_escape_string($conn,$_POST['weight']);
    $features = mysqli_escape_string($conn,$_POST['features']);
    $location = mysqli_escape_string($conn,$_POST['location']);
    $delivery = mysqli_escape_string($conn,$_POST['delivery']);
    $date = time();

    echo $productName;

    if(isset($_SESSION['RegId'])){
        $mid = $_SESSION['RegId'];
    }else{
        $mid = $_SESSION['LogId'];
    }

    if(isset($_POST['ad_draft'])){
        include 'database.inc.php';

        
         // File upload configuration 
        $targetDir = "upload/"; 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            $count = 1;

                foreach($_FILES['files']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]); 
                    $targetFilePath = $targetDir . $fileName; 
                    
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            if($count == 1){
                                $sql = "UPDATE product SET
                                pname='$productName',
                                category='$categories',
                                pic='$fileName',
                                description='$description',
                                price='$price',
                                currency='$currency',
                                condi='$condition',
                                delivery='$delivery',
                                mid='$mid',
                                stat='0',
                                dat='$date',
                                weight='$weight',
                                feature='$features',
                                location='$location'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                                
                            }elseif($count == 2){
                                echo $count;
                                $sql = "UPDATE product SET
                                pic2='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 3 ){
                                $sql = "UPDATE product SET
                                pic3='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 4){
                                $sql = "UPDATE product SET
                                pic4='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 5){
                                $sql = "UPDATE product SET
                                pic5='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;

                            
                            }
                            

                        }else{ 
                            $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }  
            }else{ 
                $statusMsg = 'Please select a file to upload.'; 
            } 

       header('Location: ../dashboard.php');
       exit();
    }

    if(isset($_POST['ad_submit'])){
        
        include 'database.inc.php';

        
         // File upload configuration 
        $targetDir = "upload/"; 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            $count = 1;

                foreach($_FILES['files']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]); 
                    $targetFilePath = $targetDir . $fileName; 
                    
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            if($count == 1){
                                $sql = "UPDATE product SET
                                pname='$productName',
                                category='$categories',
                                pic='$fileName',
                                description='$description',
                                price='$price',
                                currency='$currency',
                                condi='$condition',
                                delivery='$delivery',
                                mid='$mid',
                                stat='1',
                                dat='$date',
                                weight='$weight',
                                feature='$features',
                                location='$location'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                                
                            }elseif($count == 2){
                                echo $count;
                                $sql = "UPDATE product SET
                                pic2='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 3 ){
                                $sql = "UPDATE product SET
                                pic3='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 4){
                                $sql = "UPDATE product SET
                                pic4='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 5){
                                $sql = "UPDATE product SET
                                pic5='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;

                            
                            }
                            

                        }else{ 
                            $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }  
            }else{ 
                $statusMsg = 'Please select a file to upload.'; 
            } 

       header('Location: ../dashboard.php');
       exit();
    }

    if(isset($_POST['ad_editSubmit'])){
        
        include 'database.inc.php';

        $sql = "UPDATE product SET
        pname='$productName',
        category='$categories',
        description='$description',
        price='$price',
        currency='$currency',
        condi='$condition',
        delivery='$delivery',
        mid='$mid',
        stat='1',
        dat='$date',
        weight='$weight',
        feature='$features',
        location='$location'

        WHERE id=$getId;
        ";
        mysqli_query($conn,$sql);

        
         // File upload configuration 
        $targetDir = "upload/"; 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            $count = 1;

                foreach($_FILES['files']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]); 
                    $targetFilePath = $targetDir . $fileName; 
                    
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            if($count == 1){
                                $sql = "UPDATE product SET
                                pic='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                                
                            }elseif($count == 2){
                                echo $count;
                                $sql = "UPDATE product SET
                                pic2='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 3 ){
                                $sql = "UPDATE product SET
                                pic3='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 4){
                                $sql = "UPDATE product SET
                                pic4='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 5){
                                $sql = "UPDATE product SET
                                pic5='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;

                            
                            }
                            

                        }else{ 
                            $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }  
            }else{ 
                $statusMsg = 'Please select a file to upload.'; 
            } 

       header('Location: ../dashboard.php');
       exit();
    }
    if(isset($_POST['ad_editDraft'])){
        
        include 'database.inc.php';

        $sql = "UPDATE product SET
        pname='$productName',
        category='$categories',
        description='$description',
        price='$price',
        currency='$currency',
        condi='$condition',
        delivery='$delivery',
        mid='$mid',
        stat='0',
        dat='$date',
        weight='$weight',
        feature='$features',
        location='$location'

        WHERE id=$getId;
        ";
        mysqli_query($conn,$sql);

        
         // File upload configuration 
        $targetDir = "upload/"; 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            $count = 1;

                foreach($_FILES['files']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]); 
                    $targetFilePath = $targetDir . $fileName; 
                    
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                    if(in_array($fileType, $allowTypes)){ 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            if($count == 1){
                                $sql = "UPDATE product SET
                                pic='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                                
                            }elseif($count == 2){
                                echo $count;
                                $sql = "UPDATE product SET
                                pic2='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 3 ){
                                $sql = "UPDATE product SET
                                pic3='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 4){
                                $sql = "UPDATE product SET
                                pic4='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;
                            }elseif($count == 5){
                                $sql = "UPDATE product SET
                                pic5='$fileName'
                        
                                WHERE id=$getId;
                                ";
                                mysqli_query($conn,$sql);

                                $count++;

                            
                            }
                            

                        }else{ 
                            $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                        } 
                    }else{ 
                        $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }  
            }else{ 
                $statusMsg = 'Please select a file to upload.'; 
            } 

       header('Location: ../dashboard.php');
       exit();
    }
?>