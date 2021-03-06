<?php

    $pg= "contacto";
    if($_POST){
        $nombre = $_POST["txtNombre"];
        $corres = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMensaje"];

        //para
        $para = "alan.papillu@hotmail.com";

        //titulo
        $titulo = "Mensaje recibido desde tu web";

        //mensaje
        $cuerpo = "
        Nombre = $nombre <br>
        Correo = $correo <br>
        Telefono = $telefono <br>
        Mensaje = $mensaje
        "

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: <alan.papillu@hotmail.com>' . "\r\n";
        $cabeceras .= 'From: <contacto@alanpapillu.com>' . "\r\n";
        }

        // Enviarlo
        mail($para, $título, $mensaje, $cabeceras);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../Portfolio/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../Portfolio/css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Portfolio/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Portfolio/css/estilos.css">

</head>
<body id="contacto">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviándome un mensaje o bien por WhatsApp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí el mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3 float-end float-sm-start">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
                    </div>
                </form>    
            </div>
        </div>

    </main>

    <?php include_once "footer.php"; ?>
    
</body>
<script src="../Portfolio/css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>