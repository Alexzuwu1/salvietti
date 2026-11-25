<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Productos Salvietti</title>

    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            background-color: #1b563b;
            overflow-x: hidden;
        }

        .navbar {
            background-color: #f5d328;
            margin: 0;
        }

        .navbar img {
            height: 55px;
            width: auto;
        }

        .navbar .nav-link {
            color: #1b563b !important;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar .nav-link:hover {
            color: #238b45 !important;
        }

        main {
            margin: 0;
            padding: 0;
        }

        .card {
            width: 16rem !important;
            background-color: #1b563b;
            border: none;
            margin: 20px auto;
            color: white;
        }

        .card-img-top {
            width: 85%;
            height: 230px;
            object-fit: contain;
            margin: 15px auto 0;
            background-color: transparent;
            border: none;
        }

        .card-title {
            color: #f5d328;
            font-weight: bold;
        }

        .card-text {
            color: white;
        }

        .card .btn {
            background-color: #f5d328;
            color: #1b563b;
            border: none;
            font-weight: bold;
        }

        .card .btn:hover {
            background-color: #238b45;
            color: white;
        }

        .footer {
            background-color: #f5d328;
            color: #1b563b;
            padding: 30px 0;
        }

        .footer h3 {
            color: #1b563b;
            font-weight: bold;
        }

        .footer a {
            color: #1b563b;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .footer a:hover {
            color: #238b45;
        }

    </style>
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container-fluid">

                <a class="navbar-brand" href="#"></a>

                <img src="https://salvietti.com.bo/wp-content/uploads/2020/12/logo-menu.png"
                alt="Logo Salvietti">

                <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse justify-content-center"
                id="navbarNavAltMarkup">

                    <div class="navbar-nav">

                        <a class="nav-link mx-3 text-dark"
                        href="http://localhost/proyecto_salvietti/salvietti/index.php">
                            Inicio
                        </a>

                        <a class="nav-link mx-3 text-dark"
                        href="http://localhost/proyecto_salvietti/salvietti/productos.php">
                            Productos
                        </a>

                        <a class="nav-link mx-3 text-dark"
                        href="http://localhost/proyecto_salvietti/salvietti/login.php">
                            Registro de Usuarios
                        </a>

                        <a class="nav-link mx-3 text-dark"
                        href="http://localhost/proyecto_salvietti/salvietti/inventario.php">
                            Inventario
                        </a>

                    </div>

                </div>

            </div>

        </nav>

    </header>

    <main>

        <div class="container">

            <div class="row align-items-start">

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti1.png"
                        class="card-img-top" alt="Salvietti 3L">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 3L</h5>
                            <p class="card-text">La presentacion ideal para la familia completa.</p>
                            <p class="card-text">Precio Bs.16</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti2.png"
                        class="card-img-top" alt="Salvietti 2L">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 2L</h5>
                            <p class="card-text">Para tus compañias y comidas mas cercanas.</p>
                            <p class="card-text">Precio Bs.13</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti3.png"
                        class="card-img-top" alt="Salvietti 1L">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 1L</h5>
                            <p class="card-text">Una bebida nunca puede faltar en tu mesa. </p>
                            <p class="card-text">Precio Bs.10</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row align-items-center">

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti4.png"
                        class="card-img-top" alt="Salvietti 500 ml">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 500 ml</h5>
                            <p class="card-text">Perfecto para refrescarte la vida.</p>
                            <p class="card-text">Precio Bs.7</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti5.png"
                        class="card-img-top" alt="Salvietti 250 ml">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 250 ml</h5>
                            <p class="card-text">Y porque no un pequeño relajo refrescante.</p>
                            <p class="card-text">Precio Bs.5</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti6.png"
                        class="card-img-top" alt="Salvietti Lata 355ml">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti Lata 355ml</h5>
                            <p class="card-text">Genial, ideal para dias calurosos.</p>
                            <p class="card-text">Precio Bs.7</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row align-items-end">

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti7.png"
                        class="card-img-top" alt="Salvietti 2L Naranja">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 2L Naranja</h5>
                            <p class="card-text">Endulza tu vida con nuestra variedad de sabores.</p>
                            <p class="card-text">Precio Bs.13</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti8.png"
                        class="card-img-top" alt="Salvietti 250 ml Naranja">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti 250 ml</h5>
                            <p class="card-text">Dulce como una naranja y tan fresca.</p>
                            <p class="card-text">Precio Bs.5</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">

                        <img src="imagenes/salvietti9.png"
                        class="card-img-top" alt="Salvietti Lata Naranja 355ml">

                        <div class="card-body">

                            <h5 class="card-title">Salvietti Lata Naranja 355ml</h5>
                            <p class="card-text">No puede falta una fria y deliciosa bebida naranjosa.</p>
                            <p class="card-text">Precio Bs.7</p>
                            <a href="#" class="btn btn-primary">Ver mas...</a>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <br>

    <footer class="footer">

        <div class="container">

            <div class="row">

                <section class="col-md-4 mb-4">

                    <h3>REDES SOCIALES</h3>

                    <a href="https://www.facebook.com/"
                    target="_blank" rel="noopener noreferrer">
                        Facebook
                    </a>

                    <a href="https://www.whatsapp.com/"
                    target="_blank" rel="noopener noreferrer">
                        WhatsApp
                    </a>

                </section>


                <section class="col-md-4 mb-4">

                    <h3>UBICACIÓN</h3>

                    <a href="https://maps.google.com/"
                    target="_blank" rel="noopener noreferrer">
                        Google Maps
                    </a>

                    <p>Dirección</p>

                </section>


                <section class="col-md-4 mb-4">

                    <h3>DESARROLLADO POR</h3>

                    <p>Kevin Alexander Urquizo Chijo</p>

                    <p>Estudiante de Sistemas Informaticos</p>

                    <p>Instituto Cca Sucre</p>

                </section>

            </div>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>