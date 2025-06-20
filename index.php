<?php
  $lang = $_GET['lang'];
  if(isset($lang)){
    include($_GET['file']);
  }
?>
