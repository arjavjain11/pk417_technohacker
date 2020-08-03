<?php
    require_once 'php/db.php';

    if(isset($_POST['userquery'])){

        $data = array();      
        $userquery = mysqli_real_escape_string($conn, $_POST['userquery']) ;
        $userid = mysqli_real_escape_string($conn, $_POST['userid']) ;


        $query = "INSERT INTO `farmer_query` (farmer_id, `farmer_query`) VALUES ($userid, '$userquery')";

        if(!$result = $conn->query($query)){
            die('Error occured [' . $conn->error . ']');
    
            }
            else{
                $data['status'] = 201;
                echo json_encode($data);
     
            
            }
        }

        // $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `f_id` = '$userid'");

        // if (mysqli_num_rows($result) !=0 ) { 
        //     while ($row = mysqli_fetch_array($result)) {
        //     $data['status'] = 201;
        //     $data['f_id'] = $row['f_id']; 
        //     $data['user_name'] = $row['user_name'];
        //     $data['user_phone'] = $row['user_phone'];
        //     $data['token'] = $row['token'];

?>