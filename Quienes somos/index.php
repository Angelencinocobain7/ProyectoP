<?php
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
        $usuarioSesion=$_SESSION['nombreUsuario'];
        $tipoUsuario=$_SESSION['tipo'];
    }
    else{
        $usuarioSesion='';
        $tipoUsuario=0;
    }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Meet The Team, INTUITIVE">
    <meta name="description" content="">
    <title>Casa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-139d"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="" class="u-image u-logo u-image-1" data-image-width="434" data-image-height="259">
          <img src="images/Logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-text u-text-custom-color-3 u-text-1">ESENCIA NATURAL 5TO K</p>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_524d">
      <h2 class="u-text u-text-custom-color-3 u-text-default u-text-1">Nuestro E​q​uipo</h2>
      <p class="u-text u-text-default u-text-2">&nbsp;Nuestra empresa se dedica a crear Medecinas Herbales para tratar enfermedades como el parkinson, cancer, y personas con mucho dolor.</p>
      <div class="u-border-3 u-border-custom-color-3 u-custom-color-3 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-custom-color-3 u-expanded-width u-shape u-shape-rectangle u-shape-2"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1002" data-image-height="1002"></div>
              <h5 class="u-text u-text-default u-text-3">Angel Josue&nbsp;</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-4">PROGRAMADOR FULL-STACK</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <div alt="" class="u-image u-image-circle u-image-2" data-image-width="958" data-image-height="960"></div>
              <h5 class="u-text u-text-default u-text-5">Gerardo Mauricio&nbsp;</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-6">PROGRAMADOR BACK-END</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div alt="" class="u-image u-image-circle u-image-3" data-image-width="540" data-image-height="550"></div>
              <h5 class="u-text u-text-default u-text-7">Daniel De Jesus</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-8">PROGRAMADOR FRONT-END</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <div alt="" class="u-image u-image-circle u-image-4" data-image-width="720" data-image-height="728"></div>
              <h5 class="u-text u-text-default u-text-9">Olber Rafael&nbsp;</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-10">MANTENIMIENTO</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <div alt="" class="u-image u-image-circle u-image-5" data-image-width="766" data-image-height="1600"></div>
              <h5 class="u-text u-text-default u-text-11">Alexis&nbsp; Federico</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-12">BASE DE DATOS</h6>
            </div>
          </div>
          <div class="u-align-center u-container-style u-grey-5 u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-6">
              <div alt="" class="u-image u-image-circle u-image-6" data-image-width="959" data-image-height="960"></div>
              <h5 class="u-text u-text-default u-text-13">Rodolfo de Jesus</h5>
              <h6 class="u-custom-font u-text u-text-default u-text-font u-text-14">MANTENIMIENTO</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-container-align-right-lg u-container-align-right-xl u-image u-shading u-section-2" id="carousel_03c2" data-image-width="1000" data-image-height="563">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1">MISION</h3>
            <h4 class="u-text-active-black">"Ofrecer a nuestros clientes productos, con los más altos estándares de calidad, tanto en el orden nacional, como internacional, para así garantizar el mayor aprovechamiento de los beneficios de las plantas medicinales,<br> Ayudar al mejoramiento de la salud pública e individual de los pacientes".
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-4242">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">"La salud es la riqueza real y no piezas de oro y plata."</h2>
      </div>
    </section>
    <section class="u-clearfix u-image u-shading u-section-4" id="carousel_21a3" data-image-width="1000" data-image-height="563">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1">VISION</h3>
            <h4 class="u-text-active-black">"Nuestra vision es enfocar el uso de las plantas como medicamentos no dañinos a la salud del ser humano, dando una nueva experiencia al consumir medicamentos herbolarios"..</p>
          </div>
        </div>
        <a href="../productos.php" class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-text-body-alt-color u-btn-1">IR A PRODUCTOS</a>
        <a href="../index.php" class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-3 u-text-body-alt-color u-btn-2">ir a inicio</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-bab8"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text" href="" target="_blank">
        <span>Creado por</span>
      </p>
      <p class="u-text">
        <span>Alumnos del 5to K</span>
      </p>
      <p class="u-text" href="" target="_blank">
        <span>Licenciatura en Sistemas Computacionales</span>
      </p>. 
    </section>
  
</body></html>