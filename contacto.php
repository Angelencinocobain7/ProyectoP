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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="Estilo.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <?php             
                        if($tipoUsuario==1){
                            
                            echo '<a href="proyectos.php">Proyectos</a>';
                        }
                                        
                    ?>
                    </li>
                 <li>
                    <?php             
                        if($usuarioSesion==''){
                           
                            echo '<a href="Usuarios/login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<label>'.$usuarioSesion.'</label>';
                            echo '<a href="Usuarios/logout.php">Cerrar sesión</a>';
                        }                  
                    ?>
<body>
  <div class="container">
    
    <div class="title">Dudas o comentarios envianos un correo</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nombre</span>
            <input type="text" placeholder="Ingresa Tu Nombre" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Ingresa Tu Correo" required>
          </div>
          <div class="input-box">
            <span class="details">Escribe tu mensaje</span>
            <textarea name="message" rows="7" cols="30" class="campo-form"></textarea><br>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Sexo</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Hombre</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Mujer</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefiero no decirlo</span>
            </label>
            
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Enviar">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
