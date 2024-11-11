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
        <li><a href="admin_routes.php">&nbsp;<</a></li>
        <h2>Update Routes</h2><hr>

<?php


$Id = $_POST['uid'];
// $Train_Number = $_POST['Train_Number'];


// echo $Id ;
?>

<?php

/// fach data in fromsql

require 'db11.php';


    $query ="SELECT * FROM trains";
    // $query= "SELECT * FROM `trains`";

    // $query= "SELECT * FROM `scheduletb` INNER JOIN station ON `scheduletb`.`Train_Number` = `station`.`Station`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

?>

<form action="upp_routs_back.php" method="post">
           <?php echo "This Id UPDATE &nbsp;".$Id ?>
           <br><br><hr>

           <input type='hidden' name='uptrain' value='<?php echo $Id ;?>'>
           <select class="rede" name="Train_Number">
    
    <option for value="from" >Train Number</option>
    
     <?php 



      foreach ($options as $option) {

         
         
         // if($option){
         //  echo "<option>" .$option['Train_Number']."</option>"; 
         // echo "<option  value='".$option['Train_Number']."'>" .$option['Train_Number']."</option>"; 
         echo "<option value='" . $option['Train_Number'] . "'>" .$option['Train_Number']. " - " . $option['Train_Name']. "</option>";
        
     }  

         
             //  mysqli_close($conn);
         ?>
</select>


<select class="rede" name="Train_Name">
 
    <option for value="from" >Train Name</option>
    
     <?php 



      foreach ($options as $option) {
         
          echo "<option value='".$option['Train_Name']."'>" .$option['Train_Name']."</option>";     
                 
               }
              

         //     }
         //     break;

         //   }

         
     
           ?>
           
</select><br><br><br>

<?PHP
 //    require 'db11.php';
$sql= "SELECT * FROM `station` ";
$result2 = $conn->query($sql);
if($result2->num_rows> 0){
$options2= mysqli_fetch_all($result2, MYSQLI_ASSOC);
}

?>
 <select class="fromss" name = "Fomestart">
    <option for value="start" >Start Station</option>
    
     <?php 

          



     foreach ($options2 as $station) {
         
         //  echo "<option>" .$option['Train_Number']."</option>"; 
         echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
          
                 
               }
           ?>
</select>


<select class="toss" name="Toend">
 
    <option for value="end" >End Station</option>
    
     <?php 



foreach ($options2 as $station) {
         
 //  echo "<option>" .$option['Train_Number']."</option>"; 
 echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
  
         
       }

              
         //   mysqli_close($conn) ;   
           ?>

</select><br><br>


         <input type="date" placeholder="Enter Your Train distion......" name="date" required/>
         <br><br>

       
        

         <input type="submit" value="REGISTER"/>
         <br>
               
  
</form>
      </div>
      </body>
      </html>