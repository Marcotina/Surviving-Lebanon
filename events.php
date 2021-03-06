<?php
    ob_start();
    require_once(__DIR__. '\html\layout\common.php');
    $navigation = ob_get_clean();
    
    ?>
     <nav class='navigationPart'>
        <?= $navigation ?>
    
<!DOCTYPE html>
<html>
<header>Beirut Clock, 2021</header>
    <head>
        <title>Events Timeline</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/events.css">
        <link rel="stylesheet" href="../assets/css/common.css">
    </head>

    <body>
        <div class="container">
            <p class="text" id="special">
                <h2>2019</h2>
            <p class="text">   - September 19: Start of LBP rate increase (1$ = 1700 L.L, as opposed to years' prior rate of 1515).</p>
            </p>
            <p class="text" id="special">
                - October 17: Start of Thawra (Lebanese Revolution) in protest of corruption and a failing economy.
            </p>
        </div>
        <div class="container-secondary">
            <p class="text">
                <h2>2020</h2>
            </p>
            <p class="text" id="special">
                - February 21: First cases of COVID-19 in Lebanon.
            </p>
            <p class="text">
                - February 28: Lebanon bans all non-residential travel through land, air and sea from countries such as China, Korea, Iran, and Italy.
            </p>
            <p class="text" id="special">
                - April: LBP rate skyrockets with a 23.73% increase from the previous month. Rate during April: 1$ = 3'234 LBP. 
            </p>
            <p class="text">
                -  May: 26.24% increase in LBP rate. Rate during May: 1$ = 4'094 LBP.  
            </p>
            <p class="text">
                - June: 28.09% increase in LBP rate. Rate during June: 1$ = 5'244 LBP.  
            </p>
            <p class="text" id="special">
                - July: 54.10% increase in LBP rate. Rate during July: 1$ = 8'081 LBP.  
            </p>
            <p class="text">
                <p id="special">- August 4: Beirut port explosion caused by 2'750 tonnes of ammonium nitrate stored in a port warehouse, kills over 200 people, injures 5000. Damage estimated at around $15 Billion. For charts, consult <a href="https://www.consultancy.uk/news/25577/8-charts-on-the-economic-cost-of-beiruts-port-explosion" target="_blank">this link.</a></p>
            <p class="text">    
                - August 5: Government declares a two week state of emergency.
            </p>
            <p class="text">   
                - August 6: French President Macron provides relief and aid to Lebanese citizens on Lebanese grounds, and went through the streets of Lebanon, while calling for an international investigation, futher angering Lebanese citizens that the French president took action while the Lebanese President remained completely silent.
            </p>
            <p class="text">    - August 8: Protests regarding the explosion started, demanding justice, especially following the President's silence over the matter.</p>
            <p class="text">   - August 10: Prime minister Hassan Diab announces cabinet resignation after the explosion's protests.</p>
            <p class="text">  - November 21: Baabda prison escapees, 69 inmates.</p>
        </div>
        <div class="container-secondary">
            <p class="text">
                <h2>2021</h2>
            </p>
                <p class="text">   - January 25: Tripoli protests over the COVID-19 lockdown.</p>
                <p class="text">    - March: 28.12% increase in LBP rate. Rate during March: 1$ = 11'708 LBP.</p>
                <p class="text">   - June: 20.14% increase in LBP rate. Rate during June: 1$ = 15'274 LBP.</p> 
                <p class="text"><p id="special">Fuel queues at gas stations beginning to form.</p></p>
                <p class="text">  - July: 27.07% increase in LBP rate. Rate during July: 1$ = 19'408 LBP.</p> 
                <p class="text">       Prime minister Saad Hariri resignation.</p>
                <p class="text"><p id="special">UN estimates that 77% of households' income is unable to sustain their need for food, and therefore have to spend over 5 times of their income on food with a 700% increase in food costs over two years, and with Syrian refugee's households' estimates being around 99% of households.</p></p>
                <p class="text">    UN announces potential collapse of water supply, with over 71% of the population at risk of losing access to water.</p>
                <p class="text">   Health Ministry announcing end of medical subsidies, with shortages to persist.</p>
                <p class="text">   Hospital workers report increase in cardiac cases due to shortage of medicine.</p>
                <p class="text"> - August 5: Israeli military air strikes strike south of Lebanon as a response to Hezbollah attacks.</p>
                <p class="text"> - August 9: First reported death over fuel shortage querrel in a gas station, with 3 deaths the same day.</p>
                <p class="text"> - August 15: Over 20 people killed after caused explosion of a fuel tanker in Akkar.</p>
                <p class="text"> - September 10: Re-appointment of former Prime Minister Najib Mikati as Prime Minister.</p>
                <p class="text"> - October 9: Lebanon's two largest power stations shut down after insufficient supply of fuel due to shortages, with a nationwide power-cut insuing.</p>
                <p class="text"><p id="special">- October 14: Tayyouneh clash, 5 dead, 30 injured.</p></p>
                <p class="text"> - October 15: National mourning day after the previous day's clashes and deaths.</p>
                <p class="text"><p id="special">-November: Lebanon's Inflation surges to 201%, transportation prices rocketing to 580%, health care fees up by 374%, food and beverages up by 358%, and 80% of the Lebanese populace lives in poverty.</p></p>
                <p class="text"><p id="special">-December 9: Banks official rate declared to be 8'000 LBP for 1$, a net 101% increase from its previous rate of 3'900 LBP.</p></p>
                
        </div>


        <div id="scroll-container">
            <div id="scroll-text">
            <p id="reference-title">References</p>
            <p class="reference-text">"The Fluctuation of Lebanese Lira Against the US Dollar In the Parallel Market", (2021):<a href="https://blog.blominvestbank.com/41472/the-fluctuation-of-lebanese-lira-against-the-us-dollar-in-the-parallel-market" target="_blank">Link here</a></p><br>
            <p class="reference-text">Lira Rate, 2021: <a href="https://lirarate.org" target="_blank">Link here</a></p> <br>
            <p class="reference-text">Relief Web: "A Timeline of Crises in Lebanon" (2021): <a href="https://reliefweb.int/report/lebanon/timeline-crises-lebanon" target="_blank">Link here</a></p><br>
            <p class="reference-text">"Beirut Port Damage assessment: 8 charts on the economic cost of Beirut's port explosion" (ConstultancyUk, 2020): <a href="https://www.consultancy.uk/news/25577/8-charts-on-the-economic-cost-of-beiruts-port-explosion">Link here</a></p><br>
            <p class="reference-text">"Beirut Explosion: Macron calls for 'deep change' in Lebanon after blast" (BBC News, 2020): <a href="https://www.bbc.com/news/world-middle-east-53686563" target="_blank">Link here</a></p><br>
            <p class="reference-text">"Three Lebanese killed in fights related to fuel shortages" (Alarabiya, 2021): <a href="https://english.alarabiya.net/News/middle-east/2021/08/10/Three-Lebanese-killed-in-fights-related-to-fuel-shortages" target="_blank">Link here</a></p><br>
            <p class="reference-text">"Lebanese Bank Dollars (Lollars) are now worth LBP 8,000" (Melki Law Firm, 9 December 2021): <a href=https://melkilawfirm.com/latest-news/lebanese-bank-dollars-lollars-are-now-worth-lbp-8000 target="_blank">Link here</a></p><br>
            <p class="reference-text">"Milestones of Lebanon's economic expenditure in November of 2021" (CAS Gov, 2021): <a href=http://www.cas.gov.lb/images/PDFs/CPI/2021/11-CPI_NOVEMBER%202021.pdf target="_blank">Link here</a></p><br>
            <div>
        </div>
    </body>
</html>