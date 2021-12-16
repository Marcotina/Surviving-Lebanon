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
        <div id="maintext">
            <p class="line">As university students, it can be heart-breaking to see the country we grew up in and aspired to be functional members of, fall from grace, and eradicate our hopes of having a future in it. It simply crushes one's ambitions, and we felt our motivation slipping.</p>
            <p class="line">What with the accumulation of incidents in Lebanon, with an economic crisis, political degeneracy, and general uncertainty within the entire country and its citizens, we have decided to launch this website, in order to provide support, aid, and useful resources to the citizens of Lebanon, and foreigners, both of whom might not have access to any reliable sources to get the appropriate information they might need, whether that be in regards to <a href="html/Cards/exchange" class="underline"> the dollar's rate</a>, <a href="html/Cards/gasCalculator.html" class="underline">gas prices and trip costs, as well as car tank capacity</a>, diverse <a href="resources.php" class="underline">free resources</a> presented by Lebanese citizens and organizations such as <a href="html/Cards/foodDonations" class="underline">free food donations</a>, or even specific organizations that every Lebanese person needs to know of, such as the <a href="html/Cards/redCross" class="underline">Lebanese Red Cross</a> and many others.<br></p>
            <p class="line">It is necessary for us to be aware of the happenings of the country, and of what goes on around us at all times, in order to not get taken advantage of, or get harmed by a failing system and a lack of essential resources.<br></p>
            <p class="line">We hope that this website will be of use to you, and that you can use it regularly to find out most of the information you require on a daily basis.</p>
        </div>   
    </body>
</html>