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
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/about.css">


    </head>
    <body>
        <p class = "trn">What with the accumulation of incidents in Lebanon, with an economic crisis, political degeneracy.</p>   
    </body>
</html>