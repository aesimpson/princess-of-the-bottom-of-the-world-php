<?php
function url(){
  return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/princess/';
}
$base_url = url();
?>