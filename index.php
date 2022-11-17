
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Esencia | Natural</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

 
  <div id="wrapper">

  
    <div id="banner-wrapper">
      <header>
        <div id="header-inner">
          <a href="" id="logo">
            <img src="img\pics\logo.png" alt="">
          </a>

          <nav>
            <a href="#" id="menu-icon">
              <i class="fa fa-bars"></i>
            </a>
            <ul>
              <li>
                <a href="index.php" class="current">
                  Inicio
                </a>
              </li>
              <li>
                <a href="productos.php">Productos</a>
              </li>
              <li>
                <a href="Casa.php">
                  ¿Quienes somos?
                </a>
              </li>
              <li>
                <a href="Contacto.php">
                  Contacto
                </a>
              </li>
              <li>
                <?php
                  session_start();
                  if(isset( $_SESSION['nombre']) && !empty($_SESSION)){
                    echo '
                      <a href="#">
                        Bienvenido '.$_SESSION['nombre'].'
                      </a>
                    ';
                    echo '
                      <a href="models/cerrar_sesion.php">
                        Cerrar session
                      </a>
                    ';
                  }else{
                    echo '
                      <a href="login/login.php">
                        Iniciar Sesión
                      </a>
                    ';
                  }
                ?>
              </li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- SLIDER -->
      <div id="slide-wrap">
        <section class="slider">
          <ul class="slider1">
            <li><img src="img/slider/slider1.jpg" alt=""></li>
            <li><img src="img/slider/slider2.jpg" alt=""></li>
            <li><img src="img/slider/slider3.jpg" alt=""></li>
          </ul>
        </section>
      </div>
    </div>

    <!-- ICONS -->
    <section class="one-third" id="skills">
      <div class="icon-wrap">
        <i class="fa fa-desktop"></i>
      </div>
      <h3>Hecho por</h3>
      <h2>Estudiantes del 5to grado grupo K de Licenciatura en Sistemas Computacionales.</h2>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
        <i class="fa fa-pencil-square-o"></i>
      </div>
      <h3>Mi primera Empresa :)</h3>
      <h2>crea el uso de las hiervas con un fin medicinal.</h2>
    </section>
    <section class="one-third">
      <div class="icon-wrap">
        <i class="fa fa-file-code-o"></i>
      </div>
      <h3>Vida Saludable</h3>
      <h2>Empresa Socialmente Responsable</h2>
    </section>

    <div class="clearfix-padding"></div>
    <!-- LEFT COL -->
    <section class="left-col" id="portfolio">
      <h3>Productos</h3>
      <p>Nuestros productos son 100% herbolarios elaborado con fines medicinales para tratar enfermedades como el parkinson y es bueno para pacientes con cancer.</p>
    </section>
    <section class="sidebar">
      <img src="img\pics\logo.png">
    </section>

    <div class="clearfix-padding"></div>
    <!-- INFO THUMBNAILS -->
    <div class="one-third-padding" id="services">
      <h3>Pomadas</h3>
      <img src="img/pics/image1.png" alt="">
      <p>Nuestras pomadas son efectivas tratando dolores musculares fuertes, ya sea por leciones en el trabajo, gimnacio o Accidentes.</p>
    </div>
    <div class="one-third-padding">
      <h3>Pastillas</h3>
      <img src="img/pics/image2.png" alt="">
      <p>Nuestras pastillas son efectivas para personas que no pueden dormir, personas con alto porcentaje de nervios incontrolables, y como mencione arriba parkinson y pacientes con cancer.</p>
    </div>
    <div class="one-third-padding">
      <h3>Hiervas Medicinales</h3>
      <img src="img/pics/image3.png" alt="">
      <p>Nuestras hiervas no causan irritacion en la garganta ala hora de consumirla, es ligera al tacto del paladar, Y se siente un nivel de calma placentero mientras te ayuda.</p>
    </div>
  </div>
  <div class="clearfix-padding"></div>
  <!-- FOOTER -->
  <footer>

    

   
    <div class="banner-wrapper">
      <div class="icon-text">
        <div class="icon-text-icon">
          <ul class="footer-nav">
            <li>
              <a href="index.php">Inicio</a>
            </li>
            <li>
              <a href="productos.php">Productos</a>
            </li>
            <li>
              <a href="Casa.php">¿Quienes Somos?</a>
            </li>
            <li>
              <a href="contacto.php">Contacto</a>
            </li>
          </ul>
        </div>
        <div class="icon-text-text">
          <ul class="social">
            <li>
              <a href="mailto:esencianatural549@gmail.com">
                <i class="fa fa-envelope-o"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/profile.php?id=100087966212390">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/MaryJuana22">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
           
            <li>
              <a href="../Esencia/insta/insta.php">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <footer class="second-footer">
  
    <p>
      &copy; <a href="https://www.facebook.com/profile.php?id=100087966212390">Esencia Natural</a>
    </p>
  </footer>

  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>
</body>
</html>
