
<?php error_reporting(0); ?>
<?php


session_start();
if(!ISSET($_SESSION['uname'])){
    header('location:login.php');
}

?>


<?php

$Train_Number = $_SESSION['BokTrain_Number'] ;
$Train_Name = $_SESSION['BokTrain_Name'];
$date = $_SESSION['Bokdate'];
$class = $_SESSION['class'];
$froms = $_SESSION['froms'];
$ends= $_SESSION['end'] ;
$total = $_SESSION['pptotal'];

$distion = $_SESSION["distion"];
//$sdate= $_SESSION['sdate'] ;




$pnrnum = $_SESSION['pnrnum'] ;
$mobnum = $_SESSION['mobnum'];
$emailid  = $_SESSION['emailid'];

// $avlset = $_SESSION['avlsett'];

// echo $avlset ;

 
   // echo "<br>".$_SESSION['chckpanseger']."<br>";
   // echo $chckpanseger ;
   
   
   
   $arr= $_SESSION['arayydata'];


   $ChckNum = count($arr);
   
  //  print_r ($arr);
  

   // $arr01 = array("MEGAN", "TIM");
   
   
   // print_r($arr01);
   
   
    $names = implode('\', \'', $arr);
   
   $fin = "'" .$names."'";
   // $fin = $names;
   
   
   
   // echo $_SESSION['uname'];
  //  echo $fin;
   
    
   
   require 'db02.php';
   
   $unamee = $_SESSION['uname'] ;
  //  echo $unamee;
   
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
      // print_r($_SESSION['sdata']);
      
     }
   
      $conn->close();
   
     foreach ($data as $row):

      // echo "<div><br><b>".$row['pname'] ."<br>" .$row['age']  .$row['gender'].$row['seet']. '</b><br></div>';
   
      $cpname[] = $row['pname'];
      $_SESSION['cpname']=$cpname;
/////inser query
require('db11.php');

      $pname =  $row['pname'] ;
      $page = $row['age'];
      $pgender = $row['gender'];
      $pseet = $row['seet'];


      // $sql2 = "INSERT INTO `resavetion` (`Id`, `uname`, `pnrnum`, `pnarphone`, `pnremail`, `pasenger_name`, `pasenger_age`, `pasenger_set`)
      //  VALUES (NULL, '$unamee', '$pname', '$pnrnum', '$mobnum', '$emailid ', '$page', '$pseet');";
      $sql2 = "INSERT INTO `resavetion`(`Id`, `uname`, `pnrnum`, 
      `BTrain_Number`, `BTrain_Name`, `Bdate`, `Bclass`, `Bfroms`, `Bends`, `Btotal_prise`,
       `pnremail`, `pnarphone`, `pasenger_name`, `pasenger_age`, `pgender`, `pasenger_set`)
     VALUES (NULL , '$unamee', '$pnrnum', '$Train_Number', '$Train_Name', '$date', '$class',
     '$froms', '$ends', '$total', '$emailid', '$mobnum', '$pname', '$page', '$pgender', '$pseet')";
       $sql_run = mysqli_query($conn, $sql2);

      
      
       
       // print_r($_SESSION['cpname']);
   
     endforeach;


     if($sql_run){
      // echo "Resarvetion  Sucsess ";
      
     }
     else{
      echo "data not insertssss";
     }
   
     $abc = $_SESSION['cpname'];


     function generateTicketCode() {
        return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 6);
    }
    
    
    for ($i = 0; $i < $ChckNum; $i++) {
        $ticketCode = generateTicketCode();
        // $reservedTickets[$ticketCode] = $ticketType;

        
    }




?>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" href="style__review1.css"/>
</head>
  <body>
    <!-- <form action="payment.php" method="post"> -->
    <div class="full">
      <div class="yy">
        <ul>
        <!-- <li><a href="available.php"><</a></li> -->
        <p>Your Train Ticket</p>
        <h5>Booking details</h5>
    </ul>
    </div>
    <br><br> 
    <div id="reg"><br>
       <p id="p1">Class:&nbsp;<?php echo $class;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:&nbsp;<?php echo $date;?> </p>
      
       <hr><br>
       <!-- <p class="p2"><?php echo $date;?> </p> -->
       <p id="p3"><?php echo $Train_Number;?>&nbsp;-&nbsp;<?php echo $Train_Name;?></p><br>

       <h4><?php echo $froms;?>&nbsp;----------------------------------&nbsp;<?php echo $distion."/KM</b> ";?>&nbsp;----------------------------------
       &nbsp;<?php echo $ends;?> </h4>
       <?php
       echo "<h4>";
       echo"<br>User Id:&nbsp;&nbsp;" .$_SESSION['pnrnum'] ;
       echo "<br>";
echo "<br>Pasanger Mobile Number: &nbsp;&nbsp;" .$_SESSION['mobnum'] ;
echo "<br>";
echo "<br>Pasanger EmailID: &nbsp;&nbsp;" .$_SESSION['emailid'] ;
echo "<br>";
echo "</h4>";
?>
       <br> 
</div>



<p class="tit">TRAVELLERS  <?php 
echo $ChckNum;

?></p><br>
<div class="trav"><br>


<?php
foreach ($data as $row):

echo "<div><br><p class='cc'>".$row['pname'] ."<br>" .$row['age']."&nbsp;&nbsp;"  .$row['gender']. '</p><br></div>';


endforeach;

?>

<div id="col">
<p id="u">Berth/Coach numbers are assigned by Indian Railways</p>
</div></div>


<div class="amount"><br>
 <BR><BR>
 <button onclick='window.print()'>Print</button>


 <button> <a href="home.php"> Home </a></button>
</div>
</body>
</html>

<?php
require 'db11.php';
$arr= $_SESSION['arayydata'];


$ChckNum = count($arr);
echo "<br>".$ChckNum;
echo $Train_Number;

$sql = "UPDATE `avlabalset` SET `Second_Class`=`Second_Class` - $ChckNum
WHERE `Train_Number`= '$Train_Number' AND `date`= '$date'";

if (mysqli_query($conn, $sql)) 
{
    // echo "<script>alert('Regester Successfully!')</script>";
    // echo "<script>window.location='login.php'</script>";
}


mysqli_close($conn);



?>





