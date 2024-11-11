
<?php
    require_once 'database.php';
    session_start();
    if(ISSET($_POST['login'])){
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
 
        $query = mysqli_query($conn, "SELECT * FROM `reg01` WHERE `uname` = '$username' AND `pwd` = '$password'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        
       
        $row = mysqli_num_rows($query);


 
        if($row > 0){
            $_SESSION['uname']=$fetch['uname'];
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='home.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='index.php'</script>";
        }
        
 
    }
    ?>

