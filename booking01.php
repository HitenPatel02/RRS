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


// $pris = $_SESSION['Bokpris'];
// $set = $_post['set'];





// echo "Select Class set ".$class;


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
    
    // print_r ($_SESSION['arayydata']);
    
  
    }
    

  }

else{
  echo "no sev sev valll ";
}











// $_SESSION['BokTrain_Number'] 
// $_SESSION['BokTrain_Name'] 
// $_SESSION['Bokdate']
// $_SESSION['Bokpris'] 









// echo $Train_Number."<br>";
// echo $Train_Name."<br>";
// echo $date."<br>";
// // echo $set;
// echo "₹".$pris;

  // $pnamechek = $_POST['pnamechek'];



  // echo "$pnamechek" ;
 



  ?>




<?php 
require("db11.php");

$froms = $_SESSION['froms'];
$ends= $_SESSION['end'] ;
$sdate= $_SESSION['sdate'] ;

// echo $froms.$ends.$sdate;





$sql="SELECT * FROM `scheduletb` 
INNER JOIN `avlabalset` ON `scheduletb`.`Train_Number` = `avlabalset`.`Train_Number` 
WHERE `scheduletb`.`Train_Number` = '$Train_Number' 
AND `scheduletb`.`Froms`= '$froms' 
AND `scheduletb`.`Tos` = '$ends' 
AND `avlabalset`.`date` = '$sdate'
AND `avlabalset`.`available_set` = '$class'
AND `avlabalset`.`Frist_Class` = '$class'
AND `avlabalset`.`Second_Class` = '$class'
AND `avlabalset`.`Third_Class` = '$class'
AND `scheduletb`.`distion` ";

$query=mysqli_query($conn,$sql)or die(mysqli_error());
$fetch = mysqli_fetch_array($query);
        
       
        $row = mysqli_num_rows($query);


 
        if($row > 0){
            // echo "<br>".$class."set";
            // echo "<br>".$fetch['available_set'];
            // echo "<br>".$fetch['pris'];
            // echo "<br><b>distion".$fetch['distion']."/KM</b>";
            
       $seta= $fetch['available_set'];


       $_SESSION['avlsett']=$seta;


       $_SESSION['cgackprise']= $fetch['pris'];
      //  $_SESSION['chackclass']=$fetch['Secund_Class'];



?>






    <form action="Review.php" method="post">
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
       <p id="p1"> <?php echo "<br>".$class;?> <?php echo $_SESSION['class'];?>₹<?php echo $fetch['sc_prise'];?>// avl <?php echo $seta;?></p>
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
  <input type="button" value="Save" /><?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['pnrnum'] =$_POST['pnrnum'];
   
  
    // Do something with the form data, such as saving it to a database or processing it further
    // ...
  }?>
  <p id="fid"><a href="register.php">Forgot ID ?</a></p>
  <p class="k">Don't have account?&nbsp; <a href="register.php">Register</a></p>
  <p class="loi">
  <p id="we">irctc Icon
Keep your IRCTC password handy.</p></p>
</div>
 

<p class="tit">TRAVELLERS</p><br>
<div class="trav">
  <?php




 
// echo "<br>".$_SESSION['chckpanseger']."<br>";
// echo $chckpanseger ;



$arr= $_SESSION['arayydata'];

// $arr01 = array("MEGAN", "TIM");


// print_r($arr01);
// print_r ($arr);

 $names = implode('\', \'', $arr);

$fin = "'" .$names."'";
// $fin = $names;



// echo $_SESSION['uname'];
// echo $fin;

  $ChckNum = count($arr);
  // echo $ChckNum;

require 'db02.php';

$unamee = $_SESSION['uname'] ;
// echo $unamee;

//  $query =  "SELECT * FROM `pasanger` WHERE `pname` IN ('.$fin.')";
   $sql="SELECT *  FROM `pasanger` WHERE `uname` = '$unamee' AND `pname` IN ($fin) " ;

  // $sql="SELECT *  FROM `pasanger` WHERE `uname` LIKE 'Hiten' AND `pname` IN ('hiten patel','vipal patel')";

//  $sql =  "SELECT * FROM `pasanger` WHERE `uname` LIKE '$_SESSION[uname]'";
 
$result = $conn->query($sql);


// while ($row = $result->fetch_assoc()) {
//   echo "<br><b>".$row['pname']   . $row['age']  .$row['gender'].$row['seet']. '</b><br>';
// }


  $data = array();

// // //  if($result->num_rows > 0) 
// // // //   {
 while ($row = mysqli_fetch_assoc($result))
  {
   $data[] = $row;
   
   $_SESSION['sdata']=$data;
  //  print_r($_SESSION['sdata']);
   
  }

   $conn->close();

  foreach ($data as $row):
  echo "<div><br>&nbsp;&nbsp;".$row['pname'] ."<br> &nbsp;&nbsp;" .$row['age']  .$row['gender'].$row['seet']. '<br></div>';

    $cpname[] = $row['pname'];
    $_SESSION['cpname']=$cpname;
    
    // print_r($_SESSION['cpname']);

  endforeach;

  $abc = $_SESSION['cpname'];?>
  <br>
<p class="cc">ADD Traveller</p>

<div id="col">
  <li class="it"><a href="pasger_as.php">ADD+</a></li>

  <!-- <input type = "submit" formaction= "pasger_as.php"> -->
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
// echo $_SESSION['pnrnum'] ;




$names = implode('\', \'', $arr);

$fin = "'" . $names . "'";

foreach( $arr as $element ) {
  // PHP Code to be executed\\
  // echo $element."<br>";
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