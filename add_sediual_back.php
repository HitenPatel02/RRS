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
$Froms = $_POST['Froms'];
$Tos = $_POST['Tos'];
$distion = $_POST['distion'];
$pris = $_POST['pris'];
$fc_pris = $_POST['fc_pris'];
$sc_prise = $_POST['sc_prise'];
$tc_pris = $_POST['tc_pris'];


// echo  $Froms;;

// Insert user into database

// INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES (NULL, 'vipal', '123', 'vipal@123.com', 'nvs');
$sql = "INSERT INTO `scheduletb` VALUES ( NULL, '$Train_Number', '$Train_Name', '$Froms', '$Tos','$distion', '$pris', '$fc_pris', '$sc_prise', '$tc_pris')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Add train  Sideyual Successfully!')</script>";
    echo "<script>window.location='admin_schedules.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // echo "<script>window.location='admin_trains.php'</script>";
}

mysqli_close($conn);
?>


