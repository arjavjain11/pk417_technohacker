<?php
  $conn= new mysqli("localhost","root","","farmersite");
  // $conn= new mysqli("localhost","parvinder","pzxuTAmsgGR3","test_finstreet_courses");
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }


?>