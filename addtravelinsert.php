<?php error_reporting(0); ?>
<?php

    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
<?php 
   require 'db02.php';
   $uname = $_SESSION['uname'];
   $pname = $_POST['pname'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $seet = $_POST['seet'];
   $cun = $_POST['cun'];

   
   
   $sql = "INSERT INTO pasanger  VALUES (null,'$uname', '$pname','$age','$gender','$seet','$cun')";
   
   
   
//    $sql = "INSERT INTO pasanger  VALUES (null,'$uname', '$pname','$age','$gender','$seet', '$cun')";
   
   
   
    // $query =  "SELECT * FROM `pasanger` WHERE `uname` LIKE '$_SESSION[uname]'";
//    $fetch = mysqli_fetch_array($query);
    
   
    // OUTPUT DATA OF EACH ROW
   
    if(mysqli_query($conn, $sql)) {
 
        $class =  $_SESSION['p_page'] ;
      
        
    
        echo "<script>alert('save Successfully!')</script>";
    echo "<script>window.location='$class.php'</script>";
}
         
        
    
else {
   
    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>window.location='addtravelinsert.php'</script>";

}
?>











