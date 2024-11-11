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
                <br><br><br>

        <label>Age</label>
            <input type="number" name="age" placeholder="Enter your name......" required/>
            <br><br><br>  

        <label>Gender</label><br><br>
            <input type="radio" name="gender" value="Male"/>Male
                <input type="radio" name="gender" value="Female"/>Female
                <br><br>
                
            <select class="sell" name = "seet">
                <h2 class="h2">baesr</h2>
                <option value="nopreference">No Preferance</option>
                <option value="lower">Windows</option>
                <option value="upper">Upper</option>
                <option value="sidelower">Side Lower</option>
                <option value="sideupper">Side Upper</option>
</select>
   <br><br>
            <select id="seas" name = "cun">
           
                <option value="india">India</option>
                <option value="rusia">Rusia</option>
                <option value="japan">Japan</option>
                <option value="america">America</option>
                <option value="uk">United Kingdom</option>
                <option value="newzleand">New zleand</option>
                <option value="canada">Canada</option>
                <option value="norway">Norway</option>
                <option value="easrile">Easrile</option>
                <option value="germany">Germany</option>
            </select><br><br>
        
        <b>Please Note: No concessions are allowed in this train.
         Full fare is applicable in case of child passengers.</b>
</div><br>
        <input type="submit" value="ADD TRAVELLER"/>

</div>
</form>
</body>
</html>