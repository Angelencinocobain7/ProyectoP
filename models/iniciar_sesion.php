<?php
    include "./conection.php";

    $correo = filter_input(INPUT_POST, 'correo');
    $password = filter_input(INPUT_POST, 'contraseña');

     $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$password'";

    $resultado = $conn->query($sql);
    if ($fila = $resultado->fetch_assoc()) {
        session_start();
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['correo'] = $fila['correo'];
        $_SESSION['nombre'] = $fila['nombre_completo'];
        echo $_SESSION['usuario'];
        header('Location: ../index.php');
    }
    else {
        echo "Los datos ingresados son incorrectos, verifique sus datos";
    }
    $conn->close();