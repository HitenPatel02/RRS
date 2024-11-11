<!DOCTYPE html><?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['aname'])){
        header('location:index.php');
    }
?>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin_reg.css"/>
</head>
     <body>
        <form action="admin_log.php" method="post">
        <div id="fullnav"><br>
        <a href="admin.php">&nbsp;&nbsp;<</a>
        <h2>ADMIN REGISTRATION</h2><hr>
       
            <input type="text" placeholder="Enter Your admin_ID......" name="aname"/>


        <input type="password" placeholder="Entyer Your Password......" name="apwd"/>

   
       <input type="number" placeholder="Enter Your Mobile Number...." name="anum"/>
       <input type="email" placeholder="Enter Your Email_ID...." name="aemail"/>
       <br><br><br>
       <input type="textarea" placeholder="Enter Your Address...." name="add"/> 
    
       <div id="country">
    <select id="national" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
</select>
</div>

<div id="btn">
        <input type="submit" value="REGISTER"/>
</div>

</body>
</html>
