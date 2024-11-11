<html lang="en">
<?php error_reporting(0); ?>
    <?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
<head>
   <title>website</title>
   <link rel="stylesheet" href="style_general.css"/>
</head>

      <body>
        <form action="available_gen.php" method="post">

        <div class="full">
            <ul>
            <li class="li">&nbsp;&nbsp;RRS</li>
                <li><a href="home.php">Home</a></li>
                <li><a href="available.php">Available Trains</a></li>
                <li><a href="pasanger.php">Passenger Details</a></li>
                <li><a href="payment.php">Payment</a></li>
                  
            </ul>
        </div>

        <div class="iconee"><br>
      
      <div class="proe">GENERAL TICKET BOOKING</div>
  
      <?php 
       
       include("db11.php");
       include("fetch-data.php");
       ?>
    
      <div class="hacke">
      <select class="redee" name="red">
        <option value disabled selected>From....</option><br>
        <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>
</select>
  
      <select class="yeree" name="yer">
      <option value disabled selected>From....</option><br>
        <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>


</select>
      <!-- <label>Date</label> -->
      <input type="date" name="date">
  
  </select>
    <input type="submit" value="SEARCH"/>
  </div>
  </div> 
  
  </div> 
  
  </div>
  </div>
  
        