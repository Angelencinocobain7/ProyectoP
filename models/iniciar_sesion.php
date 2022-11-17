<?php
    include "./conection.php";

    $correo = filter_input(INPUT_POST, 'correo');
    $password = filter_input(INPUT_POST, 'contraseña');

     $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$password'";

    $resultado = $conn->query($sql);
    if ($fila = $resultado->fetch_assoc()) {
        session_start();

        //CONSULTAR CUALQUIERA DE ESTAS VARIABLES PARA VERIFICIAR SI HAY INICIO DE SESION
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['correo'] = $fila['correo'];
        $_SESSION['nombre'] = $fila['nombre_completo'];
        echo $_SESSION['usuario'];

        // CON ESTO HACEN REDIRECCIONES
        header('Location: ../index.php');
    }
    else {
        echo "Los datos ingresados son incorrectos, verifique sus datos";
    }
    $conn->close();