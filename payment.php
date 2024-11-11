<html lang="en">
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="style__payment.css"/>
</head>
    <body>
        <div class="full">
        <div id="pay">
        
        <ul>
                <li><a href="home.php">&nbsp;RRS</a></li>
</ul>
        </div>

        <div class="amount">

        </div>

        <div id="method"><br>
            <p class="p0"><img src="world-mastercard-card_1280x720.jpg"></p>
            <p id="p1">Credit / Debit card</p>
            <br>
        

            <p class="p0"><img src="274-2746824_bhim-icon-png-image-free-download-searchpng-bhim.png"></p>
            <p id="p2"><a href="upi.php">UPI</a></p><br>


            <p class="p0"><img src="bank-icon-vector-isolated-white-background-sign-transparent-134604955.jpg"></p>
            <p id="p3"><a href="net_banking.php">NetBanking</a></p>
            <br>

            
            <p class="p0"><img src="wallet-design-template-1dcf513e8e977cc22fc6c55a18672c6d_screen.jpg"></p>
            <p id="p4"><a href="eifh">Wallets</a></p>
            <br>

            
            <p class="p0"><img src="1977586-200.png"></p>
            <p id="p5"><a href="ewf">PayLater</a></p>
            <br>
</div>
 </div>

 <div id="sidemethod"><br><br>
    <p class="t1">Enter Credit Card / Debit card</p>
    <br><br><br>
    <label>Card Number</label><br>
    <input type="number" name="cardnum" placeholder="Enter Card Number"/>
    <br><br><br>

    <label>Expiry</label><br>
    <input type="number" name="mmyy" placeholder="MM/YY"/>
    <br><br><br>

    <label>CVV</label><br>
    <input type="number" name="cvv" placeholder="CVV"/>
    <br>
    <input type="submit" value="PROCCESS TO PAY"/>
 </div>
</div>
</body>
</html>
