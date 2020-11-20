<?php
       
          class Category{
                public $catId;
                public $catName;

                function __construct($catId){
                        $this->catId = $catId;
                        $this->setCatName();
                        // $this->getCatName();
                        $this->getData();
                        // $this->redirect();
                        // setCatName();
                }

                function setCatName(){
                        // return $this->catId;
                        include 'database.inc.php';
                        
                        $sql = "SELECT * FROM category where id = '$this->catId';";
                        $result = mysqli_query($conn,$sql);
                         
                        if($row = mysqli_fetch_assoc($result)){
                                $this->catName =  $row['name'];
                                // setcookie('categoryName', $this->catName, time() + (86400 * 30), "/");      
                        }
                }
                function getCatName(){
                        // getting the category name
                //        return $this->catName;
                    echo $this->catId;

                       echo $this->catName;

                 
                }
                function getData(){
                        include 'database.inc.php';

                        // echo $this->catId;
                        if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                            } else {
                                $pageno = 1;
                            }
                            $no_of_records_per_page = 9;
                            $offset = ($pageno-1) * $no_of_records_per_page;

                            $total_pages_sql = "SELECT COUNT(*) FROM product where category='$this->catId';";
                            $resultt = mysqli_query($conn,$total_pages_sql);
                            $total_rows = mysqli_fetch_array($resultt)[0];
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                        $sql="SELECT * FROM product where category = '$this->catId' AND stat !='0' LIMIT $offset, $no_of_records_per_page;";
                        $result = mysqli_query($conn,$sql);

                        echo '<div class="container">';
                                $i=1;
                                while($row = mysqli_fetch_array($result)) {
                                if(is_int(($i - 1) / 3) || ($i - 1) == 0) {

                                
                                echo '<div class="row mt-3">';
                                }
                                $discount=$row["price"] ;
                                $int = (int)$discount * 2;

                                $imagePath = "includes/upload/".$row["pic"];
                              

                                
                                echo'
                                <div id="adDetails" class="col-lg-4 col-sm-12 col-md-4">
                                <div class="card shadow">

                                        <!-- Card image -->
                                        <div class="card-img-top">
                                        <div class="view zoom">
                                                <img src="'.$imagePath.'" style="width:400px; height:200px;object-fit:cover" class="img-fluid"/>

                                        </div>                      
                                        </div>
                                        <!-- Card content -->

                                        
                                        
                                        <div class="card-body container22 ">
                                                <div class="image22">
                                                        <h5 class=" font-weight-bold" style="color: black;">'. $row["pname"] .'</h5>
                                                        <div style="position: relative;">
                                                                <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>'.$row["currency"] . $int.'</strike></p>
                                                                <p class="font-weight-bold text-muted color" style="float: left;">'.$row["currency"].$row["price"].'</p>
                                                        
                                                        </div>
                                                </div>
                                                <div class="middle22">
                                                        <div class="text22">
                                                                <a href="ad_details.php?id='.$row["id"].'" type="button" class="btn bg-color text-white">View</a>
                                
                                                        </div>
                                                </div>
                                        
                
                                        </div>
                
                                </div>
                        </div>
                                ' 
                                                 ;
                                if(is_int($i / 3)) {
                                echo '</div>';
                                }
                                $i++;
                                }
                               
                        echo '</div>';
                        $result->free();
                        $conn->close();

                        echo '<div class = "row mt-5">';
                        echo '<div class = "col-lg-12 col-sm-12 col-md-12 text-center mx-auto">';


                        echo'


                        <ul class="pagination" style="">
                        <li><a href="';echo '?category='.$this->catId.'&pageno=1">First</a></li>
                        <li class="'; if($pageno <= 1){ echo 'disabled'; } echo' ">
                            <a href="'; if($pageno <= 1){ echo '#'; } else { echo '?category='.$this->catId.'&pageno='.($pageno - 1); } echo' ">Prev</a>
                        </li>
                        <li class="'; if($pageno >= $total_pages){ echo 'disabled'; } echo' ">
                            <a href="'; if($pageno >= $total_pages){ echo '#'; } else { echo '?category='.$this->catId.'&pageno='.($pageno + 1); } echo' ">Next</a>
                        </li>
                        <li><a href="';echo '?category='.$this->catId.'&pageno='; echo $total_pages; echo ' ">Last</a></li>
                         </ul>
                        ';
                        echo '</div>';

                        echo '</div>';

           
                

                        
                }
                function redirect(){
                        header("Location: ../categories.php");
                        exit();
                }


        }

      
        // echo $searchCat;
        $category = new Category($searchCat);

        

?>
