<?php
include("db.php");
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
                 <form method="get" action="data.php">
 
 <select name="soilname" id="soiltype" class="form-control" onchange="soiltype(this.value)">
         <option>please select a soil type </option>
         <option value="Terai soil">Terai soil</option>
         <option value="Gangetic Alluvium">Gangetic Alluvium</option>
         <option value="Balthar">Balthar</option>
         <option value="Tal">Tal</option>
         <option value="Karail Kowal Soil">Karail Kowal Soil</option>
         <option value="Red and Yellow">Red and Yellow</option>
         <option value="Red Sandy">Red Sandy</option>
       </select>
 
 <input type="submit" class="btn btn-dark" name="submit-soil">
 </form>





                 </div>
	 		</div><!-- container fluid -->
</div>
	<script src="../js/jquery.min.js"></script>

<script src="../js/bootstrap.min.js"></script>
</body>
</html>
