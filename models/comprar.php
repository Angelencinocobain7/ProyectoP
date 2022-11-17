<?php
    include "./conection.php";

    session_start();
    $data = json_decode(file_get_contents('php://input'));
    $productos = json_encode($data->productos);
    $total = $data->total;
    $correo_cliente = $_SESSION["correo"];

        $sql = "INSERT INTO `compras` (`email_cliente`, `total`, `productos`) VALUES ('$correo_cliente', '$total', '$productos');";
    if(!empty($productos) && !empty($correo_cliente) && !empty($total)){
        if($response = $conn->query($sql)){
                echo "OK";
            }else{
                echo json_encode(array(
                    'productos' => $productos,
                    'total' => $total,
                    'correo'=> $correo_cliente
                ));
            }
    }else{
        echo json_encode(array(
        'productos' => $productos,
        'total' => $total,
        'correo'=> $correo_cliente
    ));
    }
?>