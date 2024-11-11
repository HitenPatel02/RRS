<?php error_reporting(0); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style__sediual.css"/>
</head>
    
    <div class="fullbody"><br>
      <body>
        <ul>
        <li><a href="admin_schedules.php">&nbsp;<</a></li>
        <h2>Add New Time Schedule</h2><hr>
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



<form action="add_sediual_back.php" method="post">
    
           
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
              
</select>

   <?PHP
    //    require 'db11.php';
$sql= "SELECT * FROM `station` ";
 $result2 = $conn->query($sql);
 if($result2->num_rows> 0){
$options2= mysqli_fetch_all($result2, MYSQLI_ASSOC);
}

?>

    <select class="fromss" name ="Froms">
       <option for value="start" >Start Station</option>

        <?php 

         



        foreach ($options2 as $station) {
            
            //  echo "<option>" .$option['Train_Number']."</option>"; 
            echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
             
                    
                  }
              ?>
</select>


<select class="toss" name="Tos">
    
       <option for value="end" >End Station</option>
             
        <?php 



foreach ($options2 as $station) {
            
    //  echo "<option>" .$option['Train_Number']."</option>"; 
    echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
     
            
          }

                 
            //   mysqli_close($conn) ;   
              ?>

</select><br><br><br><br>


 
        <label for = "destuns">Distence</label>
            <input type="text" placeholder="Enter Your Train Distance......" name="distion" required/>
            <br><br><br>

        <label for = "destuns">Price</label>
            <input type="text" placeholder="Enter Trains Price......" name="pris" required/>
            <br><br><br>

        <label for = "destuns">A1 Class Price</label>
            <input type="text" placeholder="Enter A1 Class Price......" name="fc_pris" required/>
            <br><br><br>

        <label for = "destuns">2A Class Price</label>
            <input type="text" placeholder="Enter 2A Class Price......" name="sc_prise" required/>
            <br><br><br>

        <label for = "destuns">3A Class Price</label>
            <input type="text" placeholder="Enter 3A Class Price......" name="tc_pris" required/>
            <br><br><br>

            
        <!-- <label for = "destuns">SL Class Price</label>
            <input type="text" placeholder="Enter SL Class Price......" name="tc_pris" />
            <br><br><br>

            
        <label for = "destuns">2S Class Price</label>
            <input type="text" placeholder="Enter 2S Class Price......" name="tc_pris" />
            <br><br> -->
        <div class="sub">
            <input type="submit" value="REGISTER"/>
        </div>

            <br>
                  
     
</form>
<form actions = "add_sediual.php" method= "post">


        <select class="rede" name="srctrain">
    
       <option for value="from" >Train_Number..</option>
       
       
       




   
<?php

         
         foreach ($options as $option) {

            
            
          
            echo "<option value='" . $option['Train_Number'] . "'>" .$option['Train_Number']. " - " . $option['Train_Name']. "</option>";
         }
                //  mysqli_close($conn);
            ?>
            </select>
      
            <button type="submit" value="serch train" formaction= "add_sediual.php">SEARCH TRAINS</button>




</form> 


<?php 
        
        //  require 'db11.php';
// echo "sho post ====".$Train_Number;
// $query3="SELECT * FROM `scheduletb` WHERE `Train_Number` LIKE '22953'";
// $query= "SELECT * FROM `trains`";

// $query= "SELECT * FROM `scheduletb` INNER JOIN station ON `scheduletb`.`Train_Number` = `station`.`Station`";
// $result3 = $conn->query($query3);
// if($result3->num_rows> 0){
//   $options3= mysqli_fetch_all($result3, MYSQLI_ASSOC);
// }

// echo "sho post ====".$Train_Number;
$Train_Number = $_POST['srctrain'];
$query3="SELECT * FROM `scheduletb` WHERE `Train_Number` LIKE '$Train_Number'";

$result3 = $conn->query($query3);
if(!$result3->num_rows> 0){
    // echo "no data fund trainnnn.";

}

else{
    $options4= mysqli_fetch_all($result3, MYSQLI_ASSOC);
}
?>

<table>






<?php 
if($result3->num_rows> 0){
foreach ($options4 as $option3) {
    // while($row3 = mysqli_fetch_assoc($result3)) {

        $Train_Number03 = $option3['Train_Number'];
        
        $Train_Name03 = $option3['Train_Name'];

        // print_r($Train_Name03);
    echo "<div>";


   
    echo "<h4>".$Train_Number03."-".$Train_Name03."</h4>";
  
    // echo "<h4>".$row3['Train_Number']."-".$row3['Train_Name']."</h4>";
    // echo "<h4>hdhhdh</h4>";
  echo "</div>";
  break;


}


}

 else {
    echo "0 results";

}



?>

</table>
<table>

    <tr>
        <th> No </th>
        <th> Train_Number </th>
        <th> Train_Name </th>
        <th> Froms </th>
        <th> Tos </th>
        <th> distion </th>
        <th> pris </th>
        <th> fc_pris </th>
        <th> sc_prise </th>
        <th> tc_pris </th>

    </tr>

            <?php 
if($result3->num_rows> 0){
foreach ($options4 as $option3) {

    echo "<tr>";
    echo "<td>".$option3['Id']."</td>";
    echo "<td>".$option3['Train_Number']."</td>";
    echo "<td>".$option3['Train_Name']."</td>";
    echo "<td>".$option3['Froms']."</td>";
    echo "<td>".$option3['Tos']."</td>";
    echo "<td>".$option3['distion']."</td>";
    echo "<td>".$option3['pris']."</td>";
    echo "<td>".$option3['fc_pris']."</td>";
    echo "<td>".$option3['sc_prise']."</td>";
    echo "<td>".$option3['tc_pris']."</td>";
    echo "</tr>";
    


}

}

else{
     echo "<tr>";
     echo "no data fund trainnnn.";
     echo "<tr>";
}


?>


    </tabel>

</div>
</body>

 











