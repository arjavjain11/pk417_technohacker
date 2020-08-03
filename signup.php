<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Enter a proper page title here -->
  <title>Signup</title>

  <!-- CSS to include bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- css to include style.css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito%3Aregular%7CNunito%3A300%2C400%2C600%2C700%2C900%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito%3A300%2C700%2C900%2C600%2C400%7CLato%3A400&amp;display=swap">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- required meta tags essential for seo and link sharing -->

  <!-- Enter a proper description for the page in the meta description tag -->
  <meta name="description" content="ENTER_PAGE_DESCRIPTION">

  <!-- Enter a keywords for the page in tag -->
  <meta name="Keywords" content="ENTER_KEYWORDS_HERE">
    <style>
    .main {
    background-color: #cccccc;
    width: 400px;
    height: 510px;
    margin: 7em auto;
    }
    .sign {
    padding-top: 25px;
    }
    </style>
</head>
<body>
<div class="main">
    <p class="sign text-center">Sign Up</p>
    <form class="form1" method="post">
      <input class="un" type="text" placeholder="Username" name="username"  id="name">
      <input class="un" type="email" placeholder="email" name="email"  id="email">
      <input type="text"  class="un" placeholder="phone no" name="phone"  id="phone">
      <input class="pass" type="password" placeholder="Password" name="password" id="password">
      <select name="users" class="un text-center">
        <option value="farmer">farmer</option>
        <option value="admin">admin</option>
      </select>
      <!-- <input type="hidden" name="signUp" value="1"> -->
      <button class="submit" name="signUp">Sign Up</button>
      <p class="text-center mt-3" style="color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;">Have an Account? <a href="signin.php" style="color:#8C55AA;">Sign in</a></p>
    </form>
    <?php
    $conn= new mysqli("localhost","root","","farmersite");
   if(isset($_POST['signUp'])){
     $name = $_POST['username'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $define_user = $_POST['users'];
    // echo $define_user;
     $password = $_POST['password'];
       $count = "select * from users";
       if($count_res = mysqli_query($conn,$count)){
            $count_row = mysqli_num_rows($count_res);
            $count_row += 1; 
       }
  
     if($name == ''){
       echo "<script>alert('Name is required')</script>";
     //  echo "<script>alert('$define_user')</script>";
     
     }else if(strlen($password)<8){

     	echo "<script>alert('Password should be minimum 8 characters!')</script>";
     
     }else if($phone == ''){
        echo "<script>alert('Phone is required!')</script>"; 
     }else if($email == ''){
        echo "<script>alert('Email is required!')</script>"; 
     }else if($users == ''){
      echo "<script>alert('Define the user type is required!')</script>"; 
   }
     $check_email = "select * from users where user_email = '$email'";
     $run_email = mysqli_query($conn,$check_email);
     $check = mysqli_num_rows($run_email);
     if($check == 1){
     	echo "<script>alert('Email already exist,please try again!')</script>";
     	echo "<script>window.open('signin','_self')</script>";
     }

     $i;
     $token =bin2hex(random_bytes(15));
     $from_ip = $_SERVER['REMOTE_ADDR'];
     $from_browser = $_SERVER['HTTP_USER_AGENT'];
     date_default_timezone_set("Asia/Calcutta");
     $date_now = date("r");
     if($define_user == farmer){
      $insert_user =  "insert into users (f_id,user_name,user_email,user_password,user_phone,from_ip,from_browser,date,token,status) VALUES($count_row,'$name','$email','$password','$phone','$from_ip','$from_browser','$date_now','$token',1);";
     }else{
      $i = $i + 1;
      $insert_user =  "insert into experts (expert_name,expert_email,expert_password,expert_phone,date,from_ip,from_browser,f_id,token,status) VALUES('$name','$email','$password','$phone','$date_now','$from_ip','$from_browser',$i,'$token',0);";
     }
     
     $query = mysqli_query($conn,$insert_user);
     if($query){
     	echo "<script>alert('Congratulations $name, your account has been created sucessfully!')</script>";
     	echo "<script>window.open('signin','_self')</script>";
     }
     else{
     	echo "<script>alert('Registrations failed, Try again!')</script>";
     	echo "<script>window.open('signup','_self')</script>";
     }
   }


?>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script>
      // function record(){
      // var recog = new webkitSpeechRecognition();
      // recog.lang = "en-GB";
      // recog.onresult = function(event){
      //   console.log(event);
      //   document.getElementById('email').value = event.results[0][0].transcript;
      // }
      // recog.start();
      // }
//       if (!('webkitSpeechRecognition' in window)) {
//   upgrade();
//    } else {
//   var recognition = new webkitSpeechRecognition();
//   recognition.continuous = true;
//   recognition.lang = "en-GB";
//   recognition.interimResults = true;

//   recognition.onstart = function() { ... }
//   recognition.onresult = function(event) {
//     console.log(event);
//     document.getElementById('email').value = event.results[0][0].transcript;
//   }
//   recognition.onerror = function(event) { ... }
//   recognition.onend = function() { ... }
// }
// function startDictation(x) {
  
//   if (window.hasOwnProperty('webkitSpeechRecognition')) {

//     var recognition = new webkitSpeechRecognition();

//     recognition.continuous = false;
//     recognition.interimResults = false;

//     recognition.lang = "en-Us";
//     recognition.start();
//     recognition.onresult = function(e) {
//         if(x=="phone" || x=="aadhar")
//             {
//       document.getElementById(x).value = parseInt(e.results[0][0].transcript);
//       recognition.stop();
//             }
//         else{ 
//             document.getElementById(x).value= e.results[0][0].transcript;
//       recognition.stop();
//         }
//      };

//     recognition.onerror = function(e) {
//       recognition.stop();
//     }

//   }


// }

      
    </script>
</body>

</html>

