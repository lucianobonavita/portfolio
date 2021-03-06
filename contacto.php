<?php
    $pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="contacto">

    <?php include_once "header.php"; ?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h1>Contacto</h1>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>
                        Te invito a que te contactes enviándome un mensaje o bien por
                        whatsapp.
                    </p>
                </div>

                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow" required="" />
                        </div>

                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" placeholder="correo" class="form-control shadow" required="" />
                        </div>

                        <div class="mb-3">
                            <input type="tel" id="txtTelefono" name="TxtTelefono" placeholder="Telefono" class="form-control shadow" required />
                        </div>

                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow" required=""></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-blanco">
                                ENVIAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:bonavitaluciano@gmail.com">info@nelsontarche.com.ar</a>
            </div>
        </div>
    </footer>

    <div class="warap pt-3 pb-3 px-3 bt-2">

        <a href="https://api.whatsapp.com/send?phone=541151010901" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>

    </div>

</body>

</html>