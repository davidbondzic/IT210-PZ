<?php
require_once ("header.php");
?>
<head>
  <script src="javascript/js.js"></script>
</head>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="pic/telefon.jpg">
  <div class="text">Mobilni uređaji</div>
</div>

<div class="mySlides fade">
  <img src="pic/laptopovi.jpg">
  <div class="text">Računari i laptopovi</div>
</div>

<div class="mySlides fade">
  <img src="pic/fotoaparat.jpg">
  <div class="text">Kamere i fotoaparati</div>
</div>

<div class="mySlides fade">
  <img src="pic/bela tehnika.png">
  <div class="text">Bela tehnika</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
</body>
</html>