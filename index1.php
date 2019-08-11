<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.Ayachcho</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <!-- Insert to your webpage before the </head> -->
  <script src="sliderengineinmob1/jquery.js"></script>
  <script src="sliderengineinmob1/amazingslider.js"></script>
  <script src="sliderengineinmob1/initslider-1.js"></script>
  <!-- End of head section HTML codes -->
</head>

<body>
<?php
require_once('ita-menu.php');
?>

<div class="w3-content w3-section" style="padding:0; max-width:1100px; width:1100px; height:400px; margin-left:0px; margin-top:10px; float:left;">
  <img class="mySlides" src="slider/ita_ref_201.jpg" />
  <img class="mySlides" src="slider/ita_ref_202.jpg" />
  <img class="mySlides" src="slider/ita_ref_203.jpg" />
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

<div style="float:left; margin-left:120px;" >
  <img src="./images/ita_campus.jpg" width="770" height="100" />
</div>
<div style="margin-left:900px; margin-top:40px;">
    <!-- login -->
    <form method="post" action="login.jsp" style="color:black;">
      user-id &nbsp &nbsp : &nbsp <input type="text" name="userid"><br>
      password : &nbsp <input type="text" name="passwd"> &nbsp &nbsp
      <input type="submit" value="Login">
    </form>
  </div>

<!-- common bottom -->
<?php
require_once('ita-bottom.php');
?>
