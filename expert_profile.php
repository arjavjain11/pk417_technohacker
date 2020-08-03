<?php

$conn= new mysqli("localhost","root","","farmersite");
if(isset($_GET['expert_profile']))
{   
 $id = $_GET['expert_profile'];
   $q = "select * from experts where expert_id = '$id' ";
   $query = mysqli_query($conn,$q);
   if($query){
    $data = mysqli_fetch_assoc($query);
   }
}
if(isset($_POST['update'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
 $qualification = $_POST['qualification'];
 if(isset($_FILES['image'])){
  $image= $_FILES['image']['name'];
  $image_temp=$_FILES['image']['tmp_name'];
}

if($image_temp != "")
{    $folder = "images/".$image;
 
   move_uploaded_file($image_temp , $folder);
   
   $query = "UPDATE experts SET expert_name = '$name' , expert_email = '$email', expert_phone = '$phone',expert_qualification = '$qualification', expert_address = '$address', expert_image = '$image' where expert_id = $id";
}else
{
 $query = "UPDATE experts SET expert_name = '$name' , expert_email = '$email', expert_phone = '$phone',expert_qualification = '$qualification', expert_address = '$address' where expert_id = $id";
}
$run_update=mysqli_query($conn, $query);

if ($run_update){
    // echo "query updated successfully";
}else
echo "<script>alert('Something went wrong!please try again!')</script>"; 
}
?> 
<div class="container">
  <div class="row mt-5">
    <div class=" offset-col-2 col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update your profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="expert_dash.php?expert_profile=<?php echo $userid;?>" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput1">Name</label>
                    <input type="text" class="form-control" id="" name="name" value="<?php echo $data['expert_name']; ?>" placeholder="Your full Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput2">Email</label>
                    <input type="email" class="form-control" id="" name="email" placeholder="Your Email" value="<?php echo $data['expert_email']; ?>">
                  </div>                   
                  <div class="form-group">
                    <label for="exampleInput3">Mobile No</label>
                    <input type="number" class="form-control" id=""  name="phone" placeholder="Mobile No" value="<?php echo $data['expert_phone']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput4">Address</label>
                    <input type="text" class="form-control" id="" name="address" placeholder=" Your Address" value="<?php echo $data['expert_address']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput5">Qualification</label>
                    <input type="text" class="form-control" id="" name="qualification" placeholder="Your qualification" value="<?php echo $data['expert_qualification']; ?>">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInput7">Image</label>
                   
                    <img  src="images/<?php echo $data['expert_image'] ?>" width="150" height="150" style="border-radius: 50%;" >
                    <input type="file" class="form-control" id="exampleInput" name="image" >
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">Farm Area</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name="update" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         </div>
  </div>
</div>
<?php

?>

