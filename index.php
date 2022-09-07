<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>SANLY ÇÖZGÜT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">

  <link href="css/fonts.css" rel="stylesheet" type="text/css">
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="bootstrap-3.4.1-dist//js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/style.css">


    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
     
    <!-- Include js plugin -->
    <script src="owl-carousel/owl.carousel.js"></script>
    
    <script src="js/translate.js"></script>
    <script src="js/anime.min.js"></script>

    <script>
        $(window).resize(function() {
        //resize just happened, pixels changed

            // if(window.innerWidth<480 || screen.width<480) document.getElementById("anime_text").style.visibility = "hidden";
            // else document.getElementById("anime_text").style.visibility = "visible";
        });
        
      $(document).ready(function() 
      {
          $("#owl-demo").owlCarousel({
          
              autoPlay: 3000, //Set AutoPlay to 3 seconds
              items : 3,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3],
              responsiveRefreshRate : 200,
              // navigation: true,
              slideSpeed : 1000
          });

          function alignModal()
          {
              var modalDialog = $(this).find(".modal-dialog");
              // Applying the top margin on modal to align it vertically center
              modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
          }
          // Align modal when it is displayed
          $(".modal").on("shown.bs.modal", alignModal);
          
          // Align modal when user resize the window
          $(window).on("resize", function(){
              $(".modal:visible").each(alignModal);
          });   

           
          // if(window.innerWidth<480 || screen.width<480) document.getElementById("anime_text").innerHTML="";

        // Wrap every letter in a span
        Anime();


      });

      function Anime()
      {

        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml3');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
          .add({
            targets: '.ml3 .letter',
            opacity: [0,1],
            easing: "easeInOutQuad",
            duration: 2250,
            delay: (el, i) => 150 * (i+1)
          }).add({
            targets: '.ml3',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
      }
      function loadlang()
      {
        var lng = document.getElementById("langselector").value;


        Anime();

        // console.log("Dili:",lng);
        var translate = new Translate();
        var currentLng = lng;
        var attributeName = 'data-tag';
        translate.init(attributeName, currentLng);
        translate.process();
      }
    
      function Modal(service_name)
      {        
        console.log("service_name:", service_name);

        var lng = document.getElementById("langselector").value;
        console.log("Modal lng:", lng);

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("service_info").innerHTML = this.responseText;
        }
        };

        xmlhttp.open("GET","modal.php?q="+service_name+"&r="+lng,true);
        xmlhttp.send();
      }     


    </script>

  
</head>
<!-- <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"> -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="loadlang()">

<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand navbar-nav" href="index.php">
        <img src="assets/logo.PNG" alt="Logo"  style="height:40px; margin-left:20px">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style=" margin-right:20px">
      <ul class="nav navbar-nav navbar-right ml-auto"  style="height:60px !important; margin-top:10px;">
        <li><a data-tag="about" href="#about">BIZ BARADA</a></li>
        <li><a data-tag="services" href="#services">HYZMATLAR</a></li>
        <li><a data-tag="portfolio" href="#portfolio">TEJRIBE</a></li>
        <li><a data-tag="sertificates" href="#sertificates">SERTIFIKATLAR</a></li>
        <li><a data-tag="contact" href="#contact">HABARLAŞMAK</a></li>
        <li style="padding:12px 15px">
          <select onchange="loadlang()" style="background-color:#135788;color:white;padding:1px;margin:0px;" id="langselector" class=" btn btn-default dropdown-toggle" >
            <option value="tm">TM</option>
            <option value="ru">RU</option>
            <option value="en">EN</option>
          </select>

        </li>
      </ul>
    </div>
  </div>
</nav>

<div  class="my_navbar gradientbg1" >
    <div class=" container"  style=" margin-top:40px !important;">
        <h1 data-tag="company_name" class="navbar_title">«SANLY ÇÖZGÜT»</h1> 
        <p data-tag="company_type" class="navbar_title1 ml3" >HOJALYK JEMGYÝETI</p> 
    </div>
        <!-- <h1 style=" margin:30px" id="anime_text" class="ml12"></h1> -->
</div>

