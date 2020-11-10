

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https;//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url(img/bg2.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .testimonials{
            margin:50px auto;
            width:100vw;
            z-index: -5;
        }
        .testimonials h1{
            text-align: center;
            font-weight: bold;
            color:#ff9800;
            padding-bottom: 10px;
            text-transform:uppercase;
        }
        .testimonials h1::after{
            content: '';
            background: #ff9800;
            display: block;
            height: 3px;
            width:170px;
            margin:20px auto 5px;
        }
        .testimonials .row{
            margin:90px 50px;
           
        }
        .col-md-4{
            margin:50px;
        }
        .profile{
            padding:70px 10px 10px;
            background-color: #efefef;
        }
        .profile img{
            top:-60px;
            position:absolute;
            left: calc(50% -60px);
            border:10px solid white;
        }
        .user{
            width:120px;
            height:120px;
            border-radius:50%;
        }
        .profile h3{
            font-size: 20px;
            margin-top: 15px;
            color: #ff9800
        }
        h3 span{
            font-size:12px;
            line-height: 30px;
            color:olive;
        }
        blockquote{
            font-size:16px;
            line-height: 30px;
        }
        .profile:hover{
            box-shadow: 0 0 15px 15px rgba(0,0,0,0.2);
            cursor:pointer;
            transition:0.5s;
        }
        .icon{
            display: inline-block;
            font-size: 40px;
            color: rgb(23, 182, 182);
            margin-bottom: 20px;
            display: flex;
            justify-content: left;
            opacity: 0.6;
        }
        p{
            color:navy;
            font-weight: bold;
            font-size: 16px;
        }

        .testimonal{
            background:white;
            text-align: center;
            padding: 30px 30px 50px;
            margin: 0 15px 100px;
            position: relative;
            margin-top: 168px;
        }

        .testimonal:before,.testimonal:after{
            content: "";
            border-top: 40px solid white;
            border-right: 125px solid transparent;
            position: absolute;
            bottom: -40px;
            left: 0;
        }

        .testimonal:after{
            border-right: none;
            border-left: 125px solid transparent;
            left: auto;
            right: 0;
        }

        .testimonial .icon{
            display: inline-block;
            font-size: 80px;
            color: rgb(23, 182, 182);
            margin-bottom: 20px;
            opacity: 0.6;
        }

        .description{
            font-size: 18px;
            color: #777;
            text-align: justify;
            margin-bottom: 30px;
        }

        .testimonial-content{
            width: 100%;
            position:absolute;
            left: 0;
        }

        .pic{
            display: inline-block;
            border: 4px solid white;
            border-radius: 50%;
            box-shadow: 0 0 2px 2px orangered;
            overflow: hidden;
            z-index: 1;
            position: relative;
            
        }

        .title{
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-transform: capitalize;
            margin: 0 0 5px 0;
        }

        .post{
            display: block;
            font-size: 16px;
            color: black;
        }

        .pic img{
            width: 100px !important;
            height: 90px;
        }
        article .testimonal{
            margin-top: 5px;
        }
        
        /*Nav Bar Styling*/

        .header{
            width: 100%;
            height: 70px;
            background-color: #131418;
            padding: 0 20px;
            font-family: Arial, Helvetica, sans-serif;
            position: fixed;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            
           
        }
        .header h2{
            line-height: 70px;
            color: white;
            letter-spacing: 1px;
        }
        .header img{
            width: 50px;
            height:50px;
        }
        #check{
            position: absolute;
            visibility: hidden;
            
        }
        .show-btn, .hide-btn{
            display: block;
            font-size: 30px;
            color: white;
            line-height: 70px;
            transition: .4s;
            /*position: absolute;*/
            position: fixed;
            left: 20px;
            top: 2px;
        }
        .hide-btn{
            opacity: 0;
        }
        .menu ul li a:hover{
            
            border-left: 10px solid white;
        }
        .menu li i:hover, .social-sites i:hover , .show-btn:hover, .hide-btn:hover{
            color: skyblue;
        }
        #check:checked ~ .menu{
            left: 0;
        }
        #check:checked ~ .show-btn{
            opacity: 0;
        }
        #check:checked ~ .hide-btn{
            opacity: 1;
        }

        #check:checked ~ .testimonials{
            width: 80%;
        }
        .menu{
            position: fixed;
            top: 70px;
            left: -100%;          /*slider-effect*/
            width: 20%;
            height: 100%;
            background-color:#333;
            text-align: left;
            /*padding: 10px 0px;*/
            transition: .7s;
            line-height: normal;
        }
            
        .menu li{
            display: block;
            line-height: 60px;
            border-bottom: 1px solid grey;
           
        }
        .menu li a{
            display: block;
            text-decoration: none;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
            padding: 0px 20px;
            transition: .4s;
        }
        .menu li i{
            margin-right: 15px;
        }
    
        .testimonials{
           /* width: 100%;
            padding:95px 20px;*/
            float: right;
            transition: .7s;
           
        }
        
        .social-sites{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-size: 30px;
            border-bottom: 2px solid rgba(255, 255, 255, .1);
            border-top: 2px solid rgba(255, 255, 255, .1);
            padding: 15px 25px;
            margin-top: 200px;
        }

        i{
            font-size: 30px;
            color: white;
        }
        @media(max-width: 768px) {
            .menu{
                width: 100%;
                text-align: center;
            }
            .menu .social-sites{
                margin-top: 600px;
            }
            .header h2{
                display: none;
            }
            .col-md-6{
                margin:50px;
                margin-top: 70px;
            }

        }

        /*Footer Styling*/
        footer{
            position: relative;
            z-index: -100;
            
        }

        .container2 .fa:hover{
            opacity: 0.7;
        }
        .container2 .fa{
          padding: 15px;
          font-size: 30px;
          width: 62px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
        }


        .container2 .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .container2 .fa-linkedin {
          background: #007bb5;
          color: white;
        }

        .container2 .fa-instagram {
          background: #91132e;
          color: white;
        }

        .container2 .fa-twitter {
          background: #55ACEE;
          color: white;
        }

        .container2 .fa-google {
          background: #dd4b39;
          color: white;
        }
        .container3 a:hover{
          opacity: 0.7;
        }
        .list-unstyled li a{
            color: white;
        }
        hr{
            opacity: .3;
            
        }

        
    </style>
