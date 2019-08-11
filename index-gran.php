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

<?php
  if (isset($_GET['id'])) {$videotitle= $_GET['id'];}
  else                    {$videotitle = "001. La Paz";}
?>

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
        <a href="index-gran.php?id=<?=$filename[$i]?>" style="margin-top:0; margin-left:30px; margin-right:20px; float:left;">
           <img src="./images/<?=$fileimage[$i]?>.jpg" width="200px" height="120px">
        </a>
        <?php
      } }
    }
    $i=$i+1;
  }
}
?>

<div class="h-line">
 <br>
 <a style="color:Red; margin-left:0px; font-style: italic; font-weight: bold; font-size: 25px; clear:left;
           margin-top:10px; text-decoration:underline;"> Entretenimiento </a>
</div>
<div style="width:1000px; margin-top:20px; margin-left:170px;">
 <?php
   list_entertainment();
  ?>
</div>

<div style="width:1000px; height:650px; margin-top:300px; margin-left:175px;">
  <div class="display" style="margin-left:0px;">
      <video width="1000" height="600" muted controls autoplay>
         <source src="./noticias/entertainment/<?=$videotitle ?>.mp4" type="video/mp4">
      </video>
  </div>
  <p style="margin-top:0px; font-size:17px; margin-left:10px; color:blue;"><?=$videotitle ?></p>
</div>

<!--
    <form method="post" action="login.jsp" style="color:black;">
      user-id &nbsp &nbsp : &nbsp <input type="text" name="userid"><br>
      password : &nbsp <input type="text" name="passwd"><br><br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <input type="submit" value="Login">
    </form>
  </div>
-->
<!-- common bottom -->
<?php
require_once('ita-bottom.php');
?>
