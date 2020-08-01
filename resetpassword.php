<?php
           $conn= new mysqli("localhost","root","","farmersite");
           if(isset($_POST['recover'])){
               if(isset($_GET['token'])){
                   $token = $_GET['token']; 
               }
            $newpass = htmlentities(mysqli_real_escape_string($conn,$_POST['newpassword']));    
            $confmpass = htmlentities(mysqli_real_escape_string($conn,$_POST['confmpassword']));
                if($newpass === $confmpass){
                    $update = "update users set user_password = '$newpass' where token = '$token'";
                    $update_query = mysqli_query($conn,$update);
                    if($update_query){
                           $_SESSION['msg'] = "your password has been successfully changed";
                           header('location:signup.php');
                    }else{
                        $_SESSION['passmsg'] = "your password is not updated";
                        header('location:resetpassword.php');
                    }
                }else{
                   
                    $error = "Password and Confirm password fields do not match<br>";
                        $error = "<p>There were error(s) in your form:</p>".$error;
                       
                   
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

  <title>Change Password</title>
</head>

<body>
  <div class="main" style="border-radius: 15px;">
  
    <p class="sign text-center mb-2">Recover Your Account</p>
    <div id="error">
              <?php if (isset($error)) {
                  echo '<div class="alert alert-danger mx-3" role="alert">'.$error.'</div>';
                  
              } ?>
          </div>
    <p class="bg-danger"><?php 
    if(isset($_SESSION['passmsg'])){
          echo  $_SESSION['passmsg'];
    }else{
        echo $_SESSION['passmsg'] = '';
    }
      ?>
    <form class="form1" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
    <input class="pass text-center" type="password"  name="newpassword" placeholder="New Password">
      <input class="pass text-center" type="password" name="confmpassword" placeholder="Confirm Password"> 

      <button class="submit text-center"  style="margin-left: 27%;" name="recover">Update Password</button>   
    </form>

  

  </div>

</body>

</html>