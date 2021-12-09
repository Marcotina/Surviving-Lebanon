<?php

/*session_start();*/
setcookie('languageRetention', "lang", time()+60*60*24*30, '/', 'seniorlebaneseresources.com', false, false);

    ?>
    
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

   
