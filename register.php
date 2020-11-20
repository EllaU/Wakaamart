<?php
  session_start();
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">


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
            <h1 class="text-white mt-5 pt-5" style="font-family: 'Prompt', sans-serif;">Join Us</h1>
            <p class="mt-2 text-white">Home / <span class="color">Register</span></p>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!--/.Mask-->
  <div class="container section-padding">
    <div class="row">
      <div class="col-lg-8 col-sm-12 col-md-10 mx-auto ">
        <!-- Card -->
        <div class="card shadow">

          <!-- Card image -->
          <!-- Card content -->
          <div class="">

            <!-- Material form register -->

            <div class="row">
              <div class="col-lg-4 col-sm-12 col-md-4 gg">

              </div>
              <div class="col-lg-8 col-sm-12 col-md-8">

                <h5 class=" text-center color pt-5 pb-2">
                  Sign Up
                </h5>
                <hr>

                <!--Card content-->
                <div class=" px-lg-5 pt-0 card-body">

                  <!-- Form -->
                  <form class="text-center" style="color: #757575;" action="includes/register.inc.php" method="POST">

                    <div class="form-row">
                      <div class="col">
                        <!-- First name -->
                        <div class="md-form ">
                          <input name="reg_fName" type="text" id="RegisterFirstName" class="form-control validate" required>
                          <label for="RegisterFirstName">First name</label>
                        </div>
                      </div>
                      <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <input name="reg_lName" type="text" id="RegisterLastName" class="form-control validate" required>
                          <label for="RegisterLastName">Last name</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form mt-1">
                      <input name="reg_pNumber" type="text" id="RegisterPhoneNumber" class="form-control validate" required>
                      <label for="RegisterPhoneNumber">Phone Number</label>
                    </div>
                    <div class="md-form mt-5">
                      <input name="reg_dob" type="text" id="RegisterDOB" placeholder="yy-mm-dd" class="form-control" required>
                      <label for="RegisterDOB">Date of Birth</label>
                    </div>

                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" value="Male" id="RegisterGender1" name="regGender" checked>
                      <label class="custom-control-label" for="RegisterGender1">Male</label>
                    </div>

                    <!-- Default inline 2-->
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" value="Female" id="RegisterGender2" name="regGender">
                      <label class="custom-control-label" for="RegisterGender2">Female</label>
                    </div>
                    <!-- Default inline 2-->
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" value="Not Specify" id="RegisterGender3" name="regGender">
                      <label class="custom-control-label" for="RegisterGender3">Other</label>
                    </div>
                    <!-- E-mail -->
                    <div class="md-form mt-1">
                      <input name="reg_email" type="email" id="RegisterEmail" class="form-control validate" required>
                      <label for="RegisterEmail">E-mail</label>
                    </div>

                    <div class="form-group purple-border">
                      <label class="ml-auto" for="RegisterAddress">Address</label>
                      <textarea name="reg_address" class="form-control" id="RegisterAddress" rows="3" required></textarea>
                    </div>

                    <div class="md-form mt-2">
                      <input name="reg_userName" type="text" id="RegisterEmail" class="form-control" required>
                      <label for="RegisterEmail">User Name</label>
                    </div>


                    
                        <!--password -->
                        <div class="md-form">
                          <input name="reg_password" type="password" id="materialRegisterFormPassword"
                            class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required>
                          <label for="materialRegisterFormPassword">Password</label>
                          <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                          </small>
                        </div>
                    

                     
                        <!--confirm password -->
                        <div class="md-form">
                          <input name="reg_cPassword" type="password" id="materialRegisterFormPassword2"
                            class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" required>
                          <label for="materialRegisterFormPassword2">Confirm Password</label>

                        </div>
                   

                    <!-- Password -->


                    <!-- Newsletter -->
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                      <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to
                        our newsletter</label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn  btn-rounded text-white br btn-block bg-color my-4 waves-effect z-depth-0"
                      type="submit" name="reg_submit">Sign Up

                    </button>

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                      <i class="fab fa-github"></i>
                    </a>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                      <em>Sign up</em> you agree to our
                      <a href="#!" class="color" target="_blank">terms of service</a>

                  </form>
                  <!-- Form -->



                </div>
              </div>
            </div>
            <!-- Material form register -->
          </div>

        </div>
        <!-- Card -->
      </div>
    </div>
  </div>



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
        <div class="col-lg-4 col-sm-12 col-md-6 my-auto">
          <h4 id="categories1" class="text-white py-auto">Quick Link</h4>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6  my-auto">
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
            <div id="categories1" class="col-lg-6 col-sm-12">
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