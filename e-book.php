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
  function list_book(){
    $list=scandir('./e-book');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){ $filename[$i]=substr($list[$i], 0, -4);
                               $filetype[$i]=substr($list[$i], -3);
          ?>
          <li>
           <a style="width:700px; display:inline-block; margin-top:5px; font-size:15px; margin-left:10px; color:blue;"><?=$filename[$i]?></a>
           <a style="width:200px; display:inline-block; font-size:15px; color:blue;">File type: &nbsp <?=$filetype[$i]?> </a>
           <a style="width:10px; display:inline-block; font-size:15px; color:black; border-style:double;"
              href="./e-book/<?=$list[$i]?>" download> D </a>
          </li>
        <?php } }
      $i=$i+1;
    }
  }
  ?>

   <div>
     <a><br></a>
     <a style="width:900px; display:inline-block; color:darkblue; margin-left:180px; font-style: italic; font-weight: bold; font-size: 20px;
        text-decoration:underline;"> &nbsp Bibleoteca digital &nbsp de &nbsp ITA &nbsp </a>
     <a style="width:100px; display:inline-block; color:red; font-style: italic; font-weight: bold; font-size: 15px;
           text-decoration:underline;"> Download </a>
   </div>
   <div style="width:1100px; margin-top:0px; margin-left:150px;">
     <ul>
     <?php
       list_book();
      ?>
     </ul>
   </div>
   <div>
     <img src="./images/line_image.png" width=1100px style="margin-left:120px;">
   </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
