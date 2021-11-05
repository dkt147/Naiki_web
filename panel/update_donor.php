<?php

//Checking if button is clicked or not...
if (isset($_POST['edit'])) {

	 $id = $_POST['r_id'];
     $pId = $_POST['uname'];
     $bId = $_POST['uemail'];
     $tId = $_POST['upass'];
     $uId = $_POST['uaddress'];
     $tDate = $_POST['uphone'];
     
    //Connection Stablishing...    
  include 'partials/dbconnection.php';
//Update Query For Mysql...
   $query = "UPDATE register SET uname = '$pId' , uemail = '$bId', upass = '$tId' , 	uaddress = '$uId' , uphone = '$tDate'  WHERE r_id = $id";
    $res = mysqli_query($conn, $query);

    //Redirection to another page...
    header("Location: donator.php");

//Connection Close...
    mysqli_close($con);
}

?>