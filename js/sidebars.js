/* global bootstrap: false */
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()

function myFunction() {

  if(document.getElementById("main-span").textContent=="")
  {
    show_menu();
  }
  else
  {
    hide_menu();
   
  }
}

function displayWindowSize(){
  // Get width and height of the window excluding scrollbars
  var w = document.documentElement.clientWidth;
  var h = document.documentElement.clientHeight;
  
  // Display result inside a div element
  //document.getElementById("result").innerHTML = "Width: " + w + ", " + "Height: " + h;

  var w = parseInt(window.innerWidth);
  
  if(w <= 800) {
    hide_menu();
  } 
  else {
    show_menu();
  }
}
  
// Attaching the event listener function to window's resize event
window.addEventListener("resize", displayWindowSize);
displayWindowSize();


function hide_menu()
{
document.getElementById("main-div").style="width:105px; align-content: center;";
document.getElementById("main-span").innerHTML="";
document.getElementById("main-svg").setAttribute("width","68px");

if(document.getElementById('menu-maksatnama') !== null)
document.getElementById("menu-maksatnama").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-maksatnamalar-svg"/></svg>`;
// document.getElementById("menu-maksatnamalar").innerHTML="";

if(document.getElementById('menu-maksatnamalar') !== null)
document.getElementById("menu-maksatnamalar").hidden="true";

if(document.getElementById('menu-chare') !== null)
document.getElementById("menu-chare").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-chareler-svg"/></svg>`;
//document.getElementById("menu-chareler").innerHTML="";

if(document.getElementById('menu-chareler') !== null)
document.getElementById("menu-chareler").hidden="true";

if(document.getElementById('menu-gorkeziji') !== null)
document.getElementById("menu-gorkeziji").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-gorkezijiler-svg"/></svg>`;
//document.getElementById("menu-gorkezijiler").innerHTML="";

if(document.getElementById('menu-gorkezijiler') !== null)
document.getElementById("menu-gorkezijiler").hidden="true";

if(document.getElementById('menu-hasabat') !== null)
document.getElementById("menu-hasabat").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-hasabatlar-svg"/></svg>`;
//document.getElementById("menu-hasabatlar").innerHTML="";

if(document.getElementById('menu-hasabatlar') !== null)
document.getElementById("menu-hasabatlar").hidden="true";

if(document.getElementById('menu-statistika') !== null)
document.getElementById("menu-statistika").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-statistikalar-svg"/></svg>`;
//document.getElementById("menu-hasabatlar").innerHTML="";

if(document.getElementById('menu-statistikalar') !== null)
document.getElementById("menu-statistikalar").hidden="true";

if(document.getElementById('menu-house') !== null)
document.getElementById("menu-house").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-home-svg"/></svg>`;

//document.getElementById("dropdownUser").innerHTML=`<img src="../assets/mdo.jpg" alt="" width="30" height="30" class="rounded-circle me-2">`;

if(document.getElementById('dropdownUserName') !== null)
document.getElementById("dropdownUserName").hidden="true";
}

function show_menu()
{

document.getElementById("main-div").style="width:250px; align-content: center;";
document.getElementById("main-span").innerHTML="E-MAKSATNAMA";
document.getElementById("main-svg").setAttribute("width","40px");

if(document.getElementById('menu-maksatnama') !== null)
document.getElementById("menu-maksatnama").innerHTML=`<svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-maksatnamalar-svg"/></svg>Maksatnamalar`;
// document.getElementById("menu-maksatnamalar").innerHTML=`<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Maksatnamalar</a></li></ul>`;

if(document.getElementById('menu-maksatnamalar') !== null)
document.getElementById("menu-maksatnamalar").hidden="";


if(document.getElementById('menu-chare') !== null)
document.getElementById("menu-chare").innerHTML=`<svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-chareler-svg"/></svg>Çäreler`;
//document.getElementById("menu-chareler").innerHTML=`<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Hasabat</a></li>
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Jemleýji</a></li></ul>`;

if(document.getElementById('menu-chareler') !== null)
document.getElementById("menu-chareler").hidden="";

if(document.getElementById('menu-gorkeziji') !== null)
document.getElementById("menu-gorkeziji").innerHTML=`<svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-gorkezijiler-svg"/></svg>Görkezijiler`;
//document.getElementById("menu-gorkezijiler").innerHTML=`<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Hasabat</a></li>
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Jemleýji</a></li></ul>`;

if(document.getElementById('menu-gorkezijiler') !== null)
document.getElementById("menu-gorkezijiler").hidden="";

if(document.getElementById('menu-hasabat') !== null)
document.getElementById("menu-hasabat").innerHTML=`<svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-hasabatlar-svg"/></svg>Hasabatlar`;
//document.getElementById("menu-hasabatlar").innerHTML=`<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
//        <li><a href="#" class="text-white d-inline-flex text-decoration-none rounded">Hasabat aýlar</a></li></ul>`;

if(document.getElementById('menu-hasabatlar') !== null)
document.getElementById("menu-hasabatlar").hidden="";


if(document.getElementById('menu-statistika') !== null)
document.getElementById("menu-statistika").innerHTML=`<svg class="bi pe-none me-2" width="24" height="24"><use xlink:href="#menu-statistikalar-svg"/></svg>Statistika`;

if(document.getElementById('menu-statistikalar') !== null)
document.getElementById("menu-statistikalar").hidden="";


if(document.getElementById('menu-house') !== null)
document.getElementById("menu-house").innerHTML=`<svg class="bi pe-none me-2" width="30" height="30"><use xlink:href="#menu-home-svg"/></svg>Baş sahypa`;

//document.getElementById("dropdownUser").innerHTML=`<img src="../assets/mdo.jpg" alt="" width="32" height="32" class="rounded-circle me-2"><strong>ahal</strong>`;

if(document.getElementById('dropdownUserName') !== null)
document.getElementById("dropdownUserName").hidden="";
}

