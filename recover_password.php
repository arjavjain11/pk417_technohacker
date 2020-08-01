<?php
           $conn= new mysqli("localhost","root","","farmersite");
           if(isset($_POST['recover'])){
         
            $email = htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
            $email_check = "select * from users where user_email = '$email'";
 	         $email_check_query = mysqli_query($conn,$email_check);
             $email_exists = mysqli_num_rows($email_check_query);
             if($email_exists){

               $row = mysqli_fetch_array($email_check_query);
                 $username = $row['user_name'];
                 $token = $row['token'];
                $subject = "Password Reset";
                     
                $body = "Hi "  .$username. " check here to activate your account
                http://localhost/farmersite/resetpassword.php?token=$token";
                     
                $headers = "From: jainchandni8938@gmail.com";
                     
                if (mail($email, $subject, $body, $headers)) {
                    $_SESSION['msg'] = "check your mail to recover your account";
                          echo "<script>alert('Email was successfully send to the user');</script>";    
                     } else {
                         
                          echo "<script>alert('Something went wrong in sending the email ! please try again')</script>";
                          echo "<script>window.open('signin.php','_self')</script>";   
                     }
             }else{
                echo "<script>alert('check your email and password!')</script>";
             }
           }
     ?>
<html>

<head>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="font/font.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Forgot Password</title>
</head>

<body>
  <div class="main" style="border-radius: 15px;">
    <p class="sign text-center">Recover Your Account</p>
    <!-- <p class="pt-3 text-center" style="color:#8C55AA;">please fill your email id properly</p> -->
    <p class="pt-3 text-center " style="color:#8C55AA;"><?php 
    if(isset($_SESSION['msg'])){
          echo  $_SESSION['msg'];
    }else{
        echo $_SESSION['msg'] = '';
    }
      ?>
    
    <form class="form1" method="post">
      <input class="un text-center mt-3" type="email" name="email" placeholder="User Email">

      <button class="submit text-center"  style="margin-left: 27%;" name="recover">Send a mail</button>   
    </form>

  
  </div>

</body>

</html>
