<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <title>Log In</title>
    <style>
        *{
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            /*background-image: url(img/patrick-hendry-w5SgojGZooI-unsplash.jpg);*/
            background: #466368;
            background: radial-gradient(#648880, #293f50);
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        /*.txtcontainer{
            background: #466368;
            background: radial-gradient(#648880, #293f50);
            height: 80px;
        }
        .txtcontainer h1{
            display: flex;
            text-align: center;
            justify-content: center;
            line-height: 80px;
        }*/
        
        footer{
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 30px;
            font-size: small;
            background: rgba(255, 255, 255, 0.801);
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            bottom: -10;
        }
        
        /* Bordered form */
       /* form {
        border: 3px solid rgba(0, 0, 0, 0.6);
       
        
        }*/

        /* Full-width inputs */
        input[type=email], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        /*border: 1px solid #ccc;*/
        box-sizing: border-box;
        
        }

        /* Set a style for all buttons */
        button {
        background-color: #2196f3;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
        opacity: 0.8;
        }

        input[type=email]:hover {
        opacity: 0.8;
        }

        input[type=password]:hover {
        opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        }
        a{
            text-decoration: none;
            color: white;

        }
        a:hover{
            opacity: 0.8;
            color: white;
            text-decoration: none;
        }
        /* Center the avatar image inside this container */
        .txtcontainer {
        text-align: center;
        margin: 0px;
        }



        /* Add padding to containers */
        .container {
        padding: 16px;
        }

        /* The "Forgot password" text */
        span.psw  {
        float: right;
        padding-top: 16px;
        text-decoration: none;
        }
        span.psw a{
            text-decoration: none;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
            text-decoration: none;
            
        }
        span.psw a{
            text-decoration: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
        #back a{
            text-decoration: none;
            color: white;
           
        }

        
    </style>
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="yy12DFfd"></script>
    
    
            <!--Search Bar-->
            <!--<form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>-->
           
    
    <form action="validation.php" method="post" style="width: 550px;">
        
        <div class="txtcontainer">
                <h1 style="color:rgba(253, 253, 253, 0.952); font-size: 50px; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);">Log In</h1>
        </div>
        
      
        <div class="container">
          <!--<label for="eadd" style="color: white; text-shadow: 1px 1px 1px black; font-weight:500; letter-spacing: 1px; margin-bottom: -8px;" ><b>Email Address</b></label>-->
          <input type="email" placeholder="Enter Username" name="email_id" required>
      
          <!--<label for="psw" style="color: white; text-shadow: 1px 1px 1px black; font-weight:500; letter-spacing: 1px; margin-bottom: -8px;"><b>Password</b></label>-->
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" >
          <a href="index.html" type="button" class="cancelbtn">Cancel</a>
          <span class="psw" style="color: white;">Forgot <a href="#" style="color: white;font-weight: bolder; letter-spacing: 0.7px;">password?</a></span>
        </div>
     
        <div id="back" style="text-align: center; color: white; margin-top: 20px;">
            <!--<a href="index.html">Back</a>
            |--> Need an account?
            <a href="signup.html" style="font-weight: bolder; color:white; letter-spacing: 0.7px;">Sign Up</a>
        </div>
        
      <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true" style="display: flex; align-items: center;justify-content: center; margin-top: 10px;"></div>

     
      </form>
    <footer>
        Copyright © Health Hunt. All Rights Reserved and Contact Us: +91 90000 00000
    </footer>
    
</body>
</html>