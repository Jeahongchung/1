<?php
  $target_name = "./noticias/entertainment/".$_POST['old_title'];
  $target_video = $target_name . '.mp4';
  $target_newvideo = $_POST['file_title'] . '.mp4';

  if(file_exists($target_video)) {
    rename($target_video, 'noticias/entertainment/'.$target_newvideo); }
  else {
     echo "No esta el video-file"; }

header( 'Location: ./noticias-admin-videos.php');
?>
