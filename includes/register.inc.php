<?php
    session_start();

    if(!isset($_POST["reg_submit"])){
        header("Location: ../register.php");
        exit();
    }else{
        include_once "database.inc.php";

        $firstName = mysqli_real_escape_string($conn,$_POST["reg_fName"]);
        $lastName = mysqli_real_escape_string($conn,$_POST["reg_lName"]);
        $phoneNumber = mysqli_real_escape_string($conn,$_POST["reg_pNumber"]);
        $dob = mysqli_real_escape_string($conn,$_POST["reg_dob"]);
        $gender = mysqli_real_escape_string($conn,$_POST["regGender"]);
        $email = mysqli_real_escape_string($conn,$_POST["reg_email"]);
        $address = mysqli_real_escape_string($conn,$_POST["reg_address"]);
        $userName = mysqli_real_escape_string($conn,$_POST["reg_userName"]);
        $password = mysqli_real_escape_string($conn,$_POST["reg_password"]);
        $cPassword = mysqli_real_escape_string($conn,$_POST["reg_cPassword"]);

        // Check for errors first
        if(empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($dob) || empty($gender) || empty($email) || empty($address) || empty($userName) || empty($password) || empty($cPassword)){
            header("Location: ../register.php?register=empty");
            exit();
        }else{
            // Valid Input
            if(!preg_match("/^[a-zA-Z]*$/",$firstName) || !preg_match("/^[a-zA-Z]*$/",$lastName)){
                header("Location: ../register.php?register=invalidinput");
                exit();
            }else{
                // Valid Email
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location: ../register.php?register=invalidemail");
                    exit();

                }else{
                    if($password != $cPassword){
                        header("Location: ../register.php?register=pasword_dont_match");
                        exit();
                    }else{
                        if(!isset($gender)){
                            header("Location: ../register.php?register=pickgender");
                            exit();
                        }else{
                            $sql = "SELECT * FROM users where user_email = '$email';";
                            $result = mysqli_query($conn,$sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck > 0){
                                header("Location: ../register.php?register=emailexists");
                                exit();
                            }else{
                                $sql = "SELECT * FROM users where user_userName = '$userName'";
                                $result = mysqli_query($conn,$sql);
                                $resultCheck = mysqli_num_rows($result);

                                if($resultCheck > 0){
                                    header("Location: ../register.php?register=usernameexists");
                                    exit();
                                }else{
                                    // Hashing Pasword
                                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                                    $hashedCPwd = password_hash($cPassword, PASSWORD_DEFAULT);

                                    // Insert into the database
                                    $sql = "INSERT INTO users(user_firstName, user_lastname,user_phoneNumber,user_dob,user_gender,user_email,user_address,user_userName,user_password) 
                                    VALUES ('$firstName','$lastName','$phoneNumber','$dob','$gender','$email','$address','$userName','$hashedPwd');";

                                    mysqli_query($conn,$sql);

                                    $_SESSION['RegFirst_Name']=$firstName;
                                    $_SESSION['RegId']=mysqli_insert_id($conn);
                                    header("Location: ../dashboard.php?register=success");
                                    exit();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
?>