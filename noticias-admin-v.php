<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.Ayachcho</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">

</head>

<body>
  <?php
  require_once('ita-menu.php');
  ?>
<div>
  <?php
    if (isset($_GET['pp'])) {
        $pp = null; }
    else {
        $pp = "***  La contraseña es incorrecta."; } ;
  ?>
  <br><br><br>
  <a style="color:blue; margin-left:400px; font-size:20px; font-style:italic;">
    Debe iniciar sesión para editar, eliminar o registrar noticias.</a><br><br>
  <a style="color:blue; margin-left:400px; font-size:20px; font-style:italic;">
    Ingrese la contraseña y presione el botón INICIAR SESIÓN.</a>
</div>
<div style="border-style:solid; border-color:blue; width:600px; height:190px; margin-top:40px; margin-left:370px;
            background:darkgray;">  <br><br>
  <form method="post" action="noticias-admin-2.php" style="color:black; margin-left:100px; font-weight:bold; font-size:20px;">
        Usuario &nbsp &nbsp &nbsp : &nbsp <input type="text" value="ita-admin"><br><br>
        Contraseña : &nbsp <input type="password" name="passwd" autofocus="autofocus"><br><br>
        <input type="submit" value="INICIAR SESIÓN" style="color:red; margin-left:127px; font-style:italic;">
  </form>
</div>
  <br><br>
  <a style="color:red; margin-left:550px; font-size:20px; font-style:italic;">
     <?=$pp ?></a>
  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
