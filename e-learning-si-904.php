<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.A-eLeaning</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">
  <style>
   .display {margin-left:150px; margin-top:0px;}
  </style>
</head>

<body>
  <?php
  require_once('ita-elearning-top.php');
  ?>

  <header>Instituto Tecnologico "Ayacucho" &nbsp &nbsp
        <a href="e-learning-menu.php" style="color:red; text-decoration:none;">&nbsp &nbsp &nbsp  e-LEARNING system</a>
        <a href="e-learning-si-menu.php" style="color:blue; text-decoration:none; font-style:normal; font-size:25px; padding-bottom:0px; padding-top:10px;
                  float:right; margin-right:130px;">Sistemas Informaticos</a>
  </header>
  <div class="menu_elearning">
      <div><br></div>
      <div class="menu_carrera">
        <ul>
          <li><a style="background-color:blue; color:white; font-size:20px; text-align:center; margin-top:0px;
                        width:140px; font-style:normal;">
                        <strong>Advanced</strong></a></li>
          <li><a style="background-color:white; color:Black; font-size:15px; width:140px; text-align:center; margin-top:0px;
                        font-style:oblique;">Historia de Web</a></li>
        </ul>
      </div>
      <div class="display" style="border:solid; border-color:black; width:800px; height:250px;">
          <video width="800" height="250" controls muted autoplay>
             <source src="./data/si_100.mp4" type="video/mp4">
          </video>
      </div>
      <div class="display" style="width:800px; height:240px; margin-top:10px;">
          <iframe src="./data/si_100.txt" display:block; text-align:left;
                  style="border:solid; border-color:black; width:800px; height:240px;"></iframe>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
