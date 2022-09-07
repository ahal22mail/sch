<!-- Menu -->   
<?php
  if(!isset($_SESSION["UlanyjyAdy"]))
  {
      header("Location: ../index.php");
      exit();
  }
  
  
?>
 <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none; enable-background:new 0 0 32 32" xml:space="preserve" >
  
    <style type="text/css">
        .White{fill:#FFFFFF;}
        .st0{opacity:0.75;}
    </style>
  

    <symbol id="1-svg" viewBox="0 0 32 32" >
      <path  class="White" d="M31,8h-5V5c0-0.5-0.5-1-1-1h-5V1c0-0.5-0.5-1-1-1H1C0.5,0,0,0.5,0,1v22c0,0.5,0.5,1,1,1h5v3c0,0.5,0.5,1,1,1  h5v3c0,0.5,0.5,1,1,1h18c0.5,0,1-0.5,1-1V9C32,8.5,31.5,8,31,8z M6,5v17H2V2h16v2H7C6.5,4,6,4.5,6,5z M12,9v17H8V6h16v2H13  C12.5,8,12,8.5,12,9z M30,30H14V10h16V30z" />
    </symbol>
  
    <symbol id="2-svg" viewBox="0 0 32 32">
      <g class="st0">
        <path d="M22,18H10v-2h12V18z M22,8H10v2h12V8z M22,12H10v2h12V12z M22,20H10v2h12V20z" class="White" />
      </g>
      <path d="M27,0H5C4.5,0,4,0.5,4,1v28c0,0.5,0.5,1,1,1h22c0.5,0,1-0.5,1-1V1C28,0.5,27.5,0,27,0z M26,28H6V2h20V28z" class="White" />
    </symbol>
  
    <symbol id="3-svg" viewBox="0 0 32 32">
      <g class="st0">
        <path d="M8,12h12v2H8V12z M8,18h9.2h1.7H20v-2H8V18z M8,10h12V8H8V10z" class="White" />
      </g>
      <path d="M11.2,24H4V2h20v17.2l2-2V1c0-0.5-0.5-1-1-1H3C2.5,0,2,0.5,2,1v24c0,0.5,0.5,1,1,1h6.2L11.2,24z" class="White" />
      <polygon points="8,30 18,20 22,24 32,14 32,30  " class="White" />
    </symbol>
    
    <symbol id="4-svg" viewBox="0 0 32 32">
      <path d="M27,4h-3v22H8V4H5C4.4,4,4,4.4,4,5v24c0,0.6,0.4,1,1,1h22c0.6,0,1-0.4,1-1V5C28,4.4,27.6,4,27,4z" class="White" />
      <path d="M20,4V3c0-0.6-0.4-1-1-1h-6c-0.6,0-1,0.4-1,1v1h-2v4h3h6h3V4H20z" class="White" />
      <g class="st0">
        <path d="M10,20h12v2H10V20z M10,12h12v2H10V12z M10,16h12v2H10V16z" class="White" />
      </g>
    </symbol>
  
    <symbol id="menu-home-svg" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
  
  </svg>
  

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="main-div" style="width:250px;">
      <a onclick="myFunction()" href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none;" style="text-decoration: none;">
          <!-- <svg id="main-svg" class="bi pe-none me-2 " width="40" height="40" ><use xlink:href="#logo"/></svg> -->
          <span id="main-span2" class="fs-5" style="color:white;">"SANLY ÇÖZGÜT" HJ</span>
        </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
  

      <li class="nav-item" >
        <a id="menu-maksatnama" href="portfolio.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#3-svg"/></svg>
          Tejribe
        </a>
      </li>

      <li class="nav-item" >
        <a id="menu-chare" href="../cooperation.php" class="nav-link text-white" >
          <svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#4-svg"/></svg>
          Hyzmatdaşlar
        </a>
      </li>

      <li class="nav-item" >
        <a id="menu-gorkeziji" href="sertificates.php" class="nav-link text-white" >
          <svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#1-svg"/></svg>
          Sertifikatlar
        </a>
      </li>

      <li class="nav-item" >
        <a id="menu-maksatnama" href="#" class="nav-link text-white" aria-current="page" data-bs-toggle="collapse" data-bs-target="#menu-maksatnamalar">
          <svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#2-svg"/></svg>
          Hyzmatlar
        </a>
      </li>
      
        <li class="nav-item" >
          <a id="menu-house" href="../index.php" class="nav-link text-white" >
            <svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-home-svg"/></svg>
            Baş sahypa
          </a>
        </li>
  
      </ul>
      
      <hr>
      
    </div>


  <!-- End Menu -->