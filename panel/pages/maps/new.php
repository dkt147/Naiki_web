
<?php

include 'dbconnection.php';
$sql = "SELECT 
users.Id,users.Name,users.Altitude,users.Latitude,users.Contact
FROM `request` INNER JOIN users ON users.Id=request.u_id";
$result = mysqli_query($conn,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {

while ($output = mysqli_fetch_assoc($result)) 
{
      echo "asdkasjkd";
}
}
else
{
	echo ("No Record Found");
}
?>