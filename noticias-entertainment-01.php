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
  function list_entertainment(){
    $list=scandir('./noticias/entertainment');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($i < 10 ){ $filename[$i]=substr($list[$i], 0, -4);
                        $filecontents[$i]=substr($list[$i], 4, -4);
                        $filecut[$i]=substr($list[$i], 0, 3);
                        $fileimage[$i]="ent-" . $filecut[$i];
          ?>
          <a href="noticias-entertainment-01.php?id=<?=$filename[$i]?>" style="margin-top:0; margin-left:20px; float:left;">
             <img src="./images/<?=$fileimage[$i]?>.jpg" width="200px" height="120px">
          </a>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>
  <?php
  function video_title(){
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    }
    else {
      echo ('No hay el video');
    }
  }
 ?>

 <div>
   <a><br></a>
   <a style="color:black; margin-left:0px; font-style: italic; font-weight: bold; font-size: 20px;">Entretenimiento</a>
 </div>
 <div style="width:1000px; margin-top:0px; margin-left:0px;">
   <?php
     list_entertainment();
    ?>
 </div>
 <div style="width:1000px; height:650px; margin-top:270px; margin-left:50px;">
    <div class="display" style="margin-left:0px;">
        <video width="1000" height="600" muted controls autoplay>
           <source src="./noticias/entertainment/<?php echo $_GET['id'] ?>.mp4" type="video/mp4">
        </video>
    </div>
    <p style="margin-top:0px; font-size:17px; margin-left:10px; color:blue;"><?php video_title() ?></p>
 </div>