<!-- 
<div class="jumbotron text-center">
  <h1>SANLY ÇÖZGÜT</h1> 
  <p>HOJALYK JEMGYÝETI</p> 
</div> -->

<!-- Container (About Section) -->
<hr><br>
<div class="container">

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
        <br><p>&nbsp;</p>
      <h2 data-tag="about">BIZ BARADA</h2><br>
      <h4 data-tag="about_header">“SANLY ÇÖZGÜT” hojalyk jemgyýeti 2021-nji ýylda esaslandyryldy we kompaniýanyň tertipnamasy esasynda hereket edýär. Kompaniýanyň işiniň esasy ugurlary elektroenergetiki enjamlary, nebit we gaz senagaty üçin enjamlary we pes tokly ulgamlaryň enjamlary bilen üpjün etmek, şeýle hem elektrik enjamlaryny gurnama we güýç berýän we pes tokly ulgamlaryny işe girizmek bolup durýar.</h4><br>
      <!-- <p data-tag="about_content">Ýokarda sanap geçilen ugurlarda “SANLY ÇÖZGÜT” HJ-niň hünärmenleri, biziň kompaniýamyz işiň şu ugurlarynda birnäçe taslamalary üstünlikli amala aşyran “SYNMAZ GALA” HJ-niň hünärmenleri tarapyndan döredilensoň, uly tejribä eýedir.   </p> -->
      <!-- <br> -->
      <!-- <a href="#contact"><button  data-tag="contact_button" class="btn btn-default btn-lg" >Habarlaşmak</button></a> -->
    </div>
    <div class="col-sm-4"  style="padding-top:150px;">
      <span class="glyphicon glyphicon-leaf logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4" style="padding-top:50px;">
      <span class="glyphicon glyphicon-equalizer logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2 data-tag="feature">BIZIŇ AÝRATYNLYKLARYMYZ</h2><br>
      <h4 data-tag="mission_content"><strong>WEZIPESI:</strong> Kompaniýanyň işiniň esasy ugurlary elektroenergetiki enjamlary, nebit we gaz senagaty üçin enjamlary we pes tokly ulgamlaryň enjamlary bilen üpjün etmek, şeýle hem elektrik enjamlaryny gurnama we güýç berýän we pes tokly ulgamlaryny işe girizmekden ybarat.</h4>
      <p data-tag="vision_content"><strong>GÖRÜŞIMIZ:</strong> Biziň görüşimiz, adamlaryň gündelik durmuşyny has hem gowulandyrmakdan ybaratdyr.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2 data-tag="services">HYZMATLARYMYZ</h2>
  <h4 data-tag="services_header">esasy ugurlary</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-tasks logo-small"></span>
      <h4 data-tag="feature1">Kompyuter tehniki we programma goldaw</h4>
      <p data-tag="feature1_content">Üstünlikli amala aşyrýan her bir işimiz siziň üstünlikleriňizi artdyrar. 
        Kuwwatly çözgütlerimiz işiňizi hemişe kuwwatlandyrar.</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-retweet logo-small"></span>
      <h4 data-tag="feature2">Aragatnaşyk çözgütler</h4>
      <p data-tag="feature2_content">Zähmete bolan söýgümiz we ýerine ýetiren işlerimiziň oňyn netijesi siziň ynamyňyzy gazanmagyň zerur şertidir</p>
    </div>

  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-cloud-upload logo-small"></span>
      <h4 data-tag="feature3">IT çözgütleri</h4>
      <p data-tag="feature3_content">Zähmetsöýer we ussat hünärmenler toparymyz işleriň ýokary derejede ýerine ýetirilmegini üpjün eder</p>
    </div>
    <div class="col-sm-6">
      <span class="glyphicon glyphicon-flash logo-small"></span>
      <h4 data-tag="feature4">Elektrik geçiriji ulgamlar</h4>
      <p data-tag="feature4_content">Sertifikatlaşdyrylan hyzmatlarymyz we önümlerimiz ygtybarlylygyň we hiliň ýokary derejesini kepillendirýär</p>
    </div>
  </div>
</div>

