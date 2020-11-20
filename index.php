
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
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>

<body>
  <header>

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

                  <li class="nav-item mr-5">
                    <a class="nav-link" href="contact.php">contact</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="login.php">Sign In <img src="img/login (2).png" alt="" class="img-fluid mr-2"></a>
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
    <div id="intro" class="view">

      <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

          <div class="row d-flex justify-content-center text-center">

            <div class="col-md-12">

              <!-- Heading -->
              <h2 id="j_h2" style="font-family: 'Prompt', sans-serif;" class="font-weight-bold white-text pt-5 mb-2 font">Wakaamart</h2>

              <!-- Divider -->
              <hr  class="hr-light font">

              <!-- Description -->
              <h5 class="text-muted my-4">Join millions to buy and sell around the world.</h5>
              <!-- <button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button> -->

            </div>

          </div>

        </div>

      </div>

    </div>
    <!--/.Mask-->

  </header>
  <!--Main Navigation-->
  <section  class="section-padding">
    <div class="container" id="padding">
      <div  id = "row" class="row pb-5" style="display: flex;flex-direction: row;align-items: center;padding-left: 80px;">
        <div id="categories1" class="col-lg-1 col-sm-12 col-md-1 offset-md-3">
          <img src="img/minus-horizontal-straight-line (1).png" alt="" class="img-fluid">
        </div>
        <div   class="col-lg-3 col-sm-12 col-md-4 text-center" >
          <h1  id="categories" style="font-family: 'Prompt', sans-serif; color: black;">Categories</h1>
        </div>
        <div id="categories1"  class="col-lg-1 col-sm-12 col-md-1">
          <!-- <hr class="bg-color"> -->
          <img  src="img/minus-horizontal-straight-line (1).png" alt="" class="img-fluid ml-auto">
        </div>
        <div  class="col-lg-2 col-sm-12 col-md-2">
          <label id="search" class="expandSearch">
            <input id="mySearch" type="text" style="color: black;" placeholder="Search..." name="search">
            <i class="material-icons" type ="submit">search</i>
          </label>
         </div>

      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-12 col-md-6 ">
          <!-- Card -->
          <div class="card btn">
            <a href="categories.php?category=1&pageno=1">
              <!-- <div class="card-body"> -->

              <div style="position: relative !important;">
                <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Vehicles</h5>
                <img class="img-fluid" src="img/car.png" style="float: right;" />

              </div>

              <!-- </div> -->
            </a>

          </div>
          <!-- Card -->
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 ">
          <!-- Card -->
          <div class="card btn bg-dark" style="background-color: black;">
            <a href=" categories.php?category=4">
              <!-- <div class="card-body"> -->

              <div style="position: relative;">
                <h5 class="mt-3" style="float: left;color: white; text-transform: capitalize;">Fashion</h5>
                <img class="img-fluid" src="img/dress (1).png" style="float: right;" />

              </div>

              <!-- </div> -->
            </a>

          </div>
          <!-- Card -->
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 ">
          <!-- Card -->
          <div class="card btn">
            <a href="categories.php?category=9">
              <!-- <div class="card-body"> -->

              <div style="position: relative;">
                <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Furnitures</h5>
                <img class="img-fluid" src="img/furnitures.png" style="float: right;" />

              </div>

              <!-- </div> -->
            </a>

          </div>
          <!-- Card -->
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6 ">
          <!-- Card -->
          <div class="card btn bg-dark" style="background-color: black;">
            <a href="categories.php?category=2">
              <!-- <div class="card-body"> -->

              <div style="position: relative;">
                <h5 class="mt-3" style="float: left;color: white; text-transform: capitalize;">Real Estate</h5>
                <img class="img-fluid" src="img/home (1).png" style="float: right;" />

              </div>

              <!-- </div> -->
            </a>

          </div>
          <!-- Card -->
        </div>
      </div>
      <!-- ======================= -->
      <div class="row mt-3">
        <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- Card -->
            <div class="card btn bg-dark" style="background-color: black;">
              <a href="categories.php?category=14">
                <!-- <div class="card-body"> -->
  
                <div style="position: relative;">
                  <h5 class="mt-3" style="float: left;color: white; text-transform: capitalize;">Health</h5>
                  <img class="img-fluid" src="img/stethoscope.png" style="float: right;" />
  
                </div>
  
                <!-- </div> -->
              </a>
  
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6 ">
            <!-- Card -->
            <div class="card btn">
              <a href="categories.php?category=13">
                <!-- <div class="card-body"> -->
  
                <div style="position: relative;">
                  <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Food</h5>
                  <img class="img-fluid" src="img/food-serving.png" style="float: right;" />
  
                </div>
  
                <!-- </div> -->
              </a>
  
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6">
            <!-- Card -->
            <div class="card btn bg-dark" style="background-color: black;">
              <a href="categories.php?category=10">
                <!-- <div class="card-body"> -->
  
                <div style="position: relative;">
                  <h5 class="mt-3" style="float: left;color: white; text-transform: capitalize;">Kids</h5>
                  <img class="img-fluid" src="img/toys.png" style="float: right;" />
  
                </div>
  
                <!-- </div> -->
              </a>
  
            </div>
            <!-- Card -->
          </div>
          <div class="col-lg-3 col-sm-12 col-md-6 ">
            <!-- Card -->
            <div class="card btn">
              <a href="categories.php?category=7">
                <!-- <div class="card-body"> -->
  
                <div style="position: relative;">
                  <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Electronics</h5>
                  <img class="img-fluid" src="img/smartphone.png" style="float: right;" />
  
                </div>
  
                <!-- </div> -->
              </a>
  
            </div>
            <!-- Card -->
          </div>
       
      </div>
      <div id ="add" class="row mt-3" style="margin-bottom: -220px;">
        <div class="col-lg-12 col-sm-12 col-md-8">
          <a href="includes/index.inc.php?post_ad">
            <!-- <div class="card-body"> -->

            <div style="position: relative;">
              <img class="img-fluid" src="img/add.png" style="float: right;" />

            </div>

            <!-- </div> -->
          </a>        </div>
      </div>
 
    </div>
  </section>
  <!-- <section>
    <div class="container">
      <div class="row" style="margin-bottom: -110px;">
        <div class="col-lg-12 col-sm-12 col-md-8 mr-auto">
          <a href="#!">

            <div style="position: relative;">
              <img class="img-fluid" src="img/add.png" style="float: right;" />

            </div>

          </a>        </div>
      </div>
    </div>
  </section> -->
  <section class="section-padding" style="background-color: black;">

    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 mx-auto">
          <h6 class="color text-center">RECOMMENDED</h6>
   
         </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-md-4 col-md-4 col-sm-12">
          <h1 class="font-weight-bold text-center text-white" style="font-family: 'Prompt', sans-serif;">Best Deals</h1>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6">
         
        </div>
      </div>

      
    </div>
    <!--Carousel Wrapper-->
    
    <!--/.Carousel Wrapper-->

    <div id="carousel-example-1z" class="carousel slide my-3" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">
                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright">

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
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
  </section>
  <section class="section-padding">

    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-8 mx-auto">
          <h6 class="color text-center">RECOMMENDED</h6>
   
         </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-md-4 col-md-4 col-sm-12">
          <h1 class="font-weight-bold text-center" style="font-family: 'Prompt', sans-serif; color: black;">Featured Items</h1>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6">
         
        </div>
      </div>

      
    </div>
    <!--Carousel Wrapper-->
    
    <!--/.Carousel Wrapper-->

    <div id="carousel-example-1z" style="margin-top:100px!important;" class="carousel slide" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators mt-5" style="margin-top:100px!important;">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->
                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color text-white">View</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 1.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Clauren hat</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 2.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Long Hoodie</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 3.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">Timez watch</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="containerr hoverable">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image">
                  <!-- <img src="img/publicity-badge-of-circular-star-shape-with-a-frontal-banner-in-the-middle (1).png" alt="" class="img-fluid topright"> -->

                  <div class="overlay">
                    <div class="text">
                      <button type="button" class="btn bg-color">+</button>
                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold">jack Sandals</h5>
                <div style="position: relative;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
          </div>
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
  </section>
    <!-- <section class="section-padding"> -->
        <div id="intro_home" class="view">
  
          <div class="mask rgba-black-strong">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-8">
                  <h1 class=" text-white">
                    Download <span class="color font-weight-bold">Wakaati</span> from AppStore and GooglePlay
                  </h1>
                  <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta vel, commodi laudantium officiis ipsum
  
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5 col-sm-12 col-md-6" style="display: flex;flex-direction: row;">
                  <button type="button" class="btn btnn bg-color">
                    <div style="position: relative;">
                      <!-- <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Food</h5> -->
                      <img id="apple" class="img-fluid mr-2" src="img/apple.png" style="float: left;" />
                      <h6 class="text-white" style="float: right;text-transform: capitalize;">Apple Store</h6>
      
                    </div>
  
                  </button>
                  <button type="button" class="btn btnn bg-dark">
                    <div style="position: relative;">
                      <!-- <h5 class="card-text mt-3" style="float: left;color: black; text-transform: capitalize;">Food</h5> -->
                      <img id="google" class="img-fluid mr-2" src="img/play-store.png" style="float: left;" />
                      <h6 class="text-white" style="float: right;text-transform: capitalize;">Google Play</h6>
      
                    </div>
                  </button>
  
                </div>
              </div>
            </div>
    
          </div>
    
        </div>
        <!--/.Mask-->
        <section class="section-padding">

          <div class="container">
      
            <div class="row">
              <div class="col-lg-8 col-sm-12 col-md-8 mx-auto">
                <h6 class="color text-center">FOR YOU</h6>
         
               </div>
            </div>
            <div class="row">
              <div class="col-lg-6 offset-md-3 col-md-4 col-sm-12">
                <h1 class=" text-center" style="font-family: 'Prompt', sans-serif; color: black;">Picked Just For You</h1>
              </div>
            
            </div>

            <div class="row mt-5">
              <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="container2 border p-3 mx-auto">
                  <img src="img/feature 5.jpg" alt="Avatar" class="image2" style="width:100%">
                  <div class="middle2">
                    <div class="text2">
                      <button type="button" class="btn bg-color text-white">View</button>

                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold text-center">Clauren hat</h5>
                <div style="position: relative; display:flex;align-items: center; justify-content: center;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-4 ">
                <div class="container2 border p-3 mx-auto">
                  <img src="img/feature 6.jpg" alt="Avatar" class="image2" style="width:100%">
                  <div class="middle2">
                    <div class="text2">
                      <button type="button" class="btn bg-color text-white">View</button>

                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold text-center">Clauren hat</h5>
                <div style="position: relative; display: flex;align-items: center;justify-content: center;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-md-4 ">
                <div class="container2 border p-3 mx-auto">
                  <img src="img/feature 4.jpg" alt="Avatar" class="image2" style="width:100%">
                  <div class="middle2">
                    <div class="text2">
                      <button type="button" class="btn bg-color text-white">View</button>

                    </div>
                  </div>
                </div>
                <h5 class="mt-3 font-weight-bold text-center">Clauren hat</h5>
                <div style="position: relative;display: flex; align-items: center;justify-content: center;">
                  <p class="font-weight-bold text-muted mr-2" style="float: left;"><strike>$100.00</strike></p>
                  <p class="font-weight-bold text-muted color" style="float: left;">$50.00</p>

                </div>
              </div>
            </div>
            <!-- <span class="border"></span> -->
            
          </div>
          <!--Carousel Wrapper-->
          
          <!--/.Carousel Wrapper-->
      
      
        </section>

  <!-- <section class="section-padding" style="background-color: rgb(240, 239, 239);">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-6 mx-auto">
          <h6 class="text-center color">WAKAAMART</h6>
          <h2 class="font-weight-bold font-weight-bold text-center" style="font-family: 'Montserrat', sans-serif;">Blogs and Testimonials</h2>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-sm-12 col-md-6">
          <img src="img/test1.jpg" alt="" class="img-fluid">

          <h5 id="test1" class="font-weight-bold mt-3" style="color: black;">CEO Buchalkas & co.</h5>
          <p class="color font-weight-bold">Gabriella Callighan</p>
          <p class="">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur
            adipiscing…</p>
        </div>
        <div id="test1" class="col-lg-4 col-sm-12 col-md-6">
          <img src="img/test2.jpg" alt="" class="img-fluid">

          <h5 id="test1" class="font-weight-bold mt-3" style="color: black;">CEO Buchalkas & co.</h5>
          <p class="color font-weight-bold">Gabriella Callighan</p>
          <p class="">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur
            adipiscing…</p>
        </div>
        <div id="align" class="col-lg-4 col-sm-12 col-md-6 ">
          <div class="square p-4">
            <p class="py-auto text-muted">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit
              amet, consectetur adipiscing…
              Phasellus blandit massa enim...
            </p>

          </div>

          <div class="row">
            <div class="col-lg-5 text-center mx-auto ">
              <img src="img/author-3-70x70.jpg" alt="" class="img-fluid round mt-5">
              <h5 class="font-weight-bold color mt-2">Monica Doe</h5>
              <p class="text-muted">WKT THEME</p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section> -->
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
      <h4  id="quickLink" class="text-white py-auto">Quick Link</h4>
    </div>
    <div id="categories1" class="col-lg-4 col-sm-12 col-md-6  my-auto">
      <h4 class="text-white ">Contact Info</h4>
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
              <a href="contact.php">- Contact Us</a>
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
  <script type="text/javascript">
    var input = document.getElementById("mySearch");
    input.addEventListener("keyup", function(event){
      if(event.keyCode === 13){
        event.preventDefault();
        var value = input.value;
        // alert(value);
        window.location = "search.php?search="+ value;
      }
    })
  
  </script>
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