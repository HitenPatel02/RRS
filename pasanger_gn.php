<html lang="en">
<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }



    //session date save


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['BokTrain_Number'] =$_POST['Train_Number'];
    $_SESSION['BokTrain_Name'] = $_POST['Train_Name'];
    $_SESSION['Bokdate'] = $_POST['date'];
    $_SESSION['class'] = $_POST['class'];
    
  
    // Do something with the form data, such as saving it to a database or processing it further
    // ...
  }
  
   
//    echo $_SESSION['class'];


$pris = $_SESSION['pris'];

$set = $_post['set'];


$date = $_SESSION['Bokdate'];
$class =  $_SESSION['class'];


$Train_Number =  $_SESSION['BokTrain_Number'];
$Train_Name = $_SESSION['BokTrain_Name'];



$add_p_page = 'pasanger_gn';


$_SESSION['p_page'] = $add_p_page;









    



?>












<html>
<head>
    <title>website</title>
    <link rel="stylesheet" href="style_pasanger.css"/>
</head>
<body>
    <form action="booking_gn.php" method="post">
<div class="back">
<div class="detail">
    <ul>
    <li><a href="available.php">&nbsp;<</a></li>
    <p class="pw">Select Traveller</p>
</ul>
</div>

<div class="mang">
    <h6 class="w"><a href="addtravel.php">+ Add Traveller</a></h6>
</div>
<h5><b>Note:</b>
No concessions are allowed in this train.
 Full fare is applicable in case of child passengers.</h5>

 <div class="demo">
 <label>Adults</label><br><br>
 <?php 
   

   require 'db02.php';
   
   
    $query =  "SELECT * FROM `pasanger` WHERE `uname` LIKE '$_SESSION[uname]'";

   

    $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<input type='checkbox' name = 'checkboxValue[]' value = '".$row["pname"]."'><b>" . $row["pname"]. "</b></br>";
        echo "<p id='tr1'><a href='edit.php'>EDIT</a></p> ";
        
    
        
       
        
    }
} else {
    echo "0 results";

}

?>

<div class="btn">
        <input type="submit" name="sev_sel_val" value="PROCEED"/>
      </div>
</div>
</body>
</html>