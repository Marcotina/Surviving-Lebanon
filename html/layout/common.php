<?php
    ob_start();
    require_once(__DIR__. '\nav.html');
    $navigation = ob_get_clean();
    
    ?>

    <nav id='navigationPart'>
        <?= $navigation ?>
    </nav>

<html>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="/../assets/imported/fontawesome-free-5.15.4-web/css/all.css"/>

    <script type="text/javascript" src="../assets/imported/bootstrap-5.1.3-dist/css/bootstrap-grid.min.css"></script>
    <script type="text/javascript" src="../assets/imported/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../assets/imported/jquery/jquery-3.6.0.slim.js"></script>
    <script defer src="/../assets/imported/fontawesome-free-5.15.4-web/js/all.js"></script>
    <script src="https://kit.fontawesome.com/fc0bcca8a3.js" crossorigin="anonymous"></script>   
</html>
