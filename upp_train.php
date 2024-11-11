<?php error_reporting(0); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_upp.css"/>
</head>
    
    <div class="fullbody"><br>
      <body>
        <ul>
        <li><a href="admin_trains.php">&nbsp;<</a></li>
        <h2>Update Trains</h2><hr>
<?php


$uptrainnum = $_POST['uptrainnum'];

$uptrainname = $_POST['uptrainname'];
?>



<form action="upp_train_back.php" method="post">
           <?php echo  "This Train Update".$uptrainnum?><br><br><hr>
           <input type='hidden' name='uptrain' value='<?php echo $uptrainnum ;?>'>
           <input type='hidden' name='uptrainname' value='<?php echo $uptrainname ;?>'>
            <input type="text" placeholder="Enter Your Train Number......" name="Train_Number" value=""  >
            <br><br>
            <input type="text" placeholder="Enter Train Name......" name="Train_Name" >
            <br><br>
           
            <input type="submit" value="UPDATE TRAINS"/>
            <br>
     
     
        </form>