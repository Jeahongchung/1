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

  <?php
  function list_video(){
    $list=scandir('./noticias/entertainment');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($i < 22 ){ $filename[$i]=substr($list[$i], 0, -4); $result=$list[$i];
          ?>
          <a href="noticias-update-video.php?id=<?=$filename[$i]?>">
          <ol style="margin-top:5; font-size:17px; margin-left:20px;"><?=$filename[$i]?></ol></a>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>

   <?php
   $message = "Seleccione de la lista para actualizar...." ;
   function video_title(){
     if (isset($_GET['id'])) {
       $ftitle = $_GET['id'];
       $message = " " ; }
     else {
       $ftitle = " ";
       $message = "Seleccione de la lista para actualizar." ;
     }
   }
  ?>

   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Entretenimientos</a>
   </div>
   <div style="width:400px; margin-top:0px; margin-left:90px; float:left;">
     <ol>
     <?php
       list_video();
      ?>
    </ol>
  </div>
  <div class="admin">
      <div>
        <a href="noticias-process-delete-video.php?id=<?=$_GET['id']?>"
           style="width:200px; font-weight:bold; margin-left:550px; margin-top:0px;">Eliminar el video</a>
      </div>
      <div style="margin-top:0px; width:500px; float:left;">
        <form action="noticias-process-update-video.php" method="post" enctype="multipart/form-data">
          <?php video_title() ?>
          <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
          <p style="float:none; margin-top:20px;">Title :  <input type="text" size=110 name="file_title" value="<?=$_GET['id']?>"></p>
          <p style="float:none; margin-top:10px;"> <input type="submit" value="Actualizar"></p>
        </form>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
