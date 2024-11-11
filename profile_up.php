<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:index.php');
    }
?>

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


$uname = $_SESSION['uname'];
//$uname = $_post['unmae'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$aname = $_POST['aname'];
$status = $_POST['status'];
$country = $_POST['country'];
$src = $_POST['src'];
$email = $_POST['email'];
$num = $_POST['num'];

// Insert user in to database
// $sql = "INSERT INTO profile VALUES (null,'$uname','$fname', '$dob','$gender','$aname','$status', '$country','$src','$email','$num')";
$sql = "UPDATE profile SET fname = '$fname', dob = '$dob', gender = '$gender', aname = '$aname', `ststus` = '$status', country =  '$country', src = '$src', email = '$email', num = '$num' WHERE uname = '$uname'";
if (mysqli_query($conn, $sql)) {
    echo '<script> alert ("Save as Successfully!") </script>';
    echo "<script>window.location='profile_display.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);






?>