<!-- <?php
// Connect to database
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $db_name = 'demo01';
// $conn = mysqli_connect($host, $user, $pass, $db_name);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Get form data
// $a_name = $_POST['a_name'];
// $a_pwd = $_POST['a_pwd'];


// // Check if user exists in database
// $sql = "SELECT * FROM admin_reg WHERE a_name='$a_name' AND a_pwd='$a_pwd'";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) 
// {
//     echo '<script> alert ("Login Granted!") </script>';
//     echo include("admin.php");

// } else {
//     echo '<script> alert ("Invalid Username or Password") </script>';
//     echo include("admin_log.php");
// }

// mysqli_close($conn);
?>

 -->
 <?php error_reporting(0); ?>

 <?php
    require_once 'database.php';
    session_start();
    if(ISSET($_POST['alogin'])){
        $a_name = $_POST['a_name'];
        $a_pwd = $_POST['a_pwd'];
 
        $query = mysqli_query($conn, "SELECT * FROM admin_reg WHERE a_name='$a_name' AND a_pwd='$a_pwd'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);
        
       
        $row = mysqli_num_rows($query);


 
        if($row > 0){
            $_SESSION['aname']=$fetch['a_name'];
            echo "<script>alert('Login Successfully!')</script>";
            echo "<script>window.location='admin.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='index.php'</script>";
        }
        
 
    }
    ?>


