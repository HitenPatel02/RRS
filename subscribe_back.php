<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
<?php 
   require 'db11.php';
 
  

   $email= $_POST['email'];
   $uname= $_POST['uname'];

   echo 

   
   $sql = "INSERT INTO subscribe  VALUES (null,'$uname','$email')";
   
   
   
//    $sql = "INSERT INTO pasanger  VALUES (null,'$uname', '$pname','$age','$gender','$seet', '$cun')";
   
   
   
    // $query =  "SELECT * FROM `pasanger` WHERE `uname` LIKE '$_SESSION[uname]'";
//    $fetch = mysqli_fetch_array($query);
    
   
    // OUTPUT DATA OF EACH ROW
   
    if(mysqli_query($conn, $sql)) {
 
        // $class =  $_SESSION['p_page'] ;
      
        
    
        echo "<script>alert('save Successfully!')</script>";
    echo "<script>window.location='home.php'</script>";
}
         
        
    
else {
   
    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>window.location='home.php'</script>";

}
?>











