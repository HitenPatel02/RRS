<?php error_reporting(0); ?>

<?php
//  error_reporting(0);
  ?>
<html lang="en">
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }

?>

<html>
<head>
   <title>website</title>
   <link rel="stylesheet" href="style_available.css"/>
</head>

      <body>
      <?php include("lognvb.php");?>
        <form action="available.php" method="post">
           
        <div class="iconee">
    <div class="proe">.</div>
    
    <div class="hacke">
    
    <?php
    include("db11.php");
    include("fetch-data.php");

$red = $_POST['red'];
$yer = $_POST['yer'];
$date = $_POST['date'];

// echo $date;

$_SESSION['froms'] = $red;
$_SESSION['end'] = $yer;
$_SESSION['sdate'] = $date;

// echo $_SESSION['froms'].$_SESSION['end'].$_SESSION['sdate'];





?>
    
    <select class="rede" name="red">
    <option ><?php echo $red?></option>
       <option for value="from">From..</option>
       
       <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>
         <!-- <option value="mumbai">Mumbai Central (CSTM)</option>
        <option value="bandra">Bandra Terminus (BDTS)</option>
                <option value="nvs">maroli</option>
                    <option value="nvs">maroli</option>
                        <option value="nvs">maroli</option>
                            <option value="nvs">maroli</option>
                                <option value="nvs">maroli</option>
                                    <option value="nvs">maroli</option>
                                        <option value="nvs">maroli</option>
                                        <option value="nvs">maroli</option>
                                        <option value="nvs">maroli</option>
                                        <option value="nvs">maroli</option>
                                    <option value="nvs">maroli</option>
                                <option value="nvs">maroli</option>
                            <option value="nvs">maroli</option>
                        <option value="nvs">maroli</option>
                    <option value="nvs">maroli</option>
                <option value="nvs">maroli</option>
            <option value="nvs">maroli</option>
        <option value="nvs">maroli</option>
        <option value="nvs">maroli</option>
        <option value="nvs">maroli</option>
        <select class="red" name="red">
        <option value disabled selected>From....</option><br>
        
           


</select> -->
</select>

     <select class="yere" name = "yer">
     <option ><?php echo $yer?></option>
        <option for value="to">To..</option>
        <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>
        <!--<option value="kasmir">Kashmir</option>
            <option value="">Kim</option>
                <option value="nvs">maroli</option>
                    <option value="nvs">maroli</option>
                        <option value="nvs">maroli</option>
                            <option value="nvs">maroli</option>
                                <option value="nvs">maroli</option>
                                <option value="nvs">maroli</option>
                                <option value="srt">Surat</option>
                                <option value="kim">Kim</option>
                            <option value="nvs">maroli</option>
                        <option value="nvs">maroli</option>
                    <option value="nvs">maroli</option>
                <option value="nvs">maroli</option>
            <option value="nvs">maroli</option>
        <option value="nvs">maroli</option>
        <option value="nvs">maroli</option> -->

        </select>

    
    <input type="date" name = "date" value="<?php echo $date;?>">


  <input type="submit" value="SEARCH"/>
</div>
</div> 

</div> 

</div>
</div>

        </form>


<div class="avl"><br>
    <label>Class</label>
    <br><br>
    <input type="checkbox">1A
    <input type="checkbox">2A
    <br><br>
    <input type="checkbox">3A
    <input type="checkbox">SL

<div class="vl">
<br>
<label>Quota</label><br><br>
    <input type="radio" id="html" name="fav_language" value="HTML">General
    <input type="radio" id="html" name="fav_language" value="CSS">Lower Berth
<br><br>
    <input type="radio" id="html" name="fav_language" value="PHP">Ladies
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="JAVASCRIPT" 
    name="fav_language" value="JQUERY">Tatkal
   
    
</div>
</div>


<?php
 include("db11.php");

$sql = "SELECT * FROM `trains` 
INNER JOIN `scheduletb` ON `trains`.`Train_Number` = `scheduletb`.`Train_Number` 
INNER JOIN `routes` ON `scheduletb`.`Train_Number` = `routes`.`Train_Number` 
INNER JOIN `avlabalset` ON `routes`.`Train_Number` = `avlabalset`.`Train_Number`
WHERE `scheduletb`.`Froms` = '$red' 
AND `scheduletb`.`Tos` = '$yer' 
AND `routes`.`date` = '$date'
AND `avlabalset`.`date`='$date'";

$result = $conn->query($sql);
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$conn->close();



?>

<?php foreach ($data as $row): ?>
        
    <div class="in">
    <?php

$_SESSION['Train_Number']=$row['Train_Number'];
$_SESSION['Train_Name']=$row['Train_Name'];
$_SESSION['date']=$row['date'];
$_SESSION['pris'] = $row['pris'];
$_SESSION['fc_pris']=$row['fc_pris'];
$_SESSION['sc_prise']=$row['sc_prise'];
$_SESSION['tc_pris']=$row['tc_pris'];
$_SESSION['available_set']=$row['available_set'];
$_SESSION['Frist_Class']=$row['Frist_Class'];
$_SESSION['Second_Class']=$row['Second_Class'];
$_SESSION['Third_Class']=$row['Third_Class'];



?>  
<br><table>
    <form action="pasanger.php" method="POST">
        
   <td class="td1"><?php echo $row['Train_Number'];?> <?php echo $row['Train_Name'];?> </td>
   </table>
<p class="pi"> <?php echo $row['date'];?></p>


   
   <hr class="hr">

   <?php echo " <input type='hidden' name='Train_Number' value='".$_SESSION['Train_Number']."'>"; ?>
   <?php echo " <input type='hidden' name='Train_Name' value='".$_SESSION['Train_Name']."'>"; ?>
   <?php echo " <input type='hidden' name='date' value='".$_SESSION['date']."'>"; ?>
    
   
            <button type="submit"  name="class" value="available_set" formaction= "pasger_as.php">₹<?php echo $row['pris'];?><br>2S Class
            <br>Available <?php echo $row['available_set'];?></button>
            <button type="submit" name="class" value = "Frist_Class" formaction= "pasger_fc.php">₹<?php echo $row['fc_pris'];?><br>A1 Class
            <br>Available <?php echo $row['Frist_Class'];?></button>
            <button type="submit"  name="class" value="Second_Class" formaction= "pasger_sc.php">₹<?php echo $row['sc_prise'];?><br>2A Class
            <br>Available <?php echo $row['Second_Class'];?>sc</button>
            <button type="submit" name="class" value="Third_Class" formaction= "pasger_tc.php">₹<?php echo $row['tc_pris'];?><br>#3A Class
            <br>Available <?php echo $row['Third_Class'];?></button>
                </form>
</div>
        
    <?php endforeach; ?>


<?php
             // LOOP TILL END OF DATA
            // while($rows=$result->fetch_assoc())
             // {
            ?>











<!-- <!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>serch TrainDetails</title>
    CSS FOR STYLING THE PAGE -->
    
        
<!-- </head>
 
<body>
    <section>
        <h1>TrainDetails</h1> -->
        <!-- TABLE CONSTRUCTION -->
        <!-- <table>
            <tr>
                <th>Train Numbar</th>
                <th>Train Name</th>
                <th>From</th>
                <th>TO </th>
                <th>date </th>
                <th>distions</th>
                <th>prise </th>
                <th>fcp</th>
                <th>scp</th>
                <th>tcp</th>
                <th>froms</th>
                <th>tos</th>
                
                



            </tr> -->
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
          
            <!-- <tr>
                 FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN 
                <td><?php echo $rows['Train_Number'];?></td>
                <td><?php echo $rows['Train_Name'];?></td>
                <td><?php echo $rows['Froms'];?></td>
                <td><?php echo $rows['Tos'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['distion'];?></td>
                <td><?php echo $rows['pris'];?></td>
                <td><?php echo $rows['fc_pris'];?></td>
                <td><?php echo $rows['sc_prise'];?></td>
                <td><?php echo $rows['tc_pris'];?></td>
                <td><?php echo $rows['Fomestart'];?></td>
                <td><?php echo $rows['Toend'];?></td>
            </tr> -->
            <?php
                // }
            ?>
        <!-- </table>
    </section>
</body>
 
</html> -->






<!-- <div class="in">
<br><table>
   <td class="td1">Vadanagar Intercity SF Express-20959</td>
</table>
<p class="pi">Runs on: S M T W T F S * Hamsafar/Expres</p>
<input type="submit" value="Show Availability"/>    
   <hr class="hr">
   
                <button type="submit" name="2s">2S Available
            <button type="submit" name="cc">CC Available
        
</div>
<br>


<div class="train2">
<br><table>
    <td class="td2">12901 Gujrat Mail</td>
</table>
<p class="p2">Runs on: S M T W T F S * Gujarat/Mail</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
        
</div><br>


<div class="train3">
<br><table>
    <td class="td3">12425 Jammu Rajdhani</td>
</table>
<p class="p3">Runs on: S M T W T F S * Jammu/Rajdhani</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available
</div><br>

<div class="train4">
<br><table>
    <td class="td4">22172 Pune Humsafar</td>
</table>
<p class="p4">Runs on: S M T W T F S * Pune/Hamsafar</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train5">
<br><table>
    <td class="td5">20902 IRCTC VANDE BHARAT</td>
</table>
<p class="p5">Runs on: S M T W T F S * IRCTC Vande/bharat</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available
</div><br>


<div class="train6">
<br><table>
    <td class="td6">12010 Shatabdi Express</td>
</table>
<p class="p6">Runs on: S M T W T F S * Shatabdi/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train7">
<br><table>
    <td class="td7">82902 IRCTC Tejas Express</td>
</table>
<p class="p7">Runs on: S M T W T F S * Tejas/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">2S Available
                <button type="submit" name="sl">SL Available
             <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available
</div><br>


<div class="train8">
<br><table>
    <td class="td8">Mmct Tejas Raj - 12952</td>
</table>
<p class="p8">Runs on: S M T W T F S * Tejas/raj</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train9">
<br><table>
    <td class="td9">Mumbai Mail - 12321</td>
</table>
<p class="p9">Runs on: S M T W T F S * Mumbai/mail</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available

</div><br>


<div class="train10">
<br><table>
    <td class="td10">Karnataka Express - 12627</td>
</table>
<p class="p10">Runs on: S M T W T F S * karnataka/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train11">
<br><table>
    <td class="td11">Gujarat Queen - 19033</td>
</table>
<p class="p11">Runs on: S M T W T F S * Gujarat/queen</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">2S Available
            <button type="submit" name="3a">CC Available
        
</div><br>


<div class="train12">
<br><table>
    <td class="td12">Vadnagar Intercity SF Express - 20959</td>
</table>
<p class="p12">Runs on: S M T W T F S * Vadnagar/intercity</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train13">
<br><table>
    <td class="td13">Saurashtra Express - 19015</td>
</table>
<p class="p13">Runs on: S M T W T F S * Saurashtra/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">2S Available
                <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available
</div><br>


<div class="train14">
<br><table>
    <td class="td14">Paschim SF Express - 12925</td>
</table>
<p class="p14">Runs on: S M T W T F S * Paschim/SF Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
   <button type="submit" name="2s">2S Available
        <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
                <button type="submit" name="2a">2A Available
</div><br>


<div class="train15">
<br><table>
    <td class="td15">Ahembdabad AC Double Decker Express - 12931</td>
</table>
<p class="p15">Runs on: S M T W T F S * Double dacker/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
        <button type="submit" name="3a">3A Available
    <button type="submit" name="2a">2A Available
</div><br>


<div class="train16">
<br><table>
    <td class="td16">Avantika SF Express - 12961</td>
</table>
<p class="p16">Runs on: S M T W T F S * Avantika/SF Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
   <button type="submit" name="2s">2S Available
        <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
                <button type="submit" name="2a">2A Available
</div>



<div class="train17">
<br><table>
    <td class="td17">Suryanagari SF Express - 12480</td>
</table>
<p class="p17">Runs on: S M T W T F S * Suryanagari/SF</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
                    <button type="submit" name="2a">1A Available
        
</div><br>



<div class="train18">
<br><table>
    <td class="td18">Vadodara SF Express - 22929</td>
</table>
<p class="p18">Runs on: S M T W T F S * Vadodara/SF</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">2S Available
</div><br>



<div class="train19">
<br><table>
    <td class="td19">Surat Intercity Express - 12935</td>
</table>
<p class="p19">Runs on: S M T W T F S * Surat intercity/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">2S Available
                <button type="submit" name="3a">CC Available
              
        
</div><br>



<div class="train20">
<br><table>
    <td class="td20">Ranakpur Express - 14708</td>
</table>
<p class="p20">Runs on: S M T W T F S * Ranakpur/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
        
</div><br>



<div class="train21">
<br><table>
    <td class="td21">Flying Ranee - 12921</td>
</table>
<p class="p21">Runs on: S M T W T F S * Flying/Ranee</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">2S Available
                <button type="submit" name="3a">CC Available
                    
        
</div><br>



<div class="train22">
<br><table>
    <td class="td22">Howrah AC Duronto Express - 12221</td>
</table>
<p class="p22">Runs on: S M T W T F S * Howrah/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">3A Available
                    <button type="submit" name="2a">2A Available
                    <button type="submit" name="2a">1A Available
        
</div><br>



<div class="train23">
<br><table>
    <td class="td23">Coromandel Express - 12842</td>
</table>
<p class="p23">Runs on: S M T W T F S * Coromandel/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
                    <button type="submit" name="2a">A1 Available
        
</div><br>



<div class="train24">
<br><table>
    <td class="td24">Solapur Vande Bharat Express - 22225</td>
</table>
<p class="p24">Runs on: S M T W T F S * Solapur Vande Baharat/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">CC Available
            <button type="submit" name="sl">EC Available
               
        
</div><br>



<div class="train25">
<br><table>
    <td class="td25">Kaniyakumari Express - 16381</td>
</table>
<p class="p25">Runs on: S M T W T F S * Kaniyakumati/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
        
</div><br>



<div class="train26">
<br><table>
    <td class="td26">Sainagar Shirdi Vande Bharat Express - 22223</td>
</table>
<p class="p26">Runs on: S M T W T F S * Sainagar Vande Baharat/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">CC Available
            <button type="submit" name="sl">EC Available
</div><br>


<div class="train27">
<br><table>
    <td class="td27">Sainagar Shirdi Express - 16381</td>
</table>
<p class="p27">Runs on: S M T W T F S * Sainagar/Exp</p>
    <input type="submit" value="Show Availability"/>
     
   <hr class="hr">
        <button type="submit" name="2s">GN Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
        
</div><br>


<div class="train28">
<br><table>
    <td class="td28">Mmct Tejas Raj - 12952</td>
</table>
<p class="p28">Runs on: S M T W T F S * Tejas/raj</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train29">
<br><table>
    <td class="td29">Mumbai Mail - 12321</td>
</table>
<p class="p29">Runs on: S M T W T F S * Mumbai/mail</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">SL Available
            <button type="submit" name="3a">3A Available
        <button type="submit" name="2a">2A Available

</div><br>


<div class="train30">
<br><table>
    <td class="td30">Karnataka Express - 12627</td>
</table>
<p class="p30">Runs on: S M T W T F S * karnataka/Expres</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div><br>


<div class="train31">
<br><table>
    <td class="td31">Gujarat Queen - 19033</td>
</table>
<p class="p31">Runs on: S M T W T F S * Gujarat/queen</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
                    <button type="submit" name="2s">GN Available
                <button type="submit" name="sl">2S Available
            <button type="submit" name="3a">CC Available
        
</div><br>


<div class="train32">
<br><table>
    <td class="td32">Vadnagar Intercity SF Express - 20959</td>
</table>
<p class="p32">Runs on: S M T W T F S * Vadnagar/intercity</p>
<input type="submit" value="Show Availability"/>
   <hr class="hr"> 
        <button type="submit" name="2s">2S Available
            <button type="submit" name="sl">SL Available
                <button type="submit" name="3a">3A Available
                    <button type="submit" name="2a">2A Available
</div>
<br> -->
    </body>
</html>