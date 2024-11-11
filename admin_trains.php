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
    <link rel="stylesheet" href="style__schedule1.css"/>
</head>
    <body>
        <form action="new_schedule.php" method="post">
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
    
    <input type="submit" value="Add New Train" formaction= "add_train.php"/> 
</p>
</form>




<table>

<tr>
     <th>ID </th>
      <th>Train_Number</th> 
      <th>Train_Name</th> 
      <th>Update </th>
      <th> Deleted</th>
    
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

$sql = "SELECT * FROM `trains";



$result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    


      echo "<h5> <tr> ";
      echo "<td>";
      echo $row['Id']."</td><td>".$row['Train_Number']."</td>";
      echo "<td>".$row['Train_Name']."</td>";
      echo "<td><form action= 'upp_train.php' method='post'>";
      echo "<input type ='hidden' name='uptrainnum' value='".$row['Train_Number']."'>";
    //   echo "<input type ='hidden' name='uptrainname' value='".$row['Train_Name']."'>";
      echo "<button type='submit' value='update'>Update</button></form></td>";

      echo "<td><input type ='hidden' id = 'uppdate'name= 'uptrain' value= '".$row['Train_Number']."'>
      <button type='submit' value='update'formaction= 'del_train.php' >Deleted</button></td>";
      echo "</tr></h5>  ";



  echo "</tabel>";

  echo "</from>";
      
  
      
     
      
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