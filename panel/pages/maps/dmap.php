<?php include 'dbconnection.php';?>
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
      #map {
        position: absolute;
        top: 50px;
        bottom: 50px;
        right: 0;
        left: 230px;
      }
    </style>
  </head>

  <body>
    <div id="map" ></div>
<!-- <table>
<thead>
  <th>Value</th>
  <th>Key</th>
</thead>
<tbody id="load-table">

</tbody>
</table> -->


<script type="text/javascript" src="js/jquery.js"></script>

<script>
       // window.alert("a");
            // a += value[2];
            // a.push(key);
            // b.push(key);
            // window.alert(a+b);
            
      //This is to set the view of graph...
      var map = L.map("map").setView([24, 67.1146619713956], 6);

L.tileLayer(
  "https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=b3GSUSUhp2uFh8O4gSPm",
  {
    attribution:
      '<<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>`',
  }
).addTo(map);


//Doing Dynamic Multiple Indications..

// for (let i in a) {
//   L.marker([a[i],b[i]]);
// }
// console.log(a);
// console.log(b);
// for(let i=0;i<28;i++)
//  {
// console.log(c);
//  }

<?php

include 'dbconnection.php';
$sql = "SELECT 
users.Id,users.Name,users.Altitude,users.Latitude,users.Contact
FROM `donation` INNER JOIN users ON users.Id=donation.u_id";
$result = mysqli_query($conn,$sql) or die("Failed");

if (mysqli_num_rows($result) > 0) {

while ($output = mysqli_fetch_assoc($result)) 
{
      ?>
      L.marker([<?php echo $output['Altitude']?>,<?php echo $output['Latitude']?>])
      .addTo(map)
      
<?php
}
}
else
{
	echo ("No Record Found");
}
?>

  // .bindPopup("Vehicle Name")
  // .openPopup();

// L.circle([24.862391206176955, 67.02924941145207], {
//   color: "red",
//   fillcolor: "#f03",
//   fillOpacity: 0.5,
//   radius: 10000,
// })
//   .addTo(map)
//   .bindPopup("I Am A Circle.")
//   .openPopup();
</script>
   

<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>
</html>