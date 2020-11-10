<?php
session_start();
if(!isset($_SESSION['username']))   //if user presses back or log out
    header('location:login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Google photos of customers-->
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <header>
        <div id="bar">
            Information about Health Hunt.
        </div>

        <!-- Links -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark border-bottom border-light" style="position: fixed; top: 50px; width: 100%; left: 0px; z-index: 100;">
            
            <img src="images/logo.jpg" alt="_target">
    
            <!--Search Bar-->
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav nav-item ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"></a>
                
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="about.html">About</a>
                    <a class="dropdown-item" href="contact.html">Contact</a>
                    <a class="dropdown-item" href="testimonials3.html">Testimonials</a>
                    <a class="dropdown-item" href="index.html">Exit</a>
                    </div>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.html">Sign Up</a>
            </li>    
            </ul>
        </nav>
        
       
<div class="container">
    
     <h2 class="text-center text-success" style="margin-top: 150px; font-weight: bolder">Welcome <?php echo $_SESSION['username'] ?></h2>
     <a href="logout.php"><span style="text-align:right;font-weight: bolder">Logout</a>
        <!--Different blocks to reach somewhere-->
        <div id="jumpbox">
        
            <a href="#" class="jump" id="j1">Diagnosis & Conditions</a>
            <a href="#" class="jump" id="j2">Newborn Disorders</a>
            <a href="#" class="jump" id="j3">Daily Diet</a>
            <a href="#" class="jump" id="j4">Yoga & Exercises</a>
            <a href="#" class="jump" id="j5">Mental Health Portal</a>
            <a href="#" class="jump" id="j6">Nationwide Services Directory</a>
        </div>
    </header>
    
    <main style="top: 200px;">
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/img2.jpg" style="width:800px; height: 600px; object-fit: cover; ">
            <div class="text" style="font-size: larger;font-weight: bolder;background-color: black;">We're here to help you.</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=mathura%2C%20India&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:240px;width:332px;}.gmap_canvas {overflow:hidden;background:none!important;height: 600px;widows: 800px;}</style></div>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <div class="text"style="font-size: larger;font-weight: bolder;background-color: black;">Our location</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Nearby%20hospital&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:600px;width:800px;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:800px;}</style></div>
            <div class="text"style="font-size: larger;font-weight: bolder;background-color: black;">Nearby hospitals</div>
            </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </main>

    <br><br><br>

    <section>
      <div class="card-columns" style="width: 80%; display: flex;margin: auto;">
        <div class="card bg-primary">
          <div class="card-body text-center">
            <h2>About the portal</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
        <div class="card bg-warning">
          <div class="card-body text-center">
            <h2>Who will guide you?</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
        <div class="card bg-success">
          <div class="card-body text-center">
            <h2>What is Health Hunt?</h2><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus porro, aliquam molestias voluptatem repellendus asperiores, culpa omnis deserunt minus laborum quidem amet reprehenderit facilis impedit facere quasi iste. Officiis, vitae!</p>
          </div>
        </div>
      </div> 
    </section>
    <br><br>

    <div id="head4">
        <h3>What you'll find in the Portal</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsum pariatur delectus ratione cumque sequi ullam, suscipit, labore accusamus obcaecati perspiciatis corrupti libero. Saepe architecto porro iure repellendus, quasi, fuga atque amet nam repudiandae rem suscipit, perferendis laboriosam officia id ratione sequi ad illo velit ab laborum incidunt. Corrupti, tenetur?
        </p>
        <a href="signup.html">Sign In to get connected with our expert.</a>
        <p style="text-align: center;">Your identity is safe with us!</p>
    </div>
    
    <br><br>

    <div class="box">
        <h3>The Health Hunt Portal</h3>
        <br>
        <ul>
            <li>
                <h5><b>Vision:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam sit non illum fuga excepturi itaque nam voluptates consectetur, ullam alias a laboriosam. Temporibus quaerat eaque soluta assumenda, porro, in ipsa ad alias excepturi ab cupiditate aut! Voluptates ullam numquam sed?</p>
            </li>
            <li>
                <h5><b>Mision:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error consequuntur, incidunt deserunt et culpa eos provident repellendus enim dolor, rerum dolore. Error vel eos temporibus quasi exercitationem placeat est, ut ex rerum sed assumenda repellendus voluptas. Quidem, iure? Illum, deserunt!</p>
            </li>
            <li>
                <h5><b>Long Range Goal:</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, pariatur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam doloribus sunt sit, asperiores inventore autem odit voluptates recusandae eum quibusdam beatae distinctio dolorem quisquam! Laboriosam dolorem ab dolor optio dolorum aut veniam, nihil voluptatum! Fugit sunt deserunt recusandae fugiat maiores.</p>
            </li>
        </ul>
    </div>

    <!--Customer Reviews-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="contact.html" style="font-size: 18px;">
            Add your valuable reviews!!<i class="fa fa-arrow-right" style="margin-left: 5px;"></i></a>
    </div>
  </div>
    <br><br><br>

    <!--Footer Code-->

   <footer class="page-footer font-small stylish-color-dark pt-4" style="float: left; text-align: center; width: 100vw; background-color: #131418">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3" style="color: white; text-align: left;">
  
          <!-- Content -->
          <h3 class="text-uppercase" >Health Hunt</h3>
          <p style="color:white;">We do our best to let you reach & experience each corner of the world.</p>
  
        </div>
        <!-- Grid column -->
        
        <!--<hr class="clearfix w-100 d-md-none pb-3">-->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3" style="color: white; text-align: left;">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="home.html">Home</a>
            </li>
            <li>
              <a href="login.html">Log In</a>
            </li>
            <li>
              <a href="signup.html">Sign Up</a>
            </li>
            <li>
              <a href="about.html">About Us</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3" style="color: white; text-align: left;">
  
          <!-- Links -->
          <h5 class="text-uppercase" >Links</h5>
  
          <ul class="list-unstyled" >
            <li>
              <a href="contact.html">Contact Us</a>
            </li>
            <li>
              <a href="testimonial.html">Testimonials</a>
            </li>
            <li>
              <a href="index.html">Health Hunt</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  <hr noshade>
  <div class="container3">
  
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h3 class="mb-1" style="color: white;">Register for free</h3>
      </li>
      <li class="list-inline-item" style="color: white;">
        <a href="signup.html" class="btn btn-outline-white btn-rounded" style="color: white; border-radius: 20px; padding: 8px 20px; background-color: rgb(253, 63, 5);">
            Sign up</a>
            /
            <strong><a href="login.html" style="color:rgb(253, 63, 5) ; font: lighter; letter-spacing: 1.5px;">Login</a></strong>
  
      </li>
    </ul>
    <!-- Call to action -->
  
  </div>
  
  
  <hr noshade>
    <div class="container2">
  
     
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item" >
          <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/" >
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.twitter.com/">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.google.com/">
            <i class="fa fa-google"> </i>
          </a>
        </li>
  
        <li class="list-inline-item">
          <a class="btn-floating btn-in mx-1" href="https://www.instagram.com/">
            <i class="fa fa-instagram" > </i>
          </a>
        </li>
      
       
        <li class="list-inline-item">
          <a class="btn-floating btn- mx-1" href="https://www.linkedin.com/">
            <i class="fa fa-linkedin"> </i>
          </a>
        </li>    
      </ul>
    </div> 
  
     
       <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color: grey; background-color: rgb(29, 28, 28); margin-bottom: -10px; height: 60px; display: flex; align-content: center; justify-content: center; line-height: 30px;">© 2020 Copyright:
      <a href="https://healthhunt.com/" style="color: white">HealthHunt.com</a>
    </div>
  </footer>
  <!-- Footer -->



    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
    </script>
    
</body>
</html>
