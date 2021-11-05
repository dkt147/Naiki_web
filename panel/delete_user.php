<?php


//Checking If button is clicked or not..
if (isset($_GET['id'])) {


  //Getting id from Url...
    $did = $_GET['id'];

  //Connection Stablishing...
   include 'partials/dbconnection.php';
  //Delete Query For Mysql...
    echo $query = "DELETE FROM `register` WHERE r_id = $did";
    $res = mysqli_query($conn, $query);

  //Delete and Redirect to same page...
    header("Location: users_list.php");
  
  //Connection Close...
    mysqli_close($con);
}
