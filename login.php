<html lang="en">
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="style_login.css"/>
</head>

    <body>
        <div class="main"><p class="main1"><br>WELCOME TO<br>
        <span>RAILWAY<br>RESERVATION<br>SYSTEM</span><br><br>
        IRCTC Authorised Partner
        <div class="link">Do you have now <a href="index.php">Home Page?</a>
    </div>
    </p>
 <div class="in">
    <br>

        <h1 class="h1">&nbsp;&nbsp;&nbsp;Log in</h1>
        <form action="logback.php" method="POST">
           
            <input type="text" placeholder="Enter Your Username......" name="uname" required/>
            <br><br>
            <input type="password" placeholder="Enter password......" name="pwd" required/>
            <br>
            <input type="submit"  name = "login"value="LOGIN"/>
            <br>
        <div class="rem">Don't have an account? 
            <a href="register.php">Register</a>
        </div>
            

    </div>
</div>
        </form>
    </body>
</head>
</html>