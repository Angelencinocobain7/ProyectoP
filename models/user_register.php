<?php
    include "./conection.php";


    $username = filter_input(INPUT_POST, 'usuario');
    $password = filter_input(INPUT_POST, 'contraseña');
    $correo = filter_input(INPUT_POST, 'correo');
    $nombre = filter_input(INPUT_POST, 'nombre');

     $sql = "SELECT * FROM usuarios";

        if ($resultado = $conn->query($sql)) {
            $usuario_existente = false;
            while($obj = $resultado->fetch_object()){
                if($obj->correo == $correo || $obj->usuario == $username){
                    $usuario_existente = true;
                }
            }
            if(!$usuario_existente){
                $sql = "INSERT INTO usuarios ( `nombre_completo`, `correo`, `usuario`, `contrasena`) 
                VALUES ('$nombre', '$correo', '$username', '$password')";
                echo "agregando usuario...";
                if($resultado = $conn->query($sql)){
                    session_start();
                    $_SESSION['usuario'] = $username;
                    $_SESSION['correo'] = $correo;
                    $_SESSION['nombre'] = $nombre;
                    echo $_SESSION['usuario'];
                    header('Location: ../index.php');
                }
            }else{
                echo "Este usuario ya existe, intente agregando otro";
            }
        }
        else {
            echo "Error: ". $sql . "<br>". $conn->error;
        }
        $conn->close();