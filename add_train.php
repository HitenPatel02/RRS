<html lang="en">
<?php error_reporting(0); ?>
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

<form action="add_train_back.php" method="post">
           
            <input type="text" placeholder="Enter Your Train Number......" name="Train_Number" required/>
            <br><br>
            <input type="text" placeholder="Enter Train Name......" name="Train_Name" required/>
            <br><br>
           
            <input type="submit" value="REGISTER"/>
            <br>
     
     
        </form>