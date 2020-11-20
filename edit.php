<?php
    session_start();

    $fullUrl ="$_SERVER[QUERY_STRING]";

    parse_str($fullUrl);
    $getId = $fullUrl;

    include 'includes/database.inc.php';
    $sql = "select * from product where id = '$getId';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    
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
    <!-- <script type="text/javascript" src="app.js"></script> -->
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
                        <h1 class="text-white mt-5 pt-5" style="font-family: 'Prompt', sans-serif;">Edit Ad</h1>
                        <p class="mt-2 text-white">Dashboard / <span class="color">Edit ad</span></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-3">
                                        <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <div class="card-img-top bg-color pt-5 pb-4">
                            <div  class="row">
                                <div  id="center" class="col-lg-3 col-sm-2 col-md-5 mx-auto text-center">
                                    <img id="img" src="img/dashboard_user.png" alt="" class="img-fluid ">
                                </div>
                            </div>
                            <div  class="row mt-2">
                                <div id="center" class="col-lg-12 mx-auto">
                                    <!-- <img src="img/dashboard_user.png" alt="" class="img-fluid "> -->
                                    <p class="text-white text-center">
                                    <?php
                                        if (isset($_SESSION['First_Name'])){
                                            echo "Welcome back ".$_SESSION['First_Name']."!";
                                        }elseif (isset($_SESSION['RegFirst_Name'])){
                                            echo "Hello ".$_SESSION['RegFirst_Name']."!";
                                        }
                                    ?>
                                    </p>
                                </div>
                            </div>
                            
                        </div>                    
                        <!-- Card content -->
                        <div class="">
                    
                            <div class="row">
                                <div class="col-lg-12 col-sm-10 col-md-12 ">
                                    <ul class="list-unstyled hoverable" style="margin: 0px 0px 0px 0px;">
                                        <li class="px-4 py-4">
                                            <a href="#!"><img src="img/dashboard.png" alt="" class="img-fluid mr-2"></a>
                                            <a href="dashboard.php">Dashboard</a>
                                        
                                        </li>
                                      <hr style="margin: 0px 0px 0px 0px;">
                                    </ul>
                                    <ul class="list-unstyled hoverable" style="margin: 0px 0px 0px 0px;">
                                        <li class="px-4 py-4">
                                            <a href="#!"><img src="img/megaphone.png" alt="" class="img-fluid mr-2"></a>
                                            <a href="edit.php"  style="color: #860270;">Edit Ad</a>
                                        
                                        </li>
                                      <hr style="margin: 0px 0px 0px 0px;">
                                    </ul>
                                    <ul class="list-unstyled hoverable" style="margin: 0px 0px 0px 0px;">
                                        <li class="px-4 py-4">
                                            <a href="#!"><img src="img/settings.png" alt="" class="img-fluid mr-2"></a>
                                            <a href="dashboard_profile.php">Profile</a>
                                        
                                        </li>
                                      <hr style="margin: 0px 0px 0px 0px;">
                                    </ul>
                                    <ul class="list-unstyled hoverable" style="margin: 0px 0px 0px 0px;">
                                        <li class="px-4 py-4">
                                            <a href="#!"><img src="img/log-out.png" alt="" class="img-fluid mr-2"></a>
                                            <a href="includes/logout.inc.php">Log Out</a>
                                        
                                        </li>
                                      <hr style="margin: 0px 0px 0px 0px;">
                                    </ul>
                                </div>
                            </div>
        
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div id="adDetails" class="col-lg-5 col-sm-12 col-md-5">
                                        <!-- Card -->
                    <div class="card text-white">

                        <!-- Card image -->
                        <h4 class=" color pt-3 px-3">
                            Ad Detail
                        </h4>
                        <hr>
                        <!-- <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap"> -->
                    
                        <!-- Card content -->
                        <div class="card-body">

                    
                            <form name="postAdForm" action="includes/updateAd.inc.php?<?php echo $row['id']?>" class="text-center needs-validation" style="color: #757575;" enctype="multipart/form-data" method="POST">
                                        
                              <div class="form-row">
                                  <div class="col">
                                      <!-- First name -->
                                      <div class="md-form ">
                                          <input type="text" id="ProductName" value=" <?php echo $row['pname']?>" class="form-control validate" name="product_Name" >
                                          <label for="ProductName">Product Name</label>
                                      </div>
                                  </div>
                              
                              </div>
                                        <!-- Categories -->
                              <select class="browser-default custom-select" id="categories" name="categories" >
                                  <option value="">Categories</option>
                                  <option value="1">Automobiles</option>
                                  <option value="2">Real Estate</option>
                                  <option value="3">Computer Accessories</option>
                                  <option value="4">Fashion</option>
                                  <option value="5">Laptops</option>
                                  <option value="6">Mobile Phones</option>
                                  <option value="7">Electronics</option>
                                  <option value="8">Home Appliances</option>
                                  <option value="9">Home Furniture</option>
                                  <option value="10">Kids</option>
                                  <option value="11">Jobs</option>
                                  <option value="12">Camera</option>
                                  <option value="13">Food & Restuarant</option>
                                  <option value="14">Health</option>
                              </select>
                                        <!-- Description -->
                              <div class="form-group purple-border mt-3">
                                <label class="ml-auto" for="Description">Description</label>
                                <textarea class="form-control validate" id="Description" rows="3" name="description" ><?php echo $row["description"]?></textarea>
                              </div>
                                        <!-- Features -->
                              <div class="form-group purple-border mt-3">
                                <label class="ml-auto" for="Features">Features</label>
                                <textarea class="form-control" id="Features" rows="3" name="features" ><?php echo $row['feature']?></textarea>
                              </div>
                                        <!-- Price -->
                              <div class="md-form">
                                <input type="number" id="Price" value="<?php echo $row["price"]?>" class="form-control validate" name="price" >
                                <label for="Price">Price</label>
                              </div>
                                        <!-- Currency -->
                              <select id="currency" class="browser-default custom-select mb-3" name="currency">
                                <option selected value="&#8358">NGN (&#8358)</option>
                                <option value="&#36">USD (&#36)</option>
                                <option value="&#163">GBP (&#163)</option>

                              </select>
                                  
                                  <!-- Condition -->
                                  <!-- Default inline 1 -->
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" value="New" id="Condition1" name="condition" checked>
                                  <label class="custom-control-label" for="Condition1">New</label>
                              </div>
                              
                              <!-- Default inline 2-->
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" value="Used" id="Condition2" name="condition">
                                  <label class="custom-control-label" for="Condition2">Used</label>
                              </div>
             
                                        <!-- Delivery -->
                              <select id="delivery" class="custom-select browser-default mt-3" name="delivery" >
                                <option value="">Delivery</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                
                              </select>
                                        
                                        <!-- Weight -->
                              <div class="md-form">
                                <input type="text" id="Weight" value="<?php echo $row['weight']?>" class="form-control validate" name="weight" >
                                <label for="Weight">Weight</label>
                              </div>

                                        <!-- Location -->
                              <div class="md-form">
                                <input type="text" id="Location" value="<?php echo $row['location']?>" class="form-control validate" name="location" >
                                <label for="Location">Location</label>
                              </div>

                                        <!-- Buttons -->
                              <div class="form-row">
                                <div class="col">
                                  <button class="btn  btn-rounded text-white br bg-color my-4 waves-effect z-depth-0" type="submit" value="post ad" name="ad_editSubmit">update</button>
                                </div>
                                <div class="col">
                                  <button class="btn  btn-rounded text-white br bg-color my-4 waves-effect z-depth-0" type="submit" value="save as draft" name="ad_editDraft">Save as draft</button>
                                </div>
                              </div>                               

                              <hr>                        
                           
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>

                <div id="contactDetails" class="col-lg-4 col-sm-12 col-md-4">
                    <!-- Card -->
                        <div class="card">
                            <h4 class=" color pt-3 px-3" >
                                Image Upload
                                <hr>
                            </h4>
    
                            <div class="card-body ">

                            <div class="container">
                              <h6>Live Preview</h6>
                                <hr />
                                
                                <div class="row"  id="dvPreview">
                                  <div class="col-lg-12 col-sm-12 col-md-12">
                                  </div>
                                </div>
                                
                              </div>
                              <input name="files[]" class="mb-3" id="fileupload" type="file" multiple="multiple" />
                                  

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

    
                            </form>
                                <!-- Form -->
                        
                          </div>
                        
                        </div>
                        <!-- Card -->
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

      <script type="text/javascript">
      window.onload = function () {
        var fileUpload = document.getElementById("fileupload");
        fileUpload.onchange = function () {
            if (typeof (FileReader) != "undefined") {
                var dvPreview = document.getElementById("dvPreview");
                dvPreview.innerHTML = "";
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                for (var i = 0; i < fileUpload.files.length; i++) {
                    var file = fileUpload.files[i];
                    if (regex.test(file.name.toLowerCase())) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var img = document.createElement("IMG");
                            img.height = "100";
                            img.width = "100";
                            img.style.objectFit = "cover";
                            img.style.padding = "5px";
                            img.src = e.target.result;
                            dvPreview.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    } else {
                        alert(file.name + " is not a valid image file.");
                        dvPreview.innerHTML = "";
                        return false;
                    }
                }
            } else {
                alert("This browser does not support HTML5 FileReader.");
            }
        }
      };

      function setPictures(){
        // alert("girl");
        var preview = document.getElementById("dvPreview");
        // preview.innerHTML = "<p>girl</p>";
        var count = 1;
        for(var i = 0; i<5;i++){
          var img = document.createElement("IMG");
              img.height = "100";
              img.width = "100";
              img.style.objectFit = "cover";
              img.style.padding = "5px";
              // img.src = "img/ad1.jpg";

              if(count == 1){
                img.src = "includes/upload/<?php echo $row['pic']?>";
                img.alt="Pic 1"
                count++;
              }
              else{
                if(count==2){
                img.src="includes/upload/<?php echo $row['pic2']?>";
                img.alt="no image"

                count++;
                }else{
                  if(count==3){
                    img.src="includes/upload/<?php echo $row['pic3']?>";
                    img.alt="no image"

                    count++;
                  }else{
                    if(count==4){
                      img.src="includes/upload/<?php echo $row['pic4']?>";
                      img.alt="no image"

                      count++;
                    }else{
                      if(count==5){
                        img.src="includes/upload/<?php echo $row['pic5']?>";
                        img.alt="no image"

                      }
                    }
                  }
                }
              }
              // if(count==3){
              //   img.src = "img/ad3.jpg";
              //   count++;
              // }
              dvPreview.appendChild(img);

        }
      }
      setPictures();

      var temp = "<?php echo $row['category']?>";
    
    var mySelect = document.getElementById('categories');

    for(var i, j = 0; i = mySelect.options[j]; j++) {
    if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
    }
    }

    var temp2 = "<?php echo $row['currency']?>";
    
    var mySelect2 = document.getElementById('currency');

    for(var i, j = 0; i = mySelect2.options[j]; j++) {
    if(i.value == temp2) {
    mySelect2.selectedIndex = j;
    break;
    }
    }


    var temp3 = "<?php echo $row['delivery']?>";
    
    var mySelect3 = document.getElementById('delivery');

    for(var i, j = 0; i = mySelect3.options[j]; j++) {
    if(i.value == temp3) {
    mySelect3.selectedIndex = j;
    break;
    }
    }
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