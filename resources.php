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
        <title>Resources</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/resources.css">
        <link rel="stylesheet" href="../assets/css/common.css">
        </head>
    
    <body>
    <div id="page-container">
    <div id="content-wrap">
      <div id='liraRate'>
        <span id="border">1 USD is bought at 27'350 LBP<br><br>
        1 USD is <span id="space">sold</span><span id="space">at 27'300 LBP</span></span>
      </div>
      <div id="gasPrice">
      <span id="border"> 1 tank of 95 unleaded fuel is sold at 325'000 LBP</span>
      </div>
      <br style="clear:both;"/>
    <div class="container">
      <div class="card">
        <a href="html/Cards/foodSafety">
        <div class="cardContent" >
        <div class="cardFront">
        <img src="assets/pictures/foodSafety.jfif" class="cardImg">
        </div>
        <div class="cardBack">
        <h2 class="cardTitle"> Food Safety: perishables and lifespan of food.</h2>
        <p class="cardText"> A list of items' lifespan in and out of fridges, and in regards to power outages and the risks that can occur after expiration.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/Cards/foodDonations">
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/foodDonations" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">Food Donations</h2>
          <p class="cardText">Food drives, donations, and events where free food is presented.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/cards/miscresources">
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/humanCare.jpg" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">Miscellaneous resources</h2>
          <p class="cardText">Resources ranging from women's sanitary pads, to tuition coverage.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/Cards/transport.html">
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/transport.jpg" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">Lower cost, and safe public transportation</h2>
          <p class="cardText">Public transportation services that are cheaper and safer than traditional public transportation services.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/Cards/pestelAnalysis.html">
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/pestel1.png" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">PESTEL analysis for Lebanon.</h2>
          <p class="cardText">Analysis of the country's social, political, economic, legislative, and ecological state.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/Cards/exchange">
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/exchange.jpg" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">Dollar Rate fluctuation documentation</h2>
          <p class="cardText">A table-form documentation of the fluctuation of the Lebanese Lira's rate over the years during which the Lebanese situation has been worsening.</p>
        </div>
        </div>
      </div>

      <div class="card">
        <a href="html/Cards/gasCalculator"> 
        <div class="cardContent" >
        <div class="cardFront">
          <img src="assets/pictures/gasCalc.png" class="cardImg">
        </div>
        <div class="cardBack">
          <h2 class="cardTitle">Gas Calculator</h2>
          <p class="cardText">A small scale calculator that calculates the price of a tank of gas, as well as how much it would take to fill your specific car, and how many KMs it can travel when full.</p>
        </div>
        </div>
        </a>
      </div>

    </div>
    </div>
    </div>
    </body>

<footer class="footer">Electrical company of Lebanon ~ 2021</footer>
    </html>