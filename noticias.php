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
  function list_foto(){
    $list=scandir('./noticias/fotos');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($i < 7 ){ $filename[$i]=substr($list[$i], 0, -4); $result=$list[$i]; $filetitle[$i]=substr($filename[$i],0,25);
          ?>
          <div style="width:200px; height:120px; float:left; margin-top:0px; margin-left:10px;">
            <p style="margin-top:0; font-size:15px; margin-left:10px; color:blue;"><?=$filetitle[$i]?></p>
            <a href="noticias-fotos.php?id=<?=$filename[$i]?>">
            <img src="./noticias/fotos/<?php echo $result; ?>" width="200" height="120" style="margin-top:0px; margin-left:10px;"> </a>
          </div>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>

  <?php
  function list_entertainment(){
    $list=scandir('./noticias/entertainment');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($i < 7 ){ $filename[$i]=substr($list[$i], 0, -4);
                        $filecontents[$i]=substr($list[$i], 4, -4);
                        $filecut[$i]=substr($list[$i], 0, 3);
                        $fileimage[$i]="ent-" . $filecut[$i];
          ?>
          <div style="width:200px; height:120px; float:left; margin-top:0px; margin-left:10px;">
            <p style="margin-top:0; font-size:15px; margin-left:10px; color:blue;"><?=$filecontents[$i]?></p>
            <a href="noticias-entertainment.php?id=<?=$filename[$i]?>" style="margin-top:0; margin-left:10px;">
               <img src="./images/<?=$fileimage[$i]?>.jpg" width="200px" height="120px">
            </a>
          </div>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>
   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Las Noticias de ITA</a>
     <a href="noticias-admin-p.php?pp=1" style="color:red; margin-left:710px; font-style: italic; font-size: 17px;">
        Gestiona las noticias---></a>
   </div>
   <div style="width:1100px; height:150px; margin-top:0px; margin-left:90px;">
     <ol>
     <?php
       list_foto();
      ?>
     </ol>
   </div>
   <div style="margin-left:1070px; font-style: italic; font-size: 16px;">
     <a href="noticias-mas-fotos.php" style="color:blue;">Más noticias .......></a>
   </div>
   <div>
     <img src="./images/line_image.png" width=1100px style="margin-left:120px;">
   </div>
   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Entretenimiento</a>
     <a href="noticias-admin-v.php?pp=2" style="color:red; margin-left:750px; font-style: italic; font-size: 17px;">
        Gestiona las videos---></a>
   </div>

   <div style="width:1100px; height:130px; margin-top:0px; margin-left:90px;">
     <ol>
     <?php
       list_entertainment();
      ?>
    </ol>
  </div><br>
   <div style="margin-left:1022px; font-style: italic; font-size: 16px;">
     <a href="noticias-mas-videos.php" style="color:blue;">Más entretenimiento ......></a>
   </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
