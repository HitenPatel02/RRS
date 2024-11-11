<html lang="en">
<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }


   $class =  $_SESSION['p_page'] ;

//    echo  $class;
?>
<html>
    <head>
        <title>website</title>
</head>
<link rel="stylesheet" href="style_addtrav.css"/>
 <body>
      <form action="addtravelinsert.php" method="post">
    <div class="white">
    <div class="zz">
        <ul>
        <li><a href="pasanger.php">&nbsp;<</a></li>
        <p id="sel"><h5>Add Traveller</h5></p>
</ul>
    </div>
        <div class="frm"><br>
        <label>Name</label>
            <input type="text" name="pname" placeholder="Enter your name......" required/>
            

       
        
</div><br>
        <input type="submit" value="ADD TRAVELLER"/>

</div>
</form>
</body>
</html>