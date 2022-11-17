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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">

    <title>Carrito Compras</title>
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

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.php">Esencia | Natural</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos y accede a un descuento</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">POMADA HERBAL</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/image1.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">125.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Con arnica</li>
                            <li>Aceite de cañamo</li>
                            <li>Cera virgen de Abeja</li>
                            <li>Extracto de sauce</li>
                            <li>60 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Silimariano</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen2.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">369.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Rico en Silimarina</li>
                            <li>Combate higado graso</li>
                            <li>Hepatitis</li>
                            <li>60 tabletas de 1 Gramo c/u</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CAFE DESCAFEINADO COMESTIBLE</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen3.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">699.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE PRODUCTO</li>
                            <li>Relajación del sistema nervioso</li>
                            <li>Relaja los musculos</li>
                            <li>Menor estrés y ansiedad</li>
                            <li>180 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">GUMMIES DE CBD CON MELATONINA</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen4.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">869.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Gomitas con 15 mg de CBD Full Spectrum y melatonina para inducir sueño reparador</li>
                            <li>90 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">POMADA CDB CANIVA</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen5.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">359</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Elaborada con aceites esenciales de grado terapeútico 100% naturales</li>
                            <li>Mejora movilidad y flexibilidad de articulaciones</li>
                            <li>Elimina dolores musculares y articulares</li>
                            <li>Beneficios rápidos, duraderos y progresivos.</li>
                            <li>60 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PROTECTOR SOLAR CON CBD</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen9.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">2599</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Crema facial con aceite esencial de CBD, protector solar, colágeno y ácido hilurónico.</li>
                            <li>1000 GRAMOS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">NIVA DERM-CREMA ANTIEDAD CON CBD</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen6.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">999</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE PRODUCTO</li>
                            <li>Ideal para el tratamiento de problemas cutáneos con proceso inflamatorio y componente autoinmune, como la dermatitis, el eczema, la psoriasis y la rosácea</li>
                            <li>Equilibra la producción de sebo mientras calma la inflamación que causa el acné</li>
                            <li>Por la cantidad de antioxidantes, actúa como preventivo del envejecimiento de la piel</li>
                            <li>100 ML</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">BALSAMO TERAPEUTICO CBD</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen7.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">469</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Infundido con extracto de cáñamo de amplio espectro que contiene CBD natural (Koi PRIZM™)</li>
                            <li>No psicoactivo, contiene niveles no detectables de THC (<0.001%)</li>
                            <li>Se calienta al contacto  provocando una sensación inmediata de alivio</li>
                            <li>Disponible en dos tamaños:
                                0.5 oz que es perfecto para llevar a todas partes.
                                1.7 oz para uso en casa en cualquier momento.</li>
                            <li>150 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Pastillas de moringa - KOI</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/imagen8.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$<span class="">53.97</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ACERCA DE ESTE ARTICULO</li>
                            <li>Ayuda a reducir el colesterol y la presión arterial. prevenir la inflamación.</li>
                            <li>contiene propiedades que mejoran la vista</li>
                            <li>Ayuda al cuerpo a convertir las grasas en energía.</li>
                            <li>500 Gramos</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>

            </div>


        </div>
    </main>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

</body>

</html>