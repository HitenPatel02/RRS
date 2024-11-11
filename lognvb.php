<div class="reg">

        <ul>
        <li class="li">&nbsp;RRS</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="available.php">Available Trains</a></li>
            <li><a href="pasanger.php">Passenger Details</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="general.php">General Ticket Booking</a></li>
            <li><a href="profile_update.php">Profile</a></li>
            <li><a href="showtickit.php">Show Ticket</a></li>
            
            <?php

           
            
        require('database.php');


        $query = mysqli_query($conn, "SELECT * FROM `reg01` WHERE `uname`='$_SESSION[uname]'") or die(mysqli_error());
        $fetch = mysqli_fetch_array($query);

        echo "<li class='log'><a href='profile_display.php'>".$fetch['uname']."</a></li>";
    
    ?>
    <li class> <a href='logout.php'>Logout</a></li>
        </ul>
    </div>