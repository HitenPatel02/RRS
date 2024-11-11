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
$Fomestart = $_POST['Fomestart'];
$Toend = $_POST['Toend'];
$date = $_POST['date'];

// Insert user into database

// INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES (NULL, 'vipal', '123', 'vipal@123.com', 'nvs');
$sql = "INSERT INTO `routes`(`Id`, `Train_Number`, `Train_Name`, `Fomestart`, `Toend`, `date`) 
        VALUES (NULL, '$Train_Number', '$Train_Name', '$Fomestart', '$Toend', '$date')";

if (mysqli_query($conn, $sql)) {
    
    echo "<script>alert('Add routs Successfully!')</script>";
    echo "<script>window.location='admin_routes.php'</script>";
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>window.location='admin_trains.php'</script>";
}

mysqli_close($conn);
?>


