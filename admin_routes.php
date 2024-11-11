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
    <link rel="stylesheet" href="style_schedule001.css"/>
</head>
    <body>
        <form action="add_ruat_new.php" method="post">
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
    
    <input type="submit" value="Add New One-Time Schedule"/> 
</p>
</form>

<table>

<tr>
     <th>ID </th>
      <th>Train_Number</th> 
      <th>Train_Name</th> 
      <th>Fomestart</th> 
      <th>Toend</th>
      <th>date</th>
      <th> Update </th>
     <th> Deleted </th>
 </tr>

<!-- <table>
    <tr>
        <th>No</th>
        <th>From</th>
        <th>To</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>jan</td>
        <td>1000</td>
        <td>fab</td>
        <td>1000</td>
        
    </tr>
    <tr>
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
       
    </tr>
    <tr>
        <td>fab</td>
        <td>2000</td>
        <td>fab</td>
        <td>2000</td>
        
</tr>
    </table> -->
    <?php
 include("db11.php");

$sql = "SELECT * FROM `routes";



$result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    
     


    echo "<h4> <tr>" ;
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Train_Number']."</td>";
    echo "<td>".$row['Train_Name']."</td>";
   echo " <td>".$row['Fomestart']."</td>";
   echo "<td>".$row['Toend']."</td>";
   echo "<td>".$row['date']."</td> ";
   echo "<td><form action= 'upp_routs.php' method='post'>";
    echo "<input type ='hidden' name='uid' value='".$row['Id']."'>";
    echo "<button type='submit' value='update'> UPDATE </button>";
    echo "</form></td>";


    echo "<td><form action= 'del_routs.php' method='post'>";
    echo "<input type ='hidden' name='did' value='".$row['Id']."'>";
    echo "<button type='submit' value='update'> DELETE </button>";
    echo "</form></td>";

echo "</tr></h4>";
echo "</tabel>";
      
  
      
     
      
  }
} else {
  echo "0 results";

}

?>




</div>
</body>
</html>







