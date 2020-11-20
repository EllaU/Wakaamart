<?php
    session_start();
    // $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(isset($_SESSION['RegId']) || isset($_SESSION['LogId'])){
       session_unset();
       session_destroy();

        header("Location: ../index.php");
        exit();

    }
    else{
        header("Location: ../index.php");
        exit();
    }
?>
