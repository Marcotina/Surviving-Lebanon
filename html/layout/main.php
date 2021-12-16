<html>

<head>
    

    <link rel = "stylesheet" type = "text/css" href = "../assets/css/common.css"/>
</head>

<body>
    <?php
    ob_start();
    require_once(__DIR__. '/../../home.php');
    $navigation = ob_get_clean();
    
    ?>

    <nav id='navigationPart'>
        <?= $navigation ?>
    </nav>
</body>
</html>

   
