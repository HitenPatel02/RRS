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

$uptrain= $_POST['Id'];

$Train_Number = $_POST['Train_Number'];
$Train_Name = $_POST['Train_Name'];
$Fomestart = $_POST['Fomestart'];
$Toend = $_POST['Toend'];

$date = $_POST['date'];

echo $Train_Number;
// Insert user into database

//  INSERT INTO `reg01` (`Id`, `uname`, `pwd`, `email`, `add`) VALUES (NULL, 'vipal', '123', 'vipal@123.com', 'nvs');
// $sql = "UPDATE `trains` SET `Train_Number`= '$Train_Number' , `Train_Name`= '$Train_Name'   WHERE `Train_Number`= '$uptrain'";
$sql = "UPDATE `routes` SET `Train_Number`='$Train_Name',`Train_Name`='$Train_Name',`Fomestart`='$Fomestart',`Toend`='$Toend',`date`='$date' WHERE Id = '$uptrain'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Update  Successfully!')</script>";
    echo "<script>window.location='admin_routes.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // echo "<script>window.location='upp_train.php'</script>";
}

mysqli_close($conn);
?>