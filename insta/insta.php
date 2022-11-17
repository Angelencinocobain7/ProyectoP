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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Esencia - Natural</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="button">
  <button><span>Tocame</span></button>
</div>

<div class="pop-up">
  <div class="content">
    <div class="container">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      
      <span class="close">cerrar</span>
      
      <div class="title">
        <h1>Siguenos en instagram</h1>
      </div>
      
      <img src="esencia_natural549_qr.png" alt="Car">
      
      <div class="subscribe">
        <h1>Siguenos <span>para saber mas de nosotros</span>.</h1>
      
        <form>
          <input type="email" placeholder="Escanea el codigo QR">
          <input type="submit" value="Escanea ya!!">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
