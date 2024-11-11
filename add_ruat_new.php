<html lang="en">
<?php error_reporting(0); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_ruat.css"/>
</head>
 
<div class="fullbody"><br>
      <body>
        <ul>
        <li><a href="admin_routes.php">&nbsp;<</a></li>
        <h2>Add New Time Routes</h2><hr>
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



<form action="add_ruat_new_back.php" method="post">
    
           
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
       <option for value="start" >Start Trains</option>
       
        <?php 

             



        foreach ($options2 as $station) {
            
            //  echo "<option>" .$option['Train_Number']."</option>"; 
            echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
             
                    
                  }
              ?>
</select>


<select class="toss" name="Toend">
    
       <option for value="end" >End Trains</option>
       
        <?php 



foreach ($options2 as $station) {
            
    //  echo "<option>" .$option['Train_Number']."</option>"; 
    echo "<option  value='".$station['Station']."'>" .$station['Station']."</option>"; 
     
            
          }

                 
            //   mysqli_close($conn) ;   
              ?>

</select><br><br><br><br>


 
       
            <input type="date" placeholder="Enter Your Train distion......" name="date" required/>
            <br><br>

          
           
            <div class="sub">
            <input type="submit" value="ADD TRAIN ROUTES">
        </div>
            <br><hr>
                  
     
</form>
<form actions = "add_sediual.php" method= "post">


        <select class="rede" name="srctrain">
    
       <option for value="from" >Train Number</option>
       
       
       




   
<?php

         
         foreach ($options as $option) {

            
            
          
            echo "<option value='" . $option['Train_Number'] . "'>" .$option['Train_Number']. " - " . $option['Train_Name']. "</option>";
         }
                //  mysqli_close($conn);
            ?>
            </select>
      
            <button type="submit" value="serch train" formaction= "add_ruat_new.php">SEARCH ROUTES</button><br><br>
            <hr>




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
$query3="SELECT * FROM `routes` WHERE `Train_Number` = '$Train_Number' ORDER BY `Train_Number` ASC";

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
    echo "<hr>";
  
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
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Train Number </th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Train Name </th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Starting Trains </th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   Ending Trains </th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  Date </th>

        
       

    </tr>

            <?php 
if($result3->num_rows> 0){
foreach ($options4 as $option3) {

    echo "<tr>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ".$option3['Id']."</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ".$option3['Train_Number']."</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;".$option3['Train_Name']."</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;".$option3['Fomestart']."</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp".$option3['Toend']."</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; ".$option3['date']."</td>";
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
</body>
</html>


 











