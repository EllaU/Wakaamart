<?php
     $fullUrl ="$_SERVER[QUERY_STRING]";

     parse_str($fullUrl);
    //  echo $fullUrl;
     $Id = $id;

    //  echo $Id;

     include 'database.inc.php';
     $sql = "delete from product where id='$Id'";
     $result = mysqli_query($conn,$sql);

    //  echo mysqli_affected_rows($conn);

     if(mysqli_affected_rows($conn)){
         header('Location: ../dashboard.php?deleted_succesfully');
         exit();
     }else{
         echo "no";
     }

?>