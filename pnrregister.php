<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_pnrr.css"/>
</head>
    <body>
    <div class="fullnav">
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
    ?>

 
        <form action="pnrregister.php" method="post"><br>
      
        <h2>PNR NUMBER REGISTRATION</h2><hr><br>

        <?php $uname = $_SESSION['uname'];
        ?>
        <input type="checkbox" id="vehicle1" name="cuname" value="<?php echo $uname ?>"> <?php echo $uname;?><br><br>
        <input type="text" placeholder="Entyer for pnrNumber......" name="pnrnum" required/><br><br><br>
        <input type="text" placeholder="Enter Your full name ......" name="fname" required/><br>

        <input type="submit" value="REGISTER"/>
        



<?php

$cuname = $_POST['cuname'];
$pnrnum = $_POST['pnrnum'];
$fname = $_POST['fname'];
echo "<br>";
echo $cuname;
echo $pnrnum;
echo $fname;

require "db11.php";
$sql = "INSERT INTO `pnrnum`(`Id`, `uname`, `pnrnum`, `f_name`) VALUES (NULL,'$cuname','$pnrnum','$fname')";

$sql_run = mysqli_query($conn, $sql);


if($sql_run){

    echo "deta inert sucess fulley";


    
}

else
{
    echo "data not insert";
}






?>

</div>



