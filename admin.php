<!DOCTYPE html><?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['aname'])){
        header('location:index.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css"/>
</head>
    <body>
        <form action="admin_reg.php" method="post">
    <div class="fullnav">
        
    
        <ul>
        <li class="li">&nbsp;RRS</a></li><br><hr>
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin_user.php">User</a></li>
            <li><a href="admin_schedules.php">Schedules</a></li>
            <li><a href="admin_routes.php">Routes</a></li>
            <li><a href="admin_trains.php">Trains</a></li>
            <li><a href="admin_reservation.php">Reservation</a></li>
            <li><a href="admin_payment.php">Payment</a></li>
            <li><a href="admin_feedback.php">Subscribe</a></li>
            <!-- <li><a href="admin_available_seat.php">available</a></li> -->
            
            <li><a href="logout.php">Logout</a></li>
        </ul>
    

    <div class="fullside"><br><br><br>
<p id="p0">Railway Reservation System</p><br><hr>
<p id="p1">Administrator Dashboard</p>
<p id="p2">Hi, System Administrator</p>

<div id="passanger1">
    <img src="3-people-icon-black-color-260nw-2041706333.webp"/>
    <a href="admin_reservation.php">Passengers</a></div>

<div id="passanger2">
    <img src="429-4290779_railway-transport-train-icon-png-small-train-icon.png"/>
    <a href="admin_trains.php">Trains</a></div>

<div id="passanger3">
    <img src="istockphoto-1447864351-640x640.jpg"/>
    <a href="admin_schedules.php">Schedules</a></div>

<div id="passanger4">
    <img src="desktop-wallpaper-pink-dollar-sign-money-signs-thumbnail.jpg"/>
    <a href="#">Payments</a></div>

<div id="passanger5">
    <img src="route-logo-icon-design-vector-22915922.jpg"/>
    <a href="admin_routes.php">Routes</a></div>

<div id="passanger6"> 
    <img src="Untitled.png"/>
    <a href="admin_feedback.php">Feedbacks</a></div>

</div>
</div>
</body>
</html>