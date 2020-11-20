<?php
    session_start();
    $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    

    if(strpos($fullUrl,"post_ad")==false){
            header("Location: ../index.php");
            exit();
            
        }elseif(strpos($fullUrl,"post_ad")==true){

            if(isset($_SESSION['LogId']) || isset($_SESSION['RegId'])){
                header("Location: ../dashboard_postad.php");
                exit();
            }else{
                header("Location: ../login.php");
                exit();
            }
        }else{
            header("Location: ../index.php");
            exit();
    }
  
?>