<?php
if (isset($_GET['id'])) {
  $target_name = "./noticias/entertainment/".$_GET['id'];
  $target_video = $target_name . '.mp4';

  if(file_exists($target_video)) {
     unlink($target_video); }
  else {
     echo "No esta el video-file"; }
  }
else {
  echo "No hay el code id"; }

header( 'Location: ./noticias-admin-videos.php');
?>
