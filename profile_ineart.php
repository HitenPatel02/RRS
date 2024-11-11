<?php error_reporting(0); ?>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="style_profile_user.css"/>
</head>
    <body>
          <form action="profileinser.php" method="post">
        
        <div class="navbar">
          <ul>
          <li><a href="home.php">&nbsp;<</a></li>
          <p>User Profile</p>
</ul>
</div>
       
       <div class="fillname"><br>
          <label>GENEREL DETAILS</label><br>
          <input type="text" placeholder="FULL NAME" name="fname"/>

</div>

<div id="dob"><br>
    <label>DATE OF BIRTH</label><br>
    <input type="date" placeholder="FULL NAME" name="dob"/>

</div><br>

<div id="gen"><br>
    <label>GENDER</label><br><br>
    <label id="lb">Male</label>
    <input type="radio" id="male" name="gender" value="male"/>
         <label id="lb1">Female</label>
         <input type="radio" id="female" name="gender" value="female"/>
         <label id="lb2">Other</label>
         <input type="radio" id="other" name="gender" value="other"/>
</div>

<div id="mrt"><br>
    <label>MARIT STATUS</label><br>
    <label id="stat1">Single</label>
    <input type="radio" id="sing" name="status" value="single"/>
         <label id="stat2">Married</label>
    <input type="radio" id="mrd" name="status" value="married"/>

    <div id="ann"><br>
    <label>ANNIVERSARY</label><br>
    <input type="date" name="aname"  />


<div class="national">

<select class="country" name="country" >
            <option value="India(IND)">India(IND)</option>
            <option value="Unite State(US)">Unite State(US)</option>
            <option value="Japan(JAP)">Japan(JAP)</option>
            <option value="United Kingdom(UK)">United Kingdom(UK)</option>
            <option value="Brazil(BZL)">Brazil(BZL)</option>
            <option value="Canada(CAN)">Canada(CAN)</option>
</select>
</div>

<div class="srch"><br>
<label>WHERE DO YOU LIVE?</label><br><br>
<input type="search" placeholder="Search your City"  name="src"/>
</div><br>
<hr>

<div class="eml"><br>
    <p id="p1">CONTACT DETAILS</p><br>
    <input type="email" placeholder="Enter your email ID"  name="email"/>
</div>

<div class="mob"><br>
    <p id="p2">MOBILE NUMBER</p><br>
    <input type="number" placeholder="Enter your Number" name="num"/>
</div>

<div id="btnn">
 <input type="submit" value="SAVE"/>
</div>
</div>
</body>
</html>