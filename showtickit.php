
<html>
<head>
   <title>website</title>
   <link rel="stylesheet" href="style__schedule01.css"/>
</head>

<?php error_reporting(0); ?>

<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
    ?>
<form action = "showtickit.php" method = "POST">

<?php

$unmae = $_SESSION['uname'];


?>
    <!-- <label for = "uname"> Username: <?php echo $unmae ;?> </label><br>  -->
   

    <label for = "uname"> IRCTC User ID:  </label>
    <input type ="text" name = "pnrnum" ><br>

    <input type="submit" value="SEARCH"/>
    <a href="home.php"> <input type="button" value="HOME PAGE "></a>

</form>
<div   >
<?php 

require('db11.php');

 
$pnrnum = $_POST['pnrnum'];


echo $pnrnum;



$sql = "SELECT * FROM `resavetion` WHERE `pnrnum` = '$pnrnum'";

$sql_run= mysqli_query($conn, $sql);


$data = array();

if (mysqli_num_rows($sql_run) > 0) {

while ($row = mysqli_fetch_assoc($sql_run))
{
    $data[] = $row;
    
 
    
   }
} 


else{

    echo "<br><h1 style = 'color:red '>No Ticket Faund</h1>";
}
  

   $conn->close();
   

   foreach ($data as $row):

echo "<div>";
echo "id :".$row['Id']."<br>";
echo "uname :".$row['uname']."<br>";
echo "pnrnum :".$row['pnrnum']."<br>";
echo "BTrain_Number :".$row['BTrain_Number']."<br>";
echo "BTrain_Name :".$row['BTrain_Name']."<br>";
echo "Bdate :".$row['Bdate']."<br>";
echo "Bclass :".$row['Bclass']."<br>";
echo "Bfroms :".$row['Bfroms']."<br>";
echo "Bends :".$row['Bends']."<br>";
echo "Btotal_prise :".$row['Btotal_prise']."<br>";
echo "pnremail :".$row['pnremail']."<br>";
echo "pnarphone :".$row['pnarphone']."<br>";
echo "pasenger_name :".$row['pasenger_name']."<br>";
echo "pasenger_age :".$row['pasenger_age']."<br>";
echo "pgender :".$row['pgender']."<br>";
echo "pasenger_set :".$row['pasenger_set']."<br>";

echo "</div>";



    

   endforeach;

   ?>
</div>












