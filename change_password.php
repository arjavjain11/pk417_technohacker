<?php

$conn= new mysqli("localhost","root","","farmersite");
if(isset($_GET['change_password']))
{   
 $id = $_GET['change_password'];
 //echo $id;
 
   $q = "select * from users where id = '$id' ";
   $query = mysqli_query($conn,$q);
   if($query){
    
   }
    $data = mysqli_fetch_assoc($query);
   $password = $data['user_password'];
   //echo $password;

}
?> 
<div class="container">
  <div class="row mt-5">
    <div class=" offset-col-2 col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change your password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput1">Old Password</label>
                    <input type="text" class="form-control" id="exampleInput1" name="oldpass" placeholder="Your old password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput2">New Password</label>
                    <input type="text" class="form-control" id="exampleInput2" name="newpass" placeholder="Your New password">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInput3">Confirm New password</label>
                    <input type="text" class="form-control" id="exampleInput4"  name="confmpass" placeholder="confirm password">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="changepass" class="btn btn-primary">Change Password</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         </div>
  </div>
</div>
<?php
if(isset($_POST['changepass'])){
   $old = $_POST['oldpass'];
  // echo $old;
   $new = $_POST['newpass'];
  // echo $new;
   $confm = $_POST['confmpass'];
 //  echo $confm;
    if($password === $old){
      if($new === $confm){
      $query = "UPDATE users SET user_password = '$confm' where id = $id";
      $run_update=mysqli_query($conn, $query);
      echo "<script>alert('password updated successfully!')</script>";
      
      }else{
        echo "<script>alert('password does not match!')</script>";
      }
    }else{
      echo "<script>alert('old password don't match !')</script>";
     	echo "<script>window.open('signin','_self')</script>";
     }
    }

?>

