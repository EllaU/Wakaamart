
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
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
    <div id="intro_ad" class="view">

        <div class="mask rgba-black-strong">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 col-md-7 p-5">
                        <h1 class="text-white mt-5 pt-5" style="font-family: 'Prompt', sans-serif;">Contact Us</h1>
                        <p class="mt-2 text-white">Home / <span class="color">Contact</span></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--/.Mask-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-md-8">
                    <div class="card shadow">
                      <form action="">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-lg-5 col-sm-12 col-md-5">
                                    <h4 class="">Send Us a Message</h4>
                                    <hr class="bg-color mt-3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-row px-3">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form ">
                                            <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                            <label for="materialRegisterFormFirstName">Name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="md-form">
                                            <input type="email" id="materialRegisterFormLastName" class="form-control">
                                            <label for="materialRegisterFormLastName">Email</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <div class="md-form">
                                            <input type="email" id="materialRegisterFormLastName" class="form-control">
                                            <label for="materialRegisterFormLastName">Subject</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12"> 
                                    <div class="form-group purple-border">
                                        <label class="ml-auto" for="RegisterAddress">Message</label>
                                        <textarea name="reg_address" class="form-control" id="RegisterAddress" rows="3"></textarea>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-md-4">
                                    <button class="btn bg-color text-white br align-item-center mt-3 text-center">Submit Now</button>

                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div id ="adDetails"class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card shadow">
                                <div class="card-body my-auto">
                                    <h5 style="color: black;">Address</h5>
                                    <hr>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus lectus, viverra vehicula porta id, posuere at massa. Nam sollicitudin porta nunc.
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-lg-12 col-md-12">
                            <div class="card shadow ">
                                <div class="card-body my-auto">
                                    <h5 style="color: black;">Contact Info</h5>
                                    <hr>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
 


    



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
                <a href="#!">- Home</a>
              </li>
              <li class="mb-3">
                <a href="#!">- About Us</a>
              </li>
              <li class="mb-3">
                <a href="#!">- Services</a>
              </li>
              <li class="mb-3">
                <a href="#!">- Post Ad</a>
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