<html lang="en">
    <?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
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
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="style_profile_user.css"/>
</head>
    <body>
          <form action="profile_up.php" method="post">
        
        <div class="navbar">
          <ul>
          <li><a href="home.php">&nbsp;<</a></li>
          <p>User Profile</p>
</ul>
</div>
       
       <div class="fillname"><br>
          <label>GENEREL DETAILS</label><br>
          <input type="text" placeholder="FULL NAME" value= "<?php echo $row['fname'];?>" name="fname"/>

</div>

<div id="dob"><br>
    <label>DATE OF BIRTH</label><br>
    <input type="date" placeholder="FULL NAME" value= "<?php echo $row['dob'];?>" name="dob"/>

</div><br>

<div id="gen"><br>
    <label>GENDER</label><br><br>
    <label id="lb">Male</label>
    <input type="radio" id="male" name="gender" value="male"/>
         <label id="lb1">Female</label>
         <input type="radio" id="female" name="gender" value="female"/>
         <label id="lb2">Other</label>
         <input type="radio" id="other" name="gender" value="other"/>
</div>

<div id="mrt"><br>
    <label>MARIT STATUS</label><br>
    <label id="stat1">Single</label>
    <input type="radio" id="sing" name="status" value="single"/>
         <label id="stat2">Married</label>
    <input type="radio" id="mrd" name="status" value="married"/>

    <div id="ann"><br>
    <label>ANNIVERSARY</label><br>
    <input type="date" name="aname" value= "<?php echo $row['aname'];?>" />


<div class="national">

<select class="country" name="country" value= "<?php echo $row['country'];?>">
            <option value="India(IND)">India(IND)</option>
            <option value="Unite State(US)">Unite State(US)</option>
            <option value="Japan(JAP)">Japan(JAP)</option>
            <option value="United Kingdom(UK)">United Kingdom(UK)</option>
            <option value="Brazil(BZL)">Brazil(BZL)</option>
            <option value="Canada(CAN)">Canada(CAN)</option>
</select>
</div>

<div class="srch"><br>
<label>WHERE DO YOU LIVE?</label><br><br>
<input type="search" placeholder="Search your City" value= "<?php echo $row['src'];?> " name="src"/>
</div><br>
<hr>

<div class="eml"><br>
    <p id="p1">CONTACT DETAILS</p><br>
    <input type="email" placeholder="Enter your email ID" value= "<?php echo $row['email'];?>" name="email"/>
</div>

<div class="mob"><br>
    <p id="p2">MOBILE NUMBER</p><br>
    <input type="number" placeholder="Enter your Number" value= "<?php echo $row['num'];?>"name="num"/>
</div>

<div id="btnn">
 <input type="submit" value="SAVE"/>
</div>
</div>
</body>
</html>

<?php
}
} else {
    echo "Insert Profile ";

    echo " <a href='profile.php' ><button>edit profile</button></a>";
}

   
   
   
 mysqli_close($conn);
 ?>