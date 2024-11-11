<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['aname'])){
        header('location:admin_log.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin_user1.css"/>
</head>
    <body>
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
<p id="p2">&nbsp;&nbsp;&nbsp;&nbsp;Registered Users</p>

<table>
        <tr><th>ID</th> <th>user name </th> <th>email </th><th>add</th> </tr>
<?php 
   

   require 'database.php';
   
   
    $query =  "SELECT * FROM `reg01`";
//    $fetch = mysqli_fetch_array($query);
    
   
    // OUTPUT DATA OF EACH ROW
   

    $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
     


        echo "<h4><tr><td>".$row['Id']."</td><td>".$row['uname']."</td><td>".$row['email']."</td><td>".$row['add']."</td></tr></h4>  ";

    echo "</tabel>";
        
    
        
       
        
    }
} else {
    echo "0 results";

}

?>
<!-- <table>
    <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contect</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>jan</td>
        <td>1000</td>
        <td>fab</td>
        <td>1000</td>
        <td>march</td>
        <td>1000</td>
    </tr>
    <tr>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
</tr>
<tr>
        <td>jan</td>
        <td>1000</td>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
    </tr>
    <tr>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
</tr>
    </table> -->


</div>
</body>
</html>