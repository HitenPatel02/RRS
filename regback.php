<?php
// Connect to database
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'demo01';
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$add = $_POST['add'];

// Insert user into database

// INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES (NULL, 'vipal', '123', 'vipal@123.com', 'nvs');
$sql = "INSERT INTO reg01  VALUES (NULL,'$uname', '$pwd','$email','$add')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Regester Successfully!')</script>";
    echo "<script>window.location='login.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>window.location='register.php'</script>";
}

mysqli_close($conn);
?>

<body>
    <?php
//    include("login.php");


    ?>

