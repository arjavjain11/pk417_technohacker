<?php

$conn= new mysqli("localhost","root","","farmersite");
if(isset($_GET['farn
mer_input']))
{   
 $id = $_GET['farn
 mer_input'];
  //  $q = "select * from users where id = '$id' ";
  //  $query = mysqli_query($conn,$q);
  //  if($query){
  //   $data = mysqli_fetch_assoc($query);
  //  }
  //   echo $data['user_image'];
   

}

?>
<div class="container">
  <div class="row mt-5">
    <div class=" offset-col-2 col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Input from farmer</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="home.php?edit_profile=<?php echo $userid;?>"
          enctype="multipart/form-data">
          <div class="card-body">
            
            <div class="form-group">
              <label for="exampleInput4">District</label>
              <input type="text" class="form-control" id="" name="district" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="exampleInput5">Farm region</label>
              <select class="custom-select" id="validationCustom" name="farmregion" required>
                <option selected disabled value="">Choose the farm area Region.</option>
                <option value="Champaran Region">Champaran Region</option>
                <option value="Kishangung Region">Kishangung Region</option>
                <option value="Champaran District Region">Champaran District Region</option>
                <option value="Border of Nepal Region">Border of Nepal Region</option>
                <option value="Balthar Region">Balthar Region</option>
                <option value="South east Bihar Region">South east Bihar Region</option>
                <option value="Patna area region">Patna area region</option>
                <option value="Banka Region">Banka Region</option>
                <option value="Gaya Region">Gaya Region</option>
                <option value="Aurangabad Region">Aurangabad Region</option>
                <option value="Jamui Region">Jamui Region</option>
                <option value="Munger Region">Munger Region</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInput4">Field area in hectares</label></label>
              <input type="text" class="form-control" id="" name="fieldarea" placeholder="Field area in hectares">
            </div>
            <div class="form-group">
              <label for="exampleInput6">Previous Crop</label>
              <input type="text" class="form-control" id="" name="crop" placeholder="your district">
            </div>

            <div class="form-group">
              <label for="exampleInput7">Month</label>

              <select class="custom-select" id="validationCustom04" name="month" required>
                <option selected disabled value="">Choose the Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInput7">Result of your production</label>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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
            <button type="submit" name="update" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
      <!-- /.card -->

    </div>
  </div>
</div>
<?php
if(isset($_POST['insert_input'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $fieldarea = $_POST['fieldarea'];
 $district = $_POST['district'];
 $farmregion = $_POST['farmregion'];

 $crop =$_POST['crop'];
 $month = $_POST['month'];
 
 $query = "UPDATE users SET user_name = '$name' , user_email = '$email', user_phone = '$phone', user_address = '$address', user_farmarea = '$farmarea', user_district = '$district' where id = $id";

$run_update=mysqli_query($conn, $query);

if ($run_update)
    echo "query updated successfully";
else
echo "<script>alert('Email is required!')</script>"; 
}
?>