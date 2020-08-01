<html>

<head>


  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="font/font.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Login</title>
</head>

<body>
  <div class="main">
    <p class="sign text-center mb-5">Login</p>
    <p class="bg-success"><?php if(isset($_SESSION['msg'])){
          echo  $_SESSION['msg'];
    }
      ?></p>
    <form class="form1" method="post">
      <input class="un text-center" type="email" name="email" placeholder="User Email">
      <input class="pass text-center" type="password" name="password" placeholder="Password">
      <button class="submit text-center" name="signin">Login</button>
      <div class="forgot text-center" ><a href="recover_password.php" style="color:#8C55AA;">Forgot Password?</a></div>

    </form>
    <?php
 $conn= new mysqli("localhost","root","","farmersite");
 session_start();
 if(isset($_POST['signin'])){
 	$email = htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
 	$password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));
 	$user_login = "select * from users where user_email = '$email' and user_password = '$password'";
 	$user_login_query = mysqli_query($conn,$user_login);
 	$check_query = mysqli_num_rows($user_login_query);
  echo $check_query;
 	if($check_query == 1){
       $_SESSION['user_email'] =$email;
      
       $user = $_SESSION['user_email'];
       $get_user = "select * from users where user_email='$user'";
       $run_user = mysqli_query($conn,$get_user);
       $row = mysqli_fetch_array($run_user);
       $user_name = $row['user_name'];
       echo "<script>window.open('home.php?user_name=$user_name','_self')</script>";
        	}else{
        		echo "<script>alert('check your email and password!')</script>";
        	}
 }
?>
  </div>

</body>

</html>