</head>
<body>
    <div class="header">
        <img src="images/logo.jpg" alt="_blank">
        <h2>HEALTH HUNT</h2>
    </div>
    
        <input type="checkbox" id="check">
        <label for="check" class="show-btn">
            <i class="fa fa-bars" ></i>
        </label>
        <label for="check" class="hide-btn">
                
            <i class="fa fa-times"></i>
        </label>
        <div class="menu">
        <ul>
            <li ><a href="#"><i class="fa fa-home"></i>Home</a></li>
          
            <li><a href="#"><i class="fa fa-user"></i>About</a></li>
            
            <li><a href="#"><i class="fa fa-tasks"></i>Services</a></li>
            
            <li><a href="#"><i class="fa fa-rss"></i>Blog</a></li>
            
            <li><a href="#"><i class="fa fa-id-card"></i>Contact</a></li>
            
            <div class="social-sites">
                
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-square"></i></a>
                
            </div>
        </ul>
    </div>
    <section class="testimonials">
        <div class="container">
            <h1>Our Community</h1>
            <p class="text-center">At your service | Healing hands | Trusted treatment | Professional and affordable | Changing lives | For a healthy society</p>
            <div class="row">
                <div class="col-md-6 text-center" style="z-index: -5;">
                    <div class="profile">
                        <img src="images/peep1.webp" class="user">
                        <span class="icon fa fa-quote-left"></span><blockquote> Like this page for getting various informations on daily health routine. For any further queries subscribe our page.
                             Don't forget to like our page.</blockquote>
                        </blockquote>
                        <h3>Aishwarya Singh <span>Founder at HealthHunt</span></h3>
                    </div>
                </div>
                <div class="col-md-6 text-center" style="z-index: -5;">
                    <div class="profile">
                        <img src="images/Simran.jpeg" class="user">
                         <span class="icon fa fa-quote-left"></span><blockquote> Like this page for getting various informations on daily health routine. For any further queries subscribe our page.
                             Don't forget to like our page.</blockquote>
                        </blockquote>
                        <h3>Simran Maurya <span>Founder at HealthHunt</span></h3>
                    </div>
                </div>
            </div>
        </div>

        <article class="container">  
            <h1>See why customers trust us</h1>
            <p class="text-center">We believe in spreading smiles of GOOD HEALTH.</p>
                <div class="row">
                    <div id="testimonials-slider" class = "owl-carousel"  style="z-index: -5;">
                        <div class="testimonal">
                            <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea assumenda ad ullam reiciendis. Omnis nesciunt quasi debitis suscipit eligendi rem.
                                </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="images/peep4.jpg" alt="">
                                </div>
                                <h3 class="title">Michael Clarke</h3>
                                <span class="post"> Teacher </span>
                            </div>
                        </div>
    
                        <div class="testimonal">
                            <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea assumenda ad ullam reiciendis. Omnis nesciunt quasi debitis suscipit eligendi rem.
                                </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="images/peep3.jpg" alt="">
                                </div>
                                <h3 class="title"> Mary Stuart </h3>
                                <span class="post"> Motivational Speaker</span>
                            </div>
                        </div>
    
                        <div class="testimonal">
                            <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea assumenda ad ullam reiciendis. Omnis nesciunt quasi debitis suscipit eligendi rem.
                                </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="images/peep1.webp" alt="">
                                </div>
                                <h3 class="title">Kilbert D'Souza</h3>
                                <span class="post">  Bussinesswoman </span>
                            </div>
                        </div>
    
                        <div class="testimonal">
                            <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea assumenda ad ullam reiciendis. Omnis nesciunt quasi debitis suscipit eligendi rem.
                                </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="images/peep5.jpg" alt="">
                                </div>
                                <h3 class="title"> Samuel Fams</h3>
                                <span class="post">Service Man</span>
                            </div>
                        </div>
    
                        <div class="testimonal">
                            <span class="icon fa fa-quote-left"></span>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea assumenda ad ullam reiciendis. Omnis nesciunt quasi debitis suscipit eligendi rem.
                                </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="images/peep6.jpg" alt="">
                                </div>
                                <h3 class="title">Tom Holland </h3>
                                <span class="post"> Reporter</span>
                            </div>
                        </div>
    
    
                    </div>
                </div>
        </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
    $(document).ready(function(){

        $("#testimonials-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,3],
            itemsDesktopSmall: [979,2],
            itemsTablet:[768,2],
            itemsMobile:[650,1],
            pagination: true,
            autoPlay:true
        })

    });
   </script>
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
              <a href="testimonials3.html">Testimonials</a>
            </li>
            <li>
              <a href="imageGallery.html">Gallery</a>
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
    <div class="footer-copyright text-center py-3" style="color: grey; background-color: rgb(29, 28, 28); margin-bottom: -10px; height: 30px; display: flex; align-content: center; justify-content: center; line-height: 30px;">© 2020 Copyright:
      <a href="https://healthhunt.com/" style="color: white">HealthHunt.com</a>
    </div>
   
  
   
  
    
    
  </footer>
  <!-- Footer -->
    
</body>
</html>