<div id="services" class="container-fluid text-center bg-grey">
    <h2 data-tag="serviceTypes">HYZMATLARYŇ GÖRNÜŞLERI</h2>

    <div class="row slideanim">
        <h4  data-tag="serviceTypes_content2">Pes geçirijili ulgamlar</h4>

        <?php
          $string = file_get_contents("language/services.json");
          $json = json_decode($string, true);
          
          foreach ($json as $key => $value) 
          {
              if (!is_array($value)) 
              {
                  // echo $key . '=>' . $value . '<br />';
              } 
              else if($value["type"]=="2")
              {
                // echo $key.':<br>';
                $service_name="'".$key."'";
                echo '<div class="col-sm-6 col-md-4">';
                echo '<div class="thumbnailhyzmat" onclick="Modal('.$service_name.')" data-toggle="modal" data-target="#myModal">';
                echo '<div class="caption text-center" >
                        <div class="position-relative">
                          <img src="assets/services/'.$value["image"].'" style="width:30px; heght:30px; margin-top:10px;"/>
                        </div>';
                echo '<h5 data-tag="'.$value["name"].'" style="color:#303030; margin-bottom:10px;" id="thumbnail-label"></h5>
                      </div>
                      </div>
                      </div>';
                  // foreach ($value as $key => $val) 
                  // { 
                  //     echo $key . '=>' . $val . '<br />';
                  // }
              }
          }
        ?>

    </div>

    <hr>
    
    <div class="row slideanim">
          <h4 data-tag="serviceTypes_content1">Ýokary kuwwatly ulgamlar</h4>

          <?php
            $string = file_get_contents("language/services.json");
            $json = json_decode($string, true);
            
            foreach ($json as $key => $value) 
            {
                if (!is_array($value)) 
                {
                    // echo $key . '=>' . $value . '<br />';
                } 
                else if($value["type"]=="1")
                {
                  // echo $key.':<br>';
                  echo '<div class="col-sm-6 col-md-4">';
                  echo '<div class="thumbnailhyzmat" onclick="Modal('.$service_name.')" data-toggle="modal" data-target="#myModal">';
                  echo '<div class="caption text-center" >
                          <div class="position-relative">
                            <img src="assets/services/'.$value["image"].'" style="width:30px; heght:30px; margin-top:10px;"/>
                          </div>';
                  echo '<h5 data-tag="'.$value["name"].'" style="color:#303030; margin-bottom:10px;" id="thumbnail-label"></h5>
                        </div>
                        </div>
                        </div>';
                    // foreach ($value as $key => $val) 
                    // { 
                    //     echo $key . '=>' . $val . '<br />';
                    // }
                }
            }
          ?>

      </div>
</div>
  

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <span  id="service_info">

      </span>
    </div>

  </div>
</div>

<!-- Chozgutler we enjamlar -->
<div id="services" class="container-fluid text-center slideanim">
    <h2 data-tag="equipments">ENJAMLAR TOPLUMY WE ÇÖZGÜTLERIMIZ</h2>

    <div class="row">
        <h4 data-tag="equipments_header2">Pes geçirijili ulgamlar üçin enjamlaryň we çözgütleriň sanawy</h4>
        <br>

        <div class="col-sm-6" > 
            <img src="assets/ch1.png" alt="Paris" height="300">
        </div>
        <div class="col-sm-6"> 
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_1" class="span-sch">Akylly şäher üçin çözgütleriň toplumy</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_2" class="span-sch">Akylly öý üçin çözgütleriň toplumy</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_3" class="span-sch">Ýerli, kompýuter, içerki torlar üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_4" class="span-sch">Ýerli hasaplaýyş torlary (LAN) üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_5" class="span-sch">Telefon we telewizion torlary üçin üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_6" class="span-sch">Kabel torlaryny gurmak üçin ähli zerur materiallar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_7" class="span-sch">Aragatnaşyk torlary üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_8" class="span-sch">Wideogözegçilik ulgamlary üçin enjamlar (CCTV)</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_9" class="span-sch">Girmä gözegçilik we dolandyryş ulgamlary üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_10" class="span-sch">Gorag duýduryş (signalizasiýa) ulgamy üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_11" class="span-sch">Ewakuasiýa (göçürişe) habar berme we dolandyryş ulgamlary üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_12" class="span-sch">Giriş gapyny öý bilen baglaýan selektory (interkomy, domofony) we çagyrma panelleri</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_13" class="span-sch">Wideokonferensiýa aragatnaşygy ulgamlary üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_14" class="span-sch">Ýangyn duýduryş (signalizasiýa) we ýangyny söndürme üçin enjamlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments2_15" class="span-sch">Sahnanyň ses enjamlary (passiw, aktiw akustiki ulgamlar) we ş.m.</span></div>
        </div>

    </div>
    <br><hr><br>
    
    <div class="row">
        <h4 data-tag="equipments_header1">Kuwwat ulgamlary üçin enjamlaryň sanawy</h4>
        <br>
        <div class="col-sm-6"> 
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_1" class="span-sch">Ýereçatma (ýer bilen birleşdirme) ulgamlary üçin materiallar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_2" class="span-sch">Ýyldyrymdan goramak ulgamlary üçin materiallar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_3" class="span-sch">0,4 kW-den 35 kW-a çenli elektrik paýlaýjy şşitleri</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_4" class="span-sch">35 kW çenli elektrik kabelleri</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_5" class="span-sch">Kabel nowalary</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_6" class="span-sch">Yşyklandyryş sütünleri, prožektorlar, bezegli çyralar we lýustralar (şahaçylar)</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_7" class="span-sch">Öý elektrik materiallarynyň ähli görnüşleri</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_8" class="span-sch">Dürli kuwwatly üznüksiz elektrik üpjünçilik çeşmeleri</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_9" class="span-sch">Dürli kuwwatly transformatorlar</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_10" class="span-sch">Dizel-generator gurluşyny dikme we gurnama</span></div>
            <div><img src="assets/check.png"  height="15"><span data-tag="equipments1_11" class="span-sch">50 kWt-dan 2500 kWt-a çenli dizel generatorlary we ş.m.</span></div>
        </div>
        <div class="col-sm-6"> 
            <img src="assets/ch1.png" alt="Paris"  height="300">
        </div>
    </div>


</div>


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 data-tag="portfolio">Tejribämiz</h2>
  <h4 data-tag="portfolio_content">Ýerine ýetiren işlerimiz</h4>
  <div class="row text-center slideanim">

    <?php
      $string = file_get_contents("language/services.json");
      $json = json_decode($string, true);
      
      foreach ($json as $key => $value) 
      {
          if (!is_array($value)) 
          {
              // echo $key . '=>' . $value . '<br />';
          } 
          else if($value["type"]=="3")
          {
            // echo $key.':<br>';
            echo '<div class="col-sm-4"><div class="thumbnail">';
            echo '<img src="assets/portfolio/'.$value["image"].'" alt="Portfolio" style="width:400px; height:200px;" width="400" height="300">';
            
            echo '<p><strong data-tag="'.$value["name"].'_header"></strong></p>
                  <p data-tag="'.$value["name"].'_content"></p>
                  </div>
                  </div>';
              // foreach ($value as $key => $val) 
              // { 
              //     echo $key . '=>' . $val . '<br />';
              // }
          }
      }
    ?>

  </div><br>
  
  <h2 data-tag="cooperation" style="margin-bottom:0px">HYZMATDAŞLYKDA</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">

    <?php
          $string = file_get_contents("language/services.json");
          $json = json_decode($string, true);
          $i=0;
          foreach ($json as $key => $value) 
          {
              if (!is_array($value)) 
              {
                  // echo $key . '=>' . $value . '<br />';
              } 
              else if($value["type"]=="4")
              {
                if($i==0)
                  echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
                else  
                  echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';

                $i++;
              }
          }
        ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <?php
          $string = file_get_contents("language/services.json");
          $json = json_decode($string, true);
          $i=0;
          foreach ($json as $key => $value) 
          {
              if (!is_array($value)) 
              {
                  // echo $key . '=>' . $value . '<br />';
              } 
              else if($value["type"]=="4")
              {
                if($i==0)
                  echo '<div class="item active"><h4 data-tag1="'.$key.'"></h4>';
                else
                  echo '<div class="item"><h4 data-tag1="'.$key.'"></h4>';
                
                echo '<h4 style="margin-top:0px;"><img src="assets/cooperation/'.$value["image"].'" alt="Hyzmatdaşlyk" width="120" height="50"></h4></div>';
                $i++;
              }
          }
        ?>

      <!-- <div class="item active">
        <h4>Для компания  Çalık Enerji Sanayi Ve Ticaret A.Ş. («ЧАЛЫК ЭНЕРДЖИ») в первом этапе реконструкции электроснабжения города Ашгабада были выполнены строительно-монтажные работы по прокладке кабельных систем до 35 кВ.</h4><br><br>
        <img src="assets/h2.png" alt="San Francisco" width="120" height="50">
        <span>Çalık Enerji Sanayi Ve Ticaret A.Ş. («ЧАЛЫК ЭНЕРДЖИ»)</span></h4>
      </div> -->
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Öňki</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Indiki</span>
    </a>
  </div>
</div><br>

<!-- Container (Services Section) -->
<div id="sertificates" class="container-fluid text-center">
  <h2 data-tag="sertificates">SERTIFIKATLAR</h2>
  <!-- <h4>aşakdakylar bilen utgaşykly</h4><br> -->
    <div id="owl-demo">

    <?php
          $string = file_get_contents("language/services.json");
          $json = json_decode($string, true);
          
          foreach ($json as $key => $value) 
          {
              if (!is_array($value)) 
              {
                  // echo $key . '=>' . $value . '<br />';
              } 
              else if($value["type"]=="5")
              {
                echo '<div class="item"><img src="assets/sertificates/'.$value["image"].'" alt="Ygtyýarnama"></div>';
              }
          }
        ?>

    </div>
</div><br>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 data-tag="contact" class="text-center">HABARLAŞMAK ÜÇIN</h2>
  <div class="row">
    <div class="col-sm-12">
      
        <div class="container text-center" style="margin:20px">
            <p data-tag="contact_letter">Bize ýazyň we biz siz bilen gysga wagtyň içinde habarlaşarys.</p>
            <span class="glyphicon glyphicon-map-marker" ></span> <span  data-tag="adress" class="span-contact">139/1, Görogly köçe, Aşgabat, Türkmenistan</span>
            <span class="glyphicon glyphicon-phone"></span> <span class="span-contact"> +993 61426384 </span>
            <span class="glyphicon glyphicon-envelope"></span> <span class="span-contact"> info@sanlycozgut.com</span>
        </div>
    </div>
  </div>
  <hr style="border-color:white">

    <!-- Location/map -->
    <div class="row" >
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d330.7061713725612!2d58.34949820233751!3d37.94853074880526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f7001c01ab9ba77%3A0x173b79f80bb92b6e!2z0KDQtdC80L7QvdGCINCa0L7QvNC_0YzRjtGC0LXRgNC90L7QuSDRgtC10YXQvdC40LrQuA!5e0!3m2!1sru!2s!4v1656666740491!5m2!1sru!2s" 
              style="width:100%;height:300px;" frameborder="0"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573.2882669389758!2d58.400092413272866!3d37.94032221648169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6ffddeda2ef40d%3A0x681a25f13ac8083a!2zTTM3LCBBc2hnYWJhdCwg0KLRg9GA0LrQvNC10L3QuNGB0YLQsNC9!5e0!3m2!1sru!2sru!4v1622031739733!5m2!1sru!2sru"  -->
                <!-- style="width:100%;height:300px;" frameborder="0" allowfullscreen="true" style="position:relative;"> -->
            </iframe>
        </div>

        <div class="col-sm-6">
            <div style="background-size:cover,contain;background-image: url('/assets/map.png');width:100%;height:300px;background-position: center;">
            </div>
            <!-- <img src="assets/map.png" class="w3-image w3-greyscale-min" style="width:100%;height:300px;"> -->
        </div>
    </div>
</div>

<!-- Main container -->
</div>

<br>

<footer class="container-fluid text-center sch-footer">
  <a href="#myPage" title="Ýokary git">
    <span  style="color:white" class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p data-tag="footer" style="color:white; font-size: 15px; margin:0px;">"Sanly Çözgüt" Hojalyk Jemgyýeti ©2022 Ähli hukuklar goralan</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
