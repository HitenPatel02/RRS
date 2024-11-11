<html lang="en">
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:index.php');
    }
?>

<?php
//db conect
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "demo02";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//sql 

$uname = $_POST['uname'];
$pname = $_POST['pname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$seet = $_POST['seet'];
$cun = $_POST['cun'];



$sql = "INSERT INTO pasanger  VALUES (null,'$uname', '$pname','$age','$gender','$seet', '$cun')";

if (mysqli_query($conn, $sql)) {
    echo '<script> <b> alert ("Insert  Successfully!") </b> </script>' ;
    echo "<script>window.location='pasanger.php'</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}








// $dis = mysqli_query($conn,"SELECT * FROM `pasanger` WHERE `uname` = '$uname'") or die(mysqli_error());

// $fetch = mysqli_fetch_array($query);




?>