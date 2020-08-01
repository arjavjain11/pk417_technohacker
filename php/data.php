<?php
include("db.php");
if(isset($_GET['submit-soil'])){
    $soil = $_GET['soilname'];
    // echo $soil;
    $q = "select  * from soiltype where soil_name = '$soil' ";
    $r = mysqli_query($conn, $q);
    $row = mysqli_fetch_row($r);
   $user_select_id = $row[2]; // 42
// echo $row[1];
    
  
}else{
    echo "<script>alert('error')</script>";
    echo "<script>alert('Please select a soil for info')</script>";

    echo "<script>window.open('showdata.php','_self')</script>";
}

?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/styling.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body>


	 		<div class="container-fluid">
	 			<!-- container fluid start -->
                 <div class="container">
                 <div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->
 <div class="panel panel-danger" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

   Data Related to that soil
</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->
 <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>ID</th>
<th>Crop</th>
<th>Season</th>
<th>Fertilizer</th>
</tr>

</thead>

<tbody>

<?php
$i = 0;

$get_data = "select * from detail where soil_id = $user_select_id";
    $run_data = mysqli_query($conn, $get_data);
    while($row_data=mysqli_fetch_array($run_data)){
        $id = $row_data['id'];
        $crop = $row_data['crop'];
        $season = $row_data['season'];
        $fertilizer = $row_data['fertilizer'];
        
$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $crop; ?></td>

<td><?php echo $season; ?></td>

<td><?php echo $fertilizer; ?></td>




</tr>
<?php } ?>




</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->





                 </div>
	 		</div><!-- container fluid -->
	 	
	<script src="../js/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>
</body>
</html>
