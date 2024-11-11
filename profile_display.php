<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:index.php');
    }
?>





<html lang="en">
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="style_profile12.css"/>
</head>
    <body>


    <?php 
   

   require 'database.php';
   $uname = $_SESSION['uname'];

   
   
   
   $query =  "SELECT * FROM `profile` WHERE `uname` LIKE '$uname'";
//    $fetch = mysqli_fetch_array($query);

   
    // OUTPUT DATA OF EACH ROW

    $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // echo "<input type='checkbox'><b>". $row["fname"]."</b></br>";
        // echo "<p id='tr1'><a href='edit.php'>EDIT</a></p> ";
        
 ?>
        <div class="navbar">
        <ul>
          <li><a href="home.php">&nbsp;<</a></li>
          <p>User Profile</p>
        </ul>
        </div>
       

       <div class="fillname"><br>
          <label>GENEREL DETAILS</label>
          <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["fname"];?></h3>

    
</div>

<div id="dob"><br>
    <label>DATE OF BIRTH</label><br>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["dob"];?></h3>

</div>

<div id="gen"><br>
    <label>GENDER</label><br>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["gender"];?></h3>
        
</div><br>

<div id="mrt"><br>
    <label>MARIT STATUS</label>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["aname"];?></h3>


    <div id="ann"><br>
    <label>ANNIVERSARY</label>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["ststus"];?></h3>
   


<div class="national">
<h3>&nbsp;&nbsp;&nbsp;<?php echo $row["country"];?></h3>

</div>

<div class="srch"><br>
<label>WHERE DO YOU LIVE?</label><br>
<h3>&nbsp;&nbsp;&nbsp;<?php echo $row["src"];?></h3>
</div><br>
<hr>

<div class="eml"><br>
    <p id="p1">CONTACT DETAILS</p>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["email"];?></h3>
   
</div>

<div class="mob"><br>
    <p id="p2">MOBILE NUMBER</p>
    <h3>&nbsp;&nbsp;&nbsp;<?php echo $row["num"];?></h3>
    
</div>
<div>

<a href="profile_update.php" ><button>edit profile</button></a>
    </div>



</body>
</html>

<?php
}
} else {
    echo "0 results";
   echo " <a href='profile.php' ><button>edit profile</button></a>";
}

   
   
   
 mysqli_close($conn);
 ?>