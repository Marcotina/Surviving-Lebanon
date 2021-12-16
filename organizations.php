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
  <title>Organizations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../assets/css/organizations.css">
  <link rel="stylesheet" href="../assets/css/common.css">
</head>

<body>
  <div id="page-container">
   <div id="content-wrap">
    <div id="mainText">

      <p>Here, you will find useful resources, whether to ask for assistance, provide it to people in need and organizations, or to read up on current events happening in Lebanon.</p>
   
    </div>

  <div class="container">

    <div class="card">
      <div class="face face1">
        <div class="content">
          <img src="../assets/pictures/redcrossprofile.jpg" class="profileImg">
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <div class="list-group">
            <a href="html/cards/redCross" class="cardTitle">The Lebanese Red Cross<i class="fa fa-chevron-circle-right hvr-icon fa-xs"></i></a>
            <li class="emergencyInfo">Contact Details: 140 Hotline number</li>
            <li> <a href="https://www.redcross.org.lb/#donate-now" class="cardLink">Donate to The Lebanese Red Cross</a></li>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <img src="../assets/pictures/embracepicture1.jpg" class="profileImg" alt="...">
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
            <a href="html/cards/embrace" class="cardTitle">Embrace, Suicide Hotline<i class="fa fa-chevron-circle-right hvr-icon fa-xs"></i></a>
            <li class="emergencyInfo">Contact Details: 1564 Hotline number</li>
            <li> <a href="https://embracelebanon.org/Donate" target="_blank" class="cardLink">Donate to Embrace</a></li>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <img src="../assets/pictures/firedepartmentprofile.jpg" class="profileImg1" alt="...">
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
            <p class="cardTitle">Fire Department</p>
            <li class="emergencyInfo">Contact Details: 175 Hotline number</li>
          <p>Website and donation links unfortunately not available</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <img src="../assets/pictures/policedepartmentprofile.jpg" class="profileImg" alt="...">
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
            <a href="html/Cards/policeDepartment" class="cardTitle">Police Department<i class="fa fa-chevron-circle-right hvr-icon fa-xs"></i></a>
            <li class="emergencyInfo">Contact Details: 112 Hotline number</li>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <img src="../assets/pictures/lebanonlgbt.jpg" class="profileImg" alt="...">
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
            <p class="cardTitle">LGBTQ Safe Organizations</p>
            <li> <a href="html/cards/MARSA" class="cardLink">MARSA</a></li>
            <li> <a href="html/Cards/SIDC" class="cardLink">SIDC</a></li>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <svg xmlns="http://www.w3.org/2000/svg" width="300px" height="200px" version="1.1" viewBox="0 0 752 752">
            <g>
              <path d="m417.39 206.04c0 21.758-17.641 39.398-39.398 39.398-21.762 0-39.402-17.641-39.402-39.398 0-21.762 17.641-39.402 39.402-39.402 21.758 0 39.398 17.641 39.398 39.402"/>
              <path d="m417.39 544.07c0 21.762-17.641 39.402-39.398 39.402-21.762 0-39.402-17.641-39.402-39.402s17.641-39.402 39.402-39.402c21.758 0 39.398 17.641 39.398 39.402"/>
              <path d="m306.34 484.69c3.3633-25.715 13.117-50.719 23.965-74.066 6.0156-12.883 12.785-25.289 19.984-37.555 4.7812-8.0977 13.355-21.785 1.4219-27.656-23.586-11.699-36.703 23.301-45.746 37.84-9.6602 15.629-28.887 18.895-43.098 6.6758-15.156-13.023-16.48-37.035-13.449-55.363 2.9375-17.855 10.797-34.523 19.699-50.105 10.086-17.758 22.398-35.188 31.871-53.656 5.3516-10.418-5.3516-21.691-16.055-16.906-67.438 30.074-111 101.06-102.86 178.49 7.0078 66.586 50.438 120.48 108.4 144.06 9.0938 3.6953 18.562-4.2617 16.719-13.922-2.418-12.312-2.5117-25.195-0.85547-37.84z"/>
              <path d="m449.69 265.42c-3.3633 25.715-13.117 50.719-23.965 74.066-6.0156 12.883-12.785 25.289-19.984 37.555-4.7812 8.0977-13.355 21.785-1.4219 27.656 23.586 11.699 36.703-23.301 45.746-37.84 9.6602-15.629 28.887-18.895 43.098-6.6758 15.156 13.023 16.48 37.035 13.449 55.363-2.9375 17.855-10.797 34.523-19.699 50.105-10.086 17.758-22.398 35.188-31.871 53.656-5.3516 10.418 5.3516 21.691 16.055 16.906 67.484-30.074 111.05-101.06 102.91-178.54-7.1055-66.492-50.535-120.43-108.45-144.02-9.0938-3.6953-18.562 4.2617-16.719 13.922 2.418 12.316 2.4648 25.199 0.85547 37.844z"/>
            </g>
            </svg>
          <div class="icon">
          </div>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
            <p class="cardTitle">Humanitarian NGOs</p>
            <li> <a href="html/cards" class="cardLink">KAFA</a></li>
            <li> <a href="html/cards" class="cardLink">Cénacle de la Lumière</a></li>
            <li> <a href="html/cards" class="cardLink">IDRAAC</a></li>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>
  <div class="whitespace"></div>
</body>
<div>
  <footer class="footer">Bcharre, Lebanon ~ 2020</footer>
</div>
</html>
