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
    <link rel="stylesheet" href="css/estilos.css"/>
</head>

<body id="contacto">
    
    <header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                         <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a class="btn btn-rojo">Descargar mi cv <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>                                         
    </header>

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
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
                                class="form-control shadow" required="" />
                        </div>

                        <div class="mb-3">
                            <input type="email" id="txtCorreo" name="txtCorreo" placeholder="correo"
                                class="form-control shadow" required="" />
                        </div>

                        <div class="mb-3">
                            <input type="tel" id="txtTelefono" name="TxtTelefono" placeholder="Telefono"
                                class="form-control shadow" required />
                        </div>

                        <div class="mb-3">
                            <textarea name="txtArea" id="TxtArea" placeholder="Escribe aqui tu mensaje..."
                                class="form-control shadow"></textarea>
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

        <div class="row mt-5">
            <div class="col-3">
                
            </div>
            <div class="col-12 col-sm-3">
               Sponsor <a href="https://depcsuite.com" target="_blank" title="DePCSuite">DePcSuite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:bonavitaluciano@gmail.com">bonavitaluciano@gmail.com</a>
            </div>
    
        </div>
    </footer>
</body>

</html>