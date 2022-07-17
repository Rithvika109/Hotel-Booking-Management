<?php include('server.php') ?>
<html>
<title>Rooms Booking</title>
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

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  top: 45px;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

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
  <img src="6.jpg" width = "900" height = "500">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpeg" width = "900" height = "500">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="1.jpeg" width = "900" height = "500">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<style>
img {
  border: 5px solid #555;
}
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
  <a href="home.php">Home</a>
  <a class="active" href="rooms.php">Rooms</a>
  <a href="change.php">Change Slot</a>
  <div class="topnav-right">
    <a href="cancel.php">Cancel Registration</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 260px;
}
.cancel-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 320px;
  width: 260px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body style="background:MediumSeaGreen">

<button class="open-button" onclick="openForm()">Book Here</button>

<div class="form-popup" id="myForm">
  <form method = "post" action="rooms.php" class="form-container">
    <h1>Book your room</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="check_in"><b>Check-in Time</b></label>
    <input type="time" placeholder="Pick a Time" name="check_in" required><br><br>
	
	<label for="check_in_date"><b>Check-in Date</b></label>
    <input type="date" placeholder="Select a Date" name="check_in_date" required><br><br>
	
	<label for="check_out"><b>Check-out Time</b></label>
    <input type="time" placeholder="Pick a Time" name="check_out" required><br><br>
	
	<label for="check_out_date"><b>Check-out Date</b></label>
    <input type="date" placeholder="Select a Date" name="check_out_date" required><br><br>

    <button type="submit" class="btn" name="confirm_booking">Confirm booking</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>