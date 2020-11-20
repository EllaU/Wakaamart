<?php
    session_start();
          $fullUrl ="$_SERVER[QUERY_STRING]";

          parse_str($fullUrl);
         //  echo $fullUrl;
          $getId = $id;

          include'includes/ad_details.inc.php';
          
            $product= new Product("$getId");
            $pName = $product->getProductName();
            $pDes = $product->getDes();
            $pFea = $product->getFeatures();
            $pCur = $product->getCurrency();
            $pPri = $product->getPrice();
            $pWei = $product->getWeight();
            $pDat = $product->getDate();
            $pLoc = $product->getLocation();
            $pDel = $product->getDelivery();
            $pStat = $product->getStatus();
            $pCat = $product->getCategory();
            $pCon = $product->getCondition();
            $pMid = $product->getMID();
            $pPic = $product->getPic();

            include 'includes/database.inc.php';
             // get merchants id that posted it
            $sql="select * from users where user_id='$pMid';";
            $result= mysqli_query($conn,$sql);
            if($row=mysqli_fetch_assoc($result)){
                $mName= $row['user_firstName']." ".$row['user_lastname'];
                $mPhone= $row['user_phoneNumber'];
            }else{
                echo mysqli_num_rows($result);
                echo $pMid;
            }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>

<body>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

      <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#"><img src="img/icon.png" style="width: 80px; height: 57px;" alt=""
            class="img-fluid"></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav ml-auto smooth-scroll">
            
            <li class="nav-item">
              <a class="nav-link mr-5" href="index.php">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="about.php">about us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-5" href="includes/index.inc.php?post_ad">post ad</a>
            </li>
            <?php
              if(isset($_SESSION['LogId']) || isset($_SESSION['RegId'])){
                  echo '<li class="nav-item">
                        <a class="nav-link mr-5" href="dashboard.php">My Dashboard</a>
                        </li>';
                  echo '<li class="nav-item">
                        <a class="nav-link mr-5" href="includes/logout.inc.php">Log Out</a>
                        </li>';
                }else{
                  echo'
                  <li class="nav-item">
                  <a class="nav-link" href="login.php"><img src="img/login (2).png" alt="" class="img-fluid mr-2">Login</a>
                  </li>
                  <li id="categories1" class="nav-item">
                    <a class="nav-link" href="#gallery">|</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Register <img src="img/secure.png" alt="" class="img-fluid"> </a>
                  </li>
                  ';

              }
            ?>
            
            
          </ul>

          <!-- Links -->

          <!-- Social Icon  -->
          <!-- <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul> -->
        </div>
        <!-- Collapsible content -->

      </div>

    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div id="intro_ad" class="view">

        <div class="mask rgba-black-strong">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 col-md-7 p-5">
                        <h1 class="text-white mt-5 pt-5" style="font-family: 'Prompt', sans-serif;">Ad Details</h1>
                        <p class="mt-2 text-white">Home / <span class="color">Ad Details</span></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--/.Mask-->



    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-7">
                    <!-- Card -->

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide hoverable" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <?php
                        
                        
                        ?>
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <img class="d-block w-100" style="width:500px;height:450px;object-fit:cover" src="<?php echo'includes/upload/'.$pPic; ?>" alt="First slide">
                            </div>
                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100"  style="width:500px;height:450px;object-fit:cover" src="<?php echo'includes/upload/'.$pPic; ?>" alt="Second slide">
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img class="d-block w-100"  style="width:500px;height:450px;object-fit:cover" src="<?php echo'includes/upload/'.$pPic; ?>"alt="Third slide">
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                    <!-- Button -->
<!-- Card -->
                    <div class="card mt-3">

                        <!-- Card image -->                    
                        <!-- Card content -->
                        <div class="card-body">
                    
                        <!-- Title -->
                        <h4 class="card-title font-weight-bold" style="color: black;"><?php echo $pName;?></h4>
                        <!-- Text -->
                        <p class="card-text" style="color:rgb(175, 175, 175); font-size: 0.9rem;">
                            <?php echo $pDes.".".$pFea;?>
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-md-8">
                                <ul class="list-unstyled" style="color:lightgray;">
                                    <li class="mb-1">
                                        <a href="#!"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">Price: <?php echo $pCur.$pPri;?></a>
            
                                    </li>
                                    <li class="mb-1">
                                        <a href="#!"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">Weight: <?php echo $pWei;?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">Date Posted: <?php echo $pDat;?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">Location: <?php echo $pLoc;?></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">Delivery: <?php echo $pDel;?></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-12 col-md-8">
                                <ul class="list-unstyled" style="color:lightgray;">
                                    <li class="mb-1">
                                        <a href="#!"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">+2345678910</a>
            
                                    </li>
                                    <li class="mb-1">
                                        <a href="#!"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">ab@gmail.com</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">No 5, Lagos State.</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#"><img src="img/checked.png" alt="" class="img-fluid mr-2"></a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;">No 5, Lagos State.</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-md-12">
                            <hr class="">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-sm-12 col-md-8">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <a href="#!"><img src="img/folder.png" alt="" class="img-fluid mr-2"></a>
                                        <a class="font-weight-bold" style="color: black;">Categories:</a>
                                        <a href="#!" class="mr-2" style="color:rgb(175, 175, 175); font-size: 0.9rem;"><?php echo $pCat?></a>
                                        
                                        <a class="font-weight-bold" style="color: black;">Condition:</a>
                                        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;"><?php echo $pCon;?></a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-6">
                                <ul class="navbar-nav nav-flex-icons" style="display: flex; flex-direction: row;">
                                    <li class="nav-item mr-2">
                                        <a class="nav-link"><img src="img/facebook (3).png" alt="" class="img-fluid"></a>
                                    </li>
                                    <li class="nav-item mr-2">
                                        <a class="nav-link"><img src="img/twitter (5).png" alt="" class="img-fluid"></a>
                                    </li>
                                    <li class="nav-item mr-2">
                                        <a class="nav-link"><img src="img/instagram.png" alt="" class="img-fluid"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"><img src="img/google-plus.png" alt="" class="img-fluid"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                        <!-- Button -->
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div id="adDetails" class="col-lg-4 col-sm-12 col-md-5">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-title">
                            <h5 style="color:black" class="px-3 pt-3">Ad Posted By</h5>
                            
                        </div>

                        <!-- Card image -->
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
                    
                        <!-- Card content -->
                        <div class="card-body">
                    
                        <!-- Default form subscription -->
