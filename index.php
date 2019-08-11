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

  <div style="margin-top:50px; margin-left:120px; padding:0; max-width:1100px; width:1100px; height:350px;">
  		<!-- Insert to your webpage where you want to display the slider -->
      <div id="amazingslider-1" style="display:block;position:relative;margin:0px auto 46px;">
          <ul class="amazingslider-slides" style="display:none; ">
              <li><img src="slider/ita_ref_201.jpg" alt="TECNOLOGICO AYACUCHO" /></li>
              <li><img src="slider/ita_ref_202.jpg" alt="TECNOLOGICO AYACUCHO" /></li>
              <li><img src="slider/ita_ref_203.jpg" alt="TECNOLOGICO AYACUCHO" /></li>
          </ul>
      </div>
  </div>

<div style="float:left; margin-left:120px;" >
  <a href=carrera_sistemas.php><img src="./images/ita-carrera-si.jpg" width="130" height="100"></a>
  <a href=carrera_electronica.php><img src="./images/ita-carrera-el.jpg" width="130" height="100"></a>
  <a href=carrera_electromecanica.php><img src="./images/ita-carrera-em.jpg" width="130" height="100"></a>
  <a href=carrera_m_industrial.php><img src="./images/ita-carrera-mi.jpg" width="130" height="100"></a>
  <a href=carrera_automotoriz.php><img src="./images/ita-carrera-ma.jpg" width="130" height="100"></a>
  <a href=carrera_construccion.php><img src="./images/ita-carrera-cc.jpg" width="130" height="100"></a>
</div>
<div style="float:left; margin-left:70px;" >
  <a href=e-book.php><img src="./images/e-book-01.png" width="80" height="100"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  <a href=https://www.minedu.gob.bo target="_blank"><img src="./images/minedu-01.png" width="80" height="100"></a>
</div>

<!-- common bottom -->
<?php
require_once('ita-bottom.php');
?>
