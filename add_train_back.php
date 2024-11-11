<?php error_reporting(0); ?>
<?php
// Connect to database
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'demo11';
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$Train_Number = $_POST['Train_Number'];
$Train_Name = $_POST['Train_Name'];


// Insert user into database

// INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES (NULL, 'vipal', '123', 'vipal@123.com', 'nvs');
$sql = "INSERT INTO trains  VALUES (NULL,'$Train_Number', '$Train_Name')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Add train Successfully!')</script>";
    echo "<script>window.location='admin_trains.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>window.location='admin_trains.php'</script>";
}

mysqli_close($conn);
?>