<form class="text-center p-5" action="#" method="">

    <p style="color:black" class="h4 mb-4"><?php echo $mName?></p>


    <p>
        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.9rem;"><img src="img/pl.png" alt="" class="img-fluid"> <?php echo $mPhone?></a>
    </p>

    <!-- Name -->
    <input type="text" name="cName" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name" required>

    <!-- Email -->
    <input type="email" name="cEmail" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail" required>
    <p>
        <a href="#!" style="color:rgb(175, 175, 175); font-size: 0.8rem;">I'm interested in this product and I'd like to know more details.</a>
    </p>

    <!-- Sign in button -->
    <button  onclick="location.href="<?php echo"https://wa.me/$mPhone?text=I'm%20interested%20in%20your%20$pName%20for%20sale"?>";" name="submit"  type="submit" class="btn btn-info btn-block bg-color" style ="text-transform: capitalize;"><img src="img/whatsapp (2).png" alt="" class="img-fluid mr-2">Send Message</button>


</form>
<!-- Default form subscription -->
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
<!-- Default form subscription -->
                </div>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small  indigo ">

        <!-- Footer Links -->
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-4 col-sm-12 col-md-6">
            <div style="display: flex; flex-direction: row;">
              <img src="img/icon - Copy.png" style="width:90px; height: 67px;" alt="" class="img-fluid">
              <h3 class="color mt-3">akaamart</h3>
            </div>
          </div>
          <div  class="col-lg-4 col-sm-12 col-md-6 my-auto">
            <h4 id="categories1"   class="text-white py-auto">Quick Link</h4>
          </div>
          <div  class="col-lg-4 col-sm-12 col-md-6  my-auto">
            <h4 id="quickLink" class="text-white ">Contact Info</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <hr class="bg-color">
          </div>
        </div>
      
        <div class="row mt-3">
          <div class="col-lg-4 col-sm-12 col-md-6">
            <p>
              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
               sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, 
               adipisci velit.
            </p>
            <ul class="navbar-nav nav-flex-icons" style="display: flex; flex-direction: row;">
              <li class="nav-item mr-2">
                  <a class="nav-link"><img src="img/facebook (3).png" alt="" class="img-fluid"></a>
              </li>
              <li class="nav-item mr-2">
                  <a class="nav-link"><img src="img/twitter (5).png" alt="" class="img-fluid"></a>
              </li>
              <li class="nav-item mr-2">
                  <a class="nav-link"><img src="img/instagram.png" alt="" class="img-fluid"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><img src="img/google-plus.png" alt="" class="img-fluid"></a>
            </li>
          </ul>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-6">
            <div class="row">
              <div id="qLinks" class="col-lg-6 col-sm-12">
                <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="index.php">- Home</a>
                </li>
                <li class="mb-3">
                  <a href="about.php">- About Us</a>
                </li>
                <li class="mb-3">
                  <a href="includes/index.inc.php?post_ad">- Post Ad</a>
                </li>
                <li class="mb-3">
                  <a href="contact.php">- Contact</a>
                </li>
                </ul>
              </div>
              <div id="categories1"  class="col-lg-6 col-sm-12">
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <a href="#!">Vison</a>
                  </li>
                  <li class="mb-3">
                    <a href="#!">Adventure</a>
                  </li>
                  <li class="mb-3">
                    <a href="#!">Goals</a>
                  </li>
                  <li class="mb-3">
                    <a href="#!">Team</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-6">
            <ul class="list-unstyled">
              <li class="mb-3">
                <a href="#!"><img src="img/call (2).png" alt="" class="img-fluid mr-2"></a>
                <a href="#!">+2345678910</a>
      
              </li>
              <li class="mb-3">
                <a href="#!"><img src="img/mail.png" alt="" class="img-fluid mr-2"></a>
                <a href="#!">ab@gmail.com</a>
              </li>
              <li class="mb-3">
                <a href="#"><img src="img/pin.png" alt="" class="img-fluid mr-2"></a>
                <a href="#!">No 5, Lagos State.</a>
              </li>
              <!-- <li class="mb-3">
                <a href="#!">Very long link 4</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="www.wakaamart.com"> Wakaamart.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
    <!-- Footer -->


    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>