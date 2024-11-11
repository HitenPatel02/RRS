<html lang="en">
<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
    $Train_Number = $_SESSION['BokTrain_Number'] ;
    $Train_Name = $_SESSION['BokTrain_Name'];
    $date = $_SESSION['Bokdate'];
    $class = $_SESSION['class'] ;
?>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" href="style_bookking.css"/>
</head>
  <body>

  <?php





if(isset($_POST['sev_sel_val']))
{
  $checkboxValue = $_POST['checkboxValue'];
 
  foreach ($checkboxValue as $chckpanseger)
   {
    // if there are 15 $item[number] in this foreach, I want get the value : 15
   
  //  print_r($chckpanseger);
    
     $test[]=$chckpanseger;

     


    $_SESSION['arayydata'] = $test ;
    // print_r($_SESSION['arayydata']);
    
  
    
  
    }
    

  }

else{
  echo "no sev sev valll ";
}






















 



  ?>




<?php 
require("db11.php");

$froms = $_SESSION['froms'];
$ends= $_SESSION['end'] ;
$sdate= $_SESSION['sdate'] ;






$sql="SELECT * FROM `scheduletb` 
INNER JOIN `avlabalset` ON `scheduletb`.`Train_Number` = `avlabalset`.`Train_Number` 
WHERE `scheduletb`.`Train_Number` = '$Train_Number' 
AND `scheduletb`.`Froms`= '$froms' 
AND `scheduletb`.`Tos` = '$ends' 
AND `avlabalset`.`date` = '$sdate'
AND `avlabalset`.`Frist_Class`
AND `scheduletb`.`distion` ";

$query=mysqli_query($conn,$sql)or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
        
       
        $row = mysqli_num_rows($query);


 
        if($row > 0){
           
            
       $seta= $fetch['Frist_Class'];

      $_SESSION["distion"] = $fetch['distion'];
      // echo "<br><b>distion".$_SESSION["distion"]."/KM</b> ";

             $_SESSION['avlsett']=$seta;


       $_SESSION['cgackprise']= $fetch['fc_pris'];
  



?>






    <form action="Review_fc.php" method="post">
    <div class="full">
      <div class="yy">
        <ul>
        <li><a href="available.php"><</a></li>
        <p>Booking Details</p>
        <h5>Booking details</h5>
    </ul>
    </div>
    <br><br>  
    <div id="reg"><br>
       <p id="p1"> <?php echo $_SESSION['class'];?> ₹<?php echo $fetch['fc_pris'];?>&nbsp;// Available <?php echo $seta;?></p>
     <?php
      }else{
        echo "No Tikit Avlabel";
    }

    mysqli_close($conn);

    ?>
       <br><hr><br>
       <p class="p2"><?php echo $date;?> </p>
       <p id="p3"> <?php echo $Train_Number;?> - <?php echo $Train_Name;?></p>
       <br> 
      <hr><br>
      <label>Boarding Station</label>
    <select class="bord">
      <option value="nvs">Navsari - NVS</option>
      <option value="srt">Surat - ST</option>
      <option value="bharuch">BharuchJN - BH</option>
      <option value="karjan">Karjan - KJ</option>
      <option value="vadodara">Vadodara - BRC</option>
      <option value="anand">Anand - ANND</option>

</select>
</div><br>

<h6>IRCTC ACCOUNT DETAILS</h6>
<div id="us">
  <input type="text" placeholder="IRCTC User ID" name="pnrnum" required/>
  <input type="submit" value="Save" /><?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['pnrnum'] =$_POST['pnrnum'];
   
  
    // Do something with the form data, such as saving it to a database or processing it further
    // ...
  }?>
  <p id="fid"><a href="register.php">Forgot ID ?</a></p>
  <p class="k">Don't have account?&nbsp; <a href="pnrregister.php">Register</a></p>
  <p class="loi">
  <p id="we">irctc Icon
Keep your IRCTC password handy.</p></p>
</div>
 

<p class="tit">TRAVELLERS</p><br>
<div class="trav">
  <?php




 




$arr= $_SESSION['arayydata'];



 $names = implode('\', \'', $arr);

$fin = "'" .$names."'";

// echo $fin;

  $ChckNum = count($arr);
  // echo $ChckNum;

require 'db02.php';

$unamee = $_SESSION['uname'] ;
// echo $unamee;


   $sql="SELECT *  FROM `pasanger` WHERE `uname` = '$unamee' AND `pname` IN ($fin) " ;


 
$result = $conn->query($sql);



  $data = array();

 while ($row = mysqli_fetch_assoc($result))
  {
   $data[] = $row;
   
   $_SESSION['sdata']=$data;

   
  }

   $conn->close();

  foreach ($data as $row):
  echo "<div><br>&nbsp;&nbsp;".$row['pname'] ."<br> &nbsp;&nbsp;" .$row['age']  .$row['gender']. '<br></div>';

    $cpname[] = $row['pname'];
    $_SESSION['cpname']=$cpname;
    
 
  endforeach;

  $abc = $_SESSION['cpname'];?>
  <br>
<p class="cc">ADD Traveller</p>

<div id="col">
  <li class="it"><a href="pasger_fc.php">ADD+</a></li>

 
<p id="u">#Name should be same as Government ID Proof.</p>
</div></div>


<div id="contact">CONTACT DETAILS
</div>

<div class="con"><br>
<label>Mobile Number</label>
    <input type="number" placeholder="+91  Mobile Number" name="mobnum" required/>
<br><br><br>

<label>Email Address</label>
    <input type="email" placeholder="Email address" name="emailid" required/>
<p class="ni"><p id="yy">We will share the booking details via SMS, E-mail and Mobile number.</p></p>
</div>

<div class="btn">
  <input type="submit" value="REVIEW AND PAY" />
</div>
</div>
</form>
<?php
$arr= $_SESSION['arayydata'];





$names = implode('\', \'', $arr);

$fin = "'" . $names . "'";

foreach( $arr as $element ) {

}




// echo $fin;?>
<?php

  // print_r($abc) ;


    
//  }
//  else {
//        echo "0 results";
//   }
/////
// $retval = mysqli_query( $conn ,$sql);
   
// if(! $retval ) {
//    die('Could not get data: ' . mysqli_error());
// }

// while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
//    echo "EMP ID :{$row['pname']}  <br> ".
      
      
//       "--------------------------------<br>";
// }



 

// $result = $conn->query($sql);
   
// if($result->num_rows > 0)  {
//     while($row = $result->fetch_assoc()){
//         echo "<br>".$row['pname'] . "<br>";

//     }
// } else {
//     echo "0 results";
// }
   
// $conn->close();


 
       

    // mysqli_close($conn);  
           
            
      

// if($result ->num_rows > 0)  {
//   while($row = $result->fetch_assoc()){
//       echo $row['pname'] . "<br>"; 
//   }
// } else {
//   echo "0 results";
// }



?>

  </body>
</html>