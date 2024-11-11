<!DOCTYPE html> <?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['aname'])){
        header('location:index.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_schedule10.css"/>
</head>
    <body>
        <form action="new_schedule.php" method="post" >
    <div class="fullnav">   
    
        <ul>
        <li class="li">&nbsp;RRS</a></li><br><hr>
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin_user.php">User</a></li>
            <li><a href="admin_schedules.php">Schedules</a></li>
            <li><a href="admin_routes.php">Routes</a></li>
            <li><a href="admin_trains.php">Trains</a></li>
            <li><a href="admin_reservation.php">Reservation</a></li>
            <li><a href="admin_payment.php">Payment</a></li>
            <li><a href="admin_feedback.php">Subscribe</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
<div class="fullside"><br><br><br>
<p id="p0">Railway Reservation System</p><br><hr>
<p id="p1">Administrator Dashboard</p>
<p id="p2">&nbsp;&nbsp;&nbsp;&nbsp;All Dynamic Schedules





    <input type="submit" value="Add New One-Time Schedule"  formaction= "add_sediual.php"/> 
</p>

<?php


/// fach data in fromsql

require 'db11.php';


    $query ="SELECT * FROM trains";
    // $query = "SELECT * FROM `scheduletb` WHERE `Train_Number` LIKE '22953'";
    // $query= "SELECT * FROM `trains`";

    // $query= "SELECT * FROM `scheduletb` INNER JOIN station ON `scheduletb`.`Train_Number` = `station`.`Station`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


         
         foreach ($options as $option) {

            
            
          
            
         }
                //  mysqli_close($conn);
            ?>
            </select>
      

            <?php 
            $i = 0;
            while($i > 5 )
            echo $i++;
// $srctrain = $_POST['srctrain'];



?>


<table>


<tr>
    <th>ID</th>
    <th>Name</th>
    <th>PNR Number</th>
    <th>Train Number</th>
    <th>Train Name</th>
    <th>Date</th>
    <th>Class</th>
    <th>From</th>
    <th>To</th>
    <th>Total Price</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Passenger Name</th>
    <th>Passenger Age</th>
    <th>Gender</th>
    <th>Passenger Seat</th>
 </tr>


    <?php
 include("db11.php");


$sql = "SELECT * FROM `resavetion` ORDER BY `resavetion`.`pnrnum` ASC";


$result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) {
    
     


    echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["uname"]. "</td><td>" . $row["pnrnum"]. "</td><td>" . $row["BTrain_Number"]. "</td><td>" . $row["BTrain_Name"]. "</td><td>" . $row["Bdate"]. "</td><td>" . $row["Bclass"]. "</td><td>" . $row["Bfroms"]. "</td><td>" . $row["Bends"]. "</td><td>" . $row["Btotal_prise"]. "</td><td>" . $row["pnremail"]. "</td><td>" . $row["pnarphone"]. "</td><td>" . $row["pasenger_name"]. "</td><td>" . $row["pasenger_age"]. "</td><td>" . $row["pgender"]. "</td><td>" . $row["pasenger_set"]. "</td></tr>";

  echo "</tabel>";
      
  
      
     
      
  }
} else {
  echo "0 results";

}

?>




</div>
</body>
</html>


</div>
</body>
</html>