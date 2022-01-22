<?php

$pg= "proyectos";

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="../Portfolio/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Portfolio/css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Portfolio/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Portfolio/css/estilos.css">

</head>
<body id="proyectos">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunos de los trabajos que vemos en clase:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="m-1 border proyecto">
                    <img src="../Portfolio/images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                
                <div class="col-12 color-gradiente py-2">
                    <h2 class="div-clientes p-2">ABM CLIENTES</h2>
                </div>
                <div class="py-3 texto">
                    <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                </div>
                <div class="row py-5">
                    <div class="col-6 ps-3">
                        <a href="https://nelsontarche.com.ar/sistema/abmclientes/" class="btn btn-rojo" target="_blank">Ver Online</a>
                    </div>
                    <div class="col-6 pe-3 link-rojo text-center">
                        <a href="" target="_blank">Código fuente</a>
                    </div>

                </div>
                
                </div>
            </div>
            <div class="col-12 col-sm-4 ">
                <div class="m-1 border proyecto">
                    <img src="../Portfolio/images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                
                <div class="col-12 color-gradiente py-2">
                    <h2 class="div-clientes p-2">Sistema de gestión de ventas</h2>
                </div>
                <div class="py-3 texto">
                    <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                </div>
                <div class="row py-5">
                    <div class="col-6 ps-3">
                        <a href="https://nelsontarche.com.ar/sistema/login/login.php" class="btn btn-rojo" target="_blank">Ver Online</a>
                    </div>
                    <div class="col-6 pe-3 link-rojo text-center">
                        <a href="" target="_blank">Código fuente</a>
                    </div>

                </div>
                
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="m-1 border proyecto">
                    <img src="../Portfolio/images/proyecto-integrador.png" alt="Proyecto Larabel" class="img-fluid">
                
                <div class="col-12 color-gradiente py-2">
                    <h2 class="div-clientes p-2">Proyecto Larabel</h2>
                </div>
                <div class="py-3 texto">
                    <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                </div>
                <div class="row py-5 espacio-mobile">
                    <div class="col-6 ps-3">
                        <a href="https://nelsontarche.com.ar/sistema/login/login.php" class="btn btn-rojo" target="_blank">Ver Online</a>
                    </div>
                    <div class="col-6 pe-3 link-rojo text-center">
                        <a href="" target="_blank">Código fuente</a>
                    </div>

                </div>
                
                </div>
            </div>

        </div>

    </main>

    <?php include_once "footer.php"; ?>
    
</body>
<script src="../Portfolio/css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>