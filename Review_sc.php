<html lang="en">
<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
    ?>

<?php

 

$_SESSION['pnrnum'] = $_POST['pnrnum'];
$_SESSION['mobnum'] = $_POST['mobnum'];
$_SESSION['emailid'] = $_POST['emailid'];

$Train_Number = $_SESSION['BokTrain_Number'] ;
$Train_Name = $_SESSION['BokTrain_Name'];
$date = $_SESSION['Bokdate'];
$froms = $_SESSION['froms'];
$ends= $_SESSION['end'] ;


// echo $Train_Number;
// echo $Train_Name;
// echo $date;


$avlset = $_SESSION['avlsett'];

echo $avlset ;

 
   // echo "<br>".$_SESSION['chckpanseger']."<br>";
   // echo $chckpanseger ;
   
   
   
   $arr= $_SESSION['arayydata'];


   $ChckNum = count($arr);
   echo "<br> this is num".$ChckNum;

  $chkprise=  $_SESSION['cgackprise'] ;
  $class = $_SESSION['class'] ;
echo"<br>" .$chkprise;
echo $class;


$total = $ChckNum * $chkprise;

echo "<br>₹".$total; 

$_SESSION['pptotal'] = $total ;

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
   echo $unamee;
   
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
      
       echo "<div><br><b>".$row['pname'] ."<br>" .$row['age']  .$row['gender'].$row['seet']. '</b><br></div>';
   
       $cpname[] = $row['pname'];
       $_SESSION['cpname']=$cpname;
       
       // print_r($_SESSION['cpname']);
   
     endforeach;
   
     $abc = $_SESSION['cpname'];
     
    //  print_r($abc) ;
?>
<html>
<head>
    <title>website</title>
    <link rel="stylesheet" href="style__review.css"/>
</head>
  <body>
    <form action="payment.php" method="post">
    <div class="full">
      <div class="yy">
        <ul>
        <li><a href="available.php"><</a></li>
        <p>Review Details</p>
        <h5>Booking details</h5>
    </ul>
    </div>
    <br><br> 
    <div id="reg"><br>
       <p id="p1"><?php echo $class;?></p>
       <p id="avl">&nbsp;<?php echo $avlset;?></p>
       <hr><br>
       <p class="p2"><?php echo $date;?></p>
       <p id="p3"><?php echo $Train_Number;?>- <?php echo $Train_Name;?></p>

       <h4><?php echo $froms;?>- <?php echo $ends;?> </h4>
       <br> 
</div>


<p class="tit">TRAVELLERS</p><br>
<div class="trav"><br>
<p class="cc">Vipal Patel</p>
<div id="col">
<p id="u">Berth/Coach numbers are assigned by Indian Railways</p>
</div></div>


<div class="amount"><br>
  <p id="rs"><?php echo "₹".$total;?></p>
  <input type="submit" value="PROCEED"  formaction = "ticket_sc.php"/>
</div>
</body>
</html>