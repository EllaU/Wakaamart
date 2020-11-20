<?php
    //    session_start();

        
          class Dashboard{
                public $mId;
                public $mName;
                public $numRows;

                function __construct(){
                    
                    // echo $_COOKIE['First_Name'];
                    if(isset($_SESSION['LogId'])){
                        $this->mId = $_SESSION['LogId'];
                    }else{
                        $this->mId = $_SESSION['RegId'];
                    }
                    $this->setmName();
                    // $this->getId();
                      
                    // $this->getData();
                    
                      
                }

                function setmName(){
                        // return $this->catId;
                        include 'database.inc.php';

                        // echo $this->mName;
                        
                        $sql = "SELECT * FROM users where user_firstName = '$this->mId';";
                        $result = mysqli_query($conn,$sql);
                         
                        if($row = mysqli_fetch_assoc($result)){
                                $this->mId =  $row['user_firstName'];
                                
                                // setcookie('categoryName', $this->catName, time() + (86400 * 30), "/");      
                        }
                      
        
                }
                function getNumber(){
                    include 'database.inc.php';
                    $sql = "select * from product where mid ='$this->mId';";
                    $result = mysqli_query($conn,$sql);
                    $numRows = mysqli_num_rows($result);

                    return $numRows;
                }
                function getId(){
                        // getting the category name
                //        return $this->catName;
                    // echo $this->catId;

                       echo $this->mId;

                 
                }
                function getData(){
                        // echo "girl";
                        include 'database.inc.php';

                        $sql="SELECT * FROM product where mid = '$this->mId';";
                        $result = mysqli_query($conn,$sql);

                        $rowNumber = mysqli_num_rows($result);
                        // echo $rowNumber;
                        

                        while($row = mysqli_fetch_array($result)){
                            if($row['stat'] == 0){
                                $status = '<h6 style="color:red">Not Valid</h6>';
                            }elseif($row['stat'] == 1){
                                $status = '<h6 style="color:orange">Pending</h6>';
                            }else{
                                $status = '<h6 style="color:green">Published</h6>';
                            }

                            echo '
                                    <div class="row py-3 hoverable" >
                                    <div class="col-lg-1 col-md-1">
                                    <h6 class="text-muted">
                                        '.$row['id'].'
                                    </h6>
                                    </div>
                                <div class="col-lg-2 col-md-2">
                                    <a href="ad_details.php?id='.$row['id'].'">
                                      <img  style="width:150px;height:70px;object-fit:cover" alt="no image" src="includes/upload/'. $row['pic'].'" class="img-fluid">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-3" id="adDetails">
                                    <h6 class="text-muted">
                                    '.$row['pname'].'
                                    </h6>
                                    <h6 class="text-muted font-weight-bold">
                                    '.$row['currency'].$row['price'].'

                                    </h6>
                                    
                                </div>

                                <div class="col-lg-2 col-md-2">
                                    <h6 class="text-muted font-weight-bold">
                                        12,00000000000
                                    </h6>

                                </div>

                                <div class="col-lg-2 col-md-2">
                                    '.$status.'
                                </div>
                                
                                <div class="col-lg-2 col-md-2">
                                    <a href="edit.php?'.$row['id'].'">
                                        <img src="img/pencil.png" alt="" class="img-fluid">
                                    </a>
                                    <a href="includes/delete.inc.php?id='.$row['id'].'">
                                        <img src="img/dustbin.png" alt="" class="img-fluid">
                                    </a>
                        
                                </div>
                        </div>
                            ';
                        }
                        
                }
                function redirect(){
                        header("Location: ../categories.php");
                        exit();
                }


        }

?>

