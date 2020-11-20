<?php
    session_start();
    
    if(!isset($_POST["login_submit"])){
        header("Location: ../login.php");
    }else{

        include_once "database.inc.php";
        
      
        $loginUsername = mysqli_real_escape_string($conn,$_POST["login_username"]);
        $loginPassword = mysqli_real_escape_string($conn, $_POST["login_password"]);

        if(empty($loginUsername) || empty($loginPassword)){
            // echo $loginUsername;
            header("Location: ../login.php?login=emptyfields");
            exit();
        }else{
            $sql = "SELECT * FROM users where user_userName = '$loginUsername' OR user_email='$loginUsername';";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck < 1){
                header("Location: ../login.php?login=not_a_user");
                exit();
            }else{
                // Get data from data base
                if($row = mysqli_fetch_assoc($result)){
                    // check if the hashed password in the database is the same as the users input
                    $hashedPasswordCheck = password_verify($loginPassword,$row['user_password']);

                    if($hashedPasswordCheck == false){
                        header("Location: ../login.php?login=incorrectpassword");
                        exit();
                    }elseif($hashedPasswordCheck == true)
                    {   
                            $_SESSION['First_Name'] = $row['user_firstName'];
                            $_SESSION['LogId'] = $row['user_id'];
                            header("Location: ../dashboard.php?login==sucess");
                            exit();
                      
                        
                    }
                   
                    
                }
            }
        }
    }

?> 