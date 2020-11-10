<?php
  $con= mysqli_connect('localhost','root');
  if($con){
      echo "connection successful";
  }
  else{
      echo "No connection";
  }
  
  mysqli_select_db($con, 'miniproject1');
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $email_id= $_POST['email_id'];
   $password= $_POST['password'];
   
   $query = "INSERT INTO `user_info`(`fname`, `lname`, `email_id`, `password`) VALUES ('$fname','$lname','$email_id','$password')";
   
   echo "$query";
   mysqli_query($con, $query);
   
   
  ?>