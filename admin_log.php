<!DOCTYPE html>
<?php error_reporting(0); ?>

<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin_log.css"/>
</head>
     <body>
        <form action="admin_logback.php" method="post">
        
        <div id="fullnav"><br>
        <a href="index.php">&nbsp;&nbsp;<</a>
        <h2>ADMIN LOGIN</h2><hr><br><br>
       
        <input type="text" placeholder="Enter Your admin_ID......" name="a_name" required/>
        <br><br><br>

        <input type="password" placeholder="Entyer Your Password......" name="a_pwd" required/>

<div id="btn">

        <input type="submit" name = "alogin" value="LOGIN"/>
</div>
</div>
</form>
</body>
</html>
