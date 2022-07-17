<html>
<title>Hotel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #000;
  position: fixed;
  width: 100%;
  top: 0;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="rooms.php">Rooms</a>
  <a href="change.php">Change Slot</a>
  <div class="topnav-right">
    <a href="cancel.php">Cancel Registration</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

</body>
</html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border: 5px solid #555;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {bottom-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<pre>


</pre>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="bg1.jpg" width = "1000" height = "450">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img4.png" width = "1000" height = "450">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" width = "1000" height = "450">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>

</body>
</html> 
<section class="w3-container w3-center" style="max-width:600px">
  <h2 class="w3-wide">HOTEL GITAM GRAND</h2>
  <p class="w3-opacity"><i>We show the best hospitality</i></p>
</section>
<section class="w3-container w3-content w3-center" style="max-width:600px">
<pre class="w3-justify w3-center" style = "font-size: 30px">

Hotel Management System

</pre>
</section>
<section class="w3-row-padding w3-center w3-light-grey">
  <article class="w3-third">
    <p>Single Room</p>
	<a href = "rooms.php">
    <img src="single1.jpg" alt = "Single Room" width = "400" height = "240" class="w3-button w3-bar-item">
	</a>
  </article>
  <article class="w3-third">
    <p>Double Room</p>
	<a href = "rooms.php">
    <img src="double1.jpg" alt = "Double Room" width = "400" height = "240" class="w3-button w3-bar-item">
	</a>
  </article>
  <article class="w3-third">
    <p>Super Deluxe</p>
	<a href = "rooms.php">
    <img src="superDeluxe1.jpg" alt = "Super Deluxe Room" width = "400" height = "240" class="w3-button w3-bar-item">
	</a>
  </article>
</section>
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <p class = "w3-center"> Thank you for choosing us!</p>
</footer>

</body>
</html>