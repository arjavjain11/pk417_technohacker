<?php
session_start();
$conn= new mysqli("localhost","root","","farmersite");
if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
   }else{
   	$user_email = $_SESSION['user_email'];
   $q = "select * from users where user_email = '$user_email'";
   $run = mysqli_query($conn,$q);
  $row = mysqli_fetch_row($run);
  $username = $row[1];
  $userid = $row[0];
  $userimage = $row[5];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="backend/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .user-panel img {
    height: 0;
    width: 0;
}
.user-panel .imginfo {
    height: 50px;
    width: 50px;
}
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="home.php" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- SEARCH FORM -->
      <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <h3 style="font-size: 20px; color: #fff; text-transform:  uppercase;"></h3>


      <!-- Sidebar -->
      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="row">
            <div class="col-6 text-center">
            <?php  if(isset($userimage)){ ?>
            <img src="images/<?php echo $userimage; ?>" class="imginfo" style="border-radius: 50%;">

          <?php }else{

          }  ?>
            </div>
            <div class="col-6 d-flex">
            <h5 style="color: #fff; font-size:20px; text-transform: capitalize; align-items:center;" class="d-flex text-center"><?php echo $username; 
                 ?></h5>
            </div>
          </div>


        
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Farmer Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

            </li>

            <li class="nav-item">
              <a href="home.php?farmer_input=<?php echo $userid;?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Farmer Input</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="home.php?edit_profile=<?php echo $userid;?>" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>Edit Profile</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="home.php?change_password=<?php echo $userid;?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change password</p>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link bg-primary text-center ml-5 mr-5" style="border-radius: 5px;" href="logout.php"
                role="button">logout</a>
            </li>


          </ul>
        </nav>
      </div>

    </aside>




    <div class="content-wrapper">

      <?php

    if(isset($_GET['edit_profile'])){
      include("edit_profile.php");
          } 

          if(isset($_GET['change_password'])){
            include("change_password.php");
                }

                  if(isset($_GET['farmer_input'])){
                    include("farmer_input.php");
                        }


          ?>
    </div>







    <footer class="main-footer">
      <strong>Technohackers</strong>

      <div class="float-right d-none d-sm-inline-block">
        Farmers Helper
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>



  <script src="backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <script src="backend/dist/js/adminlte.js"></script>

  <!-- <script src="backend/dist/js/pages/dashboard.js"></script> -->

  <script src="backend/dist/js/demo.js"></script>

  <script>

  </script>
</body>

</html>
<?php } ?>