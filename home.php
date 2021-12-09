<?php
    ob_start();
    require_once(__DIR__. '\html\layout\common.php');
    $navigation = ob_get_clean();
    
    ?>
     <nav id='navigationPart'>
        <?= $navigation ?>
    
<!DOCTYPE html>
<html>
    <head>
  <title>Home</title>
<link rel = "stylesheet" type = "text/css" href = "../assets/css/home.css"/>
</html>




<footer></footer>