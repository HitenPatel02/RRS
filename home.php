<!DOCTYPE html>
<?php error_reporting(0); ?>
<?php
    session_start();
    if(!ISSET($_SESSION['uname'])){
        header('location:login.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_inde.css"/>
</head>
    <body>
        <form action="available.php" method="post">
       <?php 
       include("lognvb.php");
       include("db11.php");
       include("fetch-data.php");?>
    

    <div class="icone">

        </div> 
    <div class="pro">
    </div>

        <div class="hack">
        <!-- <select class="red" name="red">
        <option value disabled selected>From....</option><br>
            <option value="Navsari (NVS)">Navsari (NVS)</option>
            <option value="Mumbai Central (CSTM)">Mumbai Central (CSTM)</option>
            <option value="Bhestan (BHET)">Bhestan (BHET)</option>
            <option value="kim (KIM)">Kim (KIM)</option>
            <option value="Maroli MRL)">Maroli (MRL)</option>
            <option value="kosamba KSB)">Kosamba (KSB)</option>
            <option value="Ankleswar (ANK)">Ankleswar (ANK)</option>
            <option value="Bharuch (BH)">Bharuch (BH)</option>
            <option value="Palej (PLJ)">Palej (PLJ)</option>
            <option value="Karjan (MYG)">karjan (MYG)</option>
            <option value="Vadodara (BRC)">Vadodara (BRC)</option>
            <option value="Vasad (VDA)">Vasad (VDA)</option>
            <option value="Anand (AND)">Anand (AND)</option>
            <option value="Nadiad (ND)">Nadiad (ND)</option>
            <option value="Mahemdavad (MHD)">Mahemdavad (MHD)</option>
            <option value="Ahmedabad Junction (ADI)">Ahmedabad Junction (ADI)</option>

</select> -->
<select class="red" name="red">
        <option value disabled selected>From....</option><br>
        <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>
</select>
    
        <!-- <select class="yer" name="yer">
        <option value disabled selected>To....</option>
        <option value="Navsari">Navsari (NVS)</option>
            <option value="Mumbai Central">Mumbai Central (CSTM)</option>
            <option value="Bhestan">Bhestan (BHET)</option>
            <option value="kim">Kim (KIM)</option>
            <option value="Maroli">Maroli (MRL)</option>
            <option value="kosamba">Kosamba (KSB)</option>
            <option value="Ankleswar">Ankleswar (ANK)</option>
            <option value="Bharuch">Bharuch (BH)</option>
            <option value="Palej">Palej (PLJ)</option>
            <option value="Karjan">karjan (MYG)</option>
            <option value="Vadodara">Vadodara (BRC)</option>
            <option value="Vasad">Vasad (VDA)</option>
            <option value="Anand">Anand (AND)</option>
            <option value="Nadiad">Nadiad (ND)</option>
            <option value="Mahemdavad">Mahemdavad (MHD)</option>
            <option value="Ahmedabad Junction">Ahmedabad Junction (ADI)</option> -->

            <select class="yer" name="yer">
        <option value disabled selected>To....</option></br>
        <?php 
         foreach ($options as $option) {
            
             echo "<option value = '".$option['Station']."'>" .$option['Station']."(".$option['startstation_id'].")"."</option>";            
                  }
              ?>



    <label>Date</label>
    <input type="date" name="date">


</select>

  <input type="submit" value="SEARCH"/>
</div>
</div> 


</div>


<div class="dell">RAILWAY RESERVATION SYSTEM
</div>
<ul>
<li class="irctc">IRCTC Authorised Partner</li>
<br><br>

<li class="p1">₹0 Payment Gateway Fee on<br>via UPI</li>

<li class="p2">Assured: Free Cancellation of<br>Train Tickets</li>

<li class="p3">24*7 Support for Train Ticket Booking</li> 


</ul>
      
<div class="hello">
<div class="hellos">Save 15% or more with<br>
                    Late Escape Deals

                    <p class="unn">Discover Deals on stay<br>
                                   between 01 Oct 22 to 03 Jan 23<br><br>
                                   <input type="submit" value="BOOK NOW"/></p>
</div></div></div>



<div class="him"> 

<div class="container">     
  <div class="mySlides">
    <div class="numbertext">
    <div id="taj">The Taj Mahal is an ivory-white marble<br>mausoleum on the
     south bank of the<span id="spn"><br>Yamuna river in the Indian city of Agra.</div></div></span>
    <img src="6695103.webp" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">
      <div id="jammu">Jammu and Kashmir, formerly one of the largest<br><span id="kashmir">princely states of India.</div></div></span>
    <img src="nature-landscape-winter-snow-clouds-hd-wallpaper-preview.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">
    <div id="goa">North Goa offers sprightly beaches like Baga,<br>Calangute,
     Anjuna and Colva, that necklace<br><span id="goa1">the northern coastline with
      tons of shacks buzzing with life</div></div></span>
    <img src="shVYSl.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="Taj Mahal">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Jammu Kashmir">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Goa Beach">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 
</div>


        <div class="trip"><br>
          <div id="next">Planing your next trip?<br></div>
        
        <span>Subscribe to our newsletter. Get the latest travel trends & deals!</span>
        
        <input type="email" name="email" placeholder="Enter email id">
        <input type="hidden" name="uname" value="<?php echo $_SESSION['uname'];?>">
        <input type="submit" value="SUBSCRIBE" formaction="subscribe_back.php"/>
        </div>

<div class="rout"><br><br>
<ul>
    <li><p class="rut1">TOP TRAIN ROUT</p></li>
    <li><p class="rut2">POPULAR TRAIN</p></li>
    <li><p class="rut3">TOP IRCTC TRAIN</p></li>
    <li><p class="rut4">POPULAR TRAIN ROUT</p></li>
<br></ul>
<hr class="hr"><br>
</div>

<div class="top"><br>
<ul>
    <li><p class="ho1">Bangalore to Chennai trains</p></li>
    <li><p class="ho2">12301 Rajdhani Expres</p></li>
    <li><p class="ho3">Mmct Tejas Raj - 12952</p></li>
    <li><p class="ho4">Delhi to Ahmedabad trains</p></li>
<br></ul><br>

<div class="toop">
<ul>
    <li><p class="hu1">Chandigarh to Delhi trains</p></li>
    <li><p class="hu2">12425 Jammu Rajdhani</p></li>
    <li><p class="hu3">Mumbai Mail - 12321</p></li>
    <li><p class="hu4">Bangalore to Mysore trains</p></li>
<br><br></ul>
</div>

<div class="toop">
<ul>
    <li><p class="hu1"> Delhi to Hyderabad trains</p></li>
    <li><p class="hu2">22172 Pune Humsafar</p></li>
    <li><p class="hu3">Karnataka Exp - 12627</p></li>
    <li><p class="hu4">Mumbai to Ahmedabad trains</p></li>
<br></ul><br>


<div class="toop">
<ul>
    <li><p class="hu1">Surat to Mumbai tr trains</p></li>
    <li><p class="hu2">20902 VANDE BHARAT</p></li>
    <li><p class="hu3">Hwh Csmt Sf Exp - 12810</p></li>
    <li><p class="hu4">Goa to Mumbai trains</p></li>
<br></ul><br>

<div class="toop">
<ul>
    <li><p class="hu1">Chennai to Delhi trains</p></li>
    <li><p class="hu2">12010 Shatabdi Express</p></li>
    <li><p class="hu3">Avadh Assam Exp - 15909</p></li>
    <li><p class="hu4">Surat to Mumbai trains</p></li>
<br></ul><br>

<div class="toop">
<ul>
    <li><p class="hu1">Goa to Mumbai trains</p></li>
    <li><p class="hu2">82902 IRCTC Tejas Express</p></li>
    <li><p class="hu3">Bsbs Ltt Sf Exp - 12168</p></li>
    <li><p class="hu4">Chennai to Coimbatore trains</p></li>
<br></ul>
</div>

    </body>
</html>   