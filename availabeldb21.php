<?php


$servername ="localhost";
$username ="root";
$password ="";
$dbname ="traindatabase";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check connection
   if(!$conn)
   {
    die("Connection error:".
       mysqli_connect_error());
   }
//Get Startb and End Station 
$start_station = $_POST['start_station'];
$end_station = $_POST['end_station'];

//Query fatch data from table based start and end station
$sql = "SELECT * FROM routesdb WHERE start_station = '$start_station'
AND end_station = '$end_station'";

  $result = mysqli_query($conn,$sql);
//output header 
?>


<html>
    <head>
</head> 
        <body>
<div class="iconee">
      
<div class="proe">BOOK TRAIN</div>

<option>start_station</option>
<div class="hacke">
<select class="rede">
    <option value="from">From..</option>
    <option value="mumbai">Mumbai Central</option>
    <option value="bandra">Bandra Terminus</option>
        <option value="nv"></option>
            <option value="nvs">maroli</option>
                <option value="nvs">maroli</option>
</select>

<option>end_station</option>
<select class="yere">
        <option value="to">To..</option>
        <option value="kasmir">Kashmir</option>
            <option value="">Kim</option>
                <option value="nvs">maroli</option>


        
    <label>Date</label>
    <input type="date">

</select>
  <input type="button" value="SEARCH"/>
</div>
</div> 

</div> 

</div>
</div>
</body>
</html>

<?php
//loop through

   while
    ($row= mysqli_fetch_array($result))
      {
        echo '<select class="yere">';
        echo '<option value="kasmir">Kashmir</option>';
      }

?>
   