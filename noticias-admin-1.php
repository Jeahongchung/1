<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <?php
   function checkpasswd() {
      $passwd = $_POST['passwd'];
      if ($passwd == "koicagabriel") {echo "noticias-admin-fotos.php";  }
      else                         {echo "noticias-admin-p.php"; } }
  ?>
<script>
  function myFunction() {
    window.open(" <?php checkpasswd() ?> ", "_self"); }
</script>
</head>

<body onload="myFunction()">
</body>
</html>
