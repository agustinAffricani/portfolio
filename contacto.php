<?php
    $pg = "contacto";

    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMensaje"];
    

        // Varios destinatarios
        $para  = "agustin.affricani@gmail.com";

        //mensaje
        $cuerpo = "
        Nombre = $nombre <br>
        Correo = $correo <br>
        Telefono = $telefono <br>
        Mensaje = $mensaje";

        // título
        $titulo = "Mensaje desde tu pagina Web";

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        $cabeceras .= 'To: agustin.affricani@gmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@agustin.com.ar' . "\r\n";

        // Enviarlo
        mail($para, $titulo, $cuerpo, $cabeceras);
        header("location: mensaje-enviado.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <?php
        include_once "header.php";
    ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviandome un mensaje o bien por Whatsapp.</p>
               <!-- <img src="images/qr-wa.png" alt="QR Whatsapp" srcset="" class="qr-wa img-fluid img-thumbnail mb-3">-->
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí el mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3 float-end float-sm-start">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4 mb-3">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
        include_once "footer.php";
    ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>