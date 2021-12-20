<?php
    ob_start();
    require_once(__DIR__. '/../../home.php');
    $navigation = ob_get_clean();
    
    ?>

    <nav id='navigationPart'>
        <?= $navigation ?>
    </nav>
    <!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel = "stylesheet" type = "text/css" href = "../../assets/css/main.css"/>
        <link rel = "stylesheet" type = "text/css" href = "../assets/css/common.css"/>
        <link rel='shortcut icon' type='image/x-icon' href="../../assets/pictures/favicon.png"/>
    </head>
<body>
  <div class="container">
    <p>Hello and welcome to this website about surviving Lebanon, we hope you will find what you need here.</p>
    <p>All the content is found in the following tabs that you can access with the navigation bar, and here are some buttons to help you navigate quickly to some resources.</p>
  </div>
  <div class="col">
  <button class="btn btn1"><a href="../html/Cards/redCross.html">Red Cross</a></button>
  <button class="btn btn1"><a href="../html/Cards/embrace.html">Embrace</a></button>
  <button class="btn btn1"><a href="../html/Cards/SIDC">SIDC</a></button>
  <button class="btn btn1"><a href="../html/Cards/foodSafety.html">Food Safety</a></button>
  <button class="btn btn1"><a href="../html/Cards/gasCalculator.html">Gas Calculator</a></button>
  </div>
</body>
</html>

   
