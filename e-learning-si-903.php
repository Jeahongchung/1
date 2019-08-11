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
                        font-style:oblique;">Smart Cities</a></li>
        </ul>
      </div>
      <div class="display" style="border:solid; border-color:black; width:830px; height:500px;">
          <video width="830" height="500" controls muted autoplay>
             <source src="./data/ppt_smartcity.mp4" type="video/mp4">
          </video>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
