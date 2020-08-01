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
    <p class="sign" align="center">Change Password</p>
    <form class="form1" method="post">
      <input class="pass" type="password" align="center" name="password" placeholder="Old Password">
      <input class="pass" type="password" align="center" name="npassword" placeholder="New Password">
      <input class="pass" type="password" align="center" name="cnpassword" placeholder="Confirm Password">
      <button class="submit" align="center" style="margin-left: 27%;" name="chpass">Change Password</button>
        
    </form>

    <?php
session_start();
$id = $_SESSION["id"];/* userid of the user */
$con = mysqli_connect('localhost','root','','farmersite') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from users WHERE name='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["Password"] == $row["password"] && $_POST["nPassword"] == $row["cnPassword"] ) {
mysqli_query($con,"UPDATE users set password='" . $_POST["nPassword"] . "' WHERE name='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

  </div>

</body>

</html>