<?php error_reporting(0); ?>
<?php
include('login.php');
  $email =$_POST['email'];
  $password =$_POST['password'];

$conn = mysqli_connect("localhost","root","","traindatabase");
if(!$conn)
  {
    echo "Connection error";
  }
  $sql = "SELECT * FROM registration WHERE name='$email' AND password='$password'";

  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) > 0) 
  {
      echo "Login successful!";
  } else {
      echo "Invalid username or password";
  }
  
  mysqli_close($conn);
  ?>
  
