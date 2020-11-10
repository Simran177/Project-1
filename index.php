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
    <title>HealthHunt</title>
    <link rel="stylesheet" type="text/css" href="styling.css">
    <style>
    #cf6_image {
  margin:0 auto;
  width:100%;
  height:100%;
  transition: background-image 1s ease-in-out;
  background-image:url("images/h1.jpg");
  background-size: cover;
 background-position: center;
}

#cf6_image:hover {
  background-image:url("images/h3.jpg");
  background-size: cover;
 background-position: center;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="images/logo.jpg" style="padding-bottom: 40px;padding-right: 10px;">Health Hunt</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Home</a></li>
                    <li><a href="login.php" target="_blank"><span class="glyphicon glyphicon-log-in"></span>Login</a><li>
                    <li><a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="contactUs.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="cf6_image" class="shadow">
       
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="background">
                        <div id="content">
                    <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 500px;">Heart to Heart</h1 >
                    <h4 style="font-style: italic; font-weight:400px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">You can't control what goes on outside,
                     but you <strong>CAN</strong> control what goes on inside</h4>
                    <hr>
                    <a href="home.html" target="_blank"><button" class="btn btn-success btn-lg">Explore Now</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
                <p style="text-align: center;">Copyright Â© HealthHunt. All Rights Reserved and Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>
</html>