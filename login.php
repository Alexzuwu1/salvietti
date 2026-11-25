<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro de Usuario Salvietti</title>
    <style>
        body {
            background-color: #1b563b;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        .navbar {
            background-color: #f5d328;
        }

        .navbar .nav-link {
            color: #1b563b !important;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar .nav-link:hover {
            color: #238b45 !important;
        }

        .decoracion {
            position: fixed;
            top: -180px;
            right: -150px;
            width: 480px;
            height: 480px;
            background-color: #f5d328;
            border-radius: 50%;
            z-index: 0;
        }

        .decoracion::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background-color: #238b45;
            border-radius: 50%;
            top: 170px;
            right: 160px;
        }


        .contenedor {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 15px;
        }


        .formulario {
            background-color: #ffffff;
            width: 100%;
            max-width: 480px;
            padding: 35px;
            border-radius: 22px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
        }

        .titulo {
            color: #176b3a;
            font-weight: bold;
            text-align: center;
        }

        .subtitulo {
            color: #777;
            text-align: center;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-label {
            color: #244b35;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            border-radius: 9px;
            padding: 11px;
            border: 1px solid #ced8ce;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #63b83f;
            box-shadow: 0 0 0 0.2rem rgba(99, 184, 63, 0.2);
        }


        .btn-registrar {
            background-color: #238b45;
            color: white;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-registrar:hover {
            background-color: #176b35;
            color: white;
        }

        .marca {
            color: #238b45;
            font-weight: bold;
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            letter-spacing: 2px;
        }

        @media (max-width: 576px) {
            .formulario {
                padding: 25px 20px;
            }

            .decoracion {
                width: 300px;
                height: 300px;
                top: -120px;
                right: -120px;
            }

            .decoracion::after {
                width: 190px;
                height: 190px;
                top: 110px;
                right: 100px;
            }
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
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                    <img src="https://salvietti.com.bo/wp-content/uploads/2020/12/logo-menu.png" alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link mx-3 text-dark" href="http://localhost/proyecto_salvietti/salvietti/index.php">Inicio</a>
                        <a class="nav-link mx-3 text-dark" href="#">Productos</a>
                        <a class="nav-link mx-3 text-dark" href="http://localhost/proyecto_salvietti/salvietti/login.php">Registro de Usuarios</a>
                        <a class="nav-link mx-3 text-dark" href="#">Inventario</a>
                    </div>
                </div>
            </div>
</nav>
</header>

    <div class="decoracion"></div>

    <div class="contenedor">

        <div class="formulario">

        <?php include "conexion_login.php"; ?>

            <h2 class="titulo">Registro de Usuario</h2>

            <form action="login.php" method="POST" autocomplete="off">

                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text"
                           name="nombre"
                           class="form-control"
                           placeholder="Ingrese su nombre"
                           autocomplete="off"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico:</label>
                    <input type="email"
                           name="correo"
                           class="form-control"
                           placeholder="ejemplo@gmail.com"
                           autocomplete="off"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña:</label>
                    <input type="password"
                           name="contrasena"
                           class="form-control"
                           placeholder="Ingrese su contraseña"
                           autocomplete="off"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono:</label>
                    <input type="tel"
                           name="telefono"
                           class="form-control"
                           placeholder="Ingrese su teléfono"
                           autocomplete="off"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Ciudad:</label>

                    <select name="ciudad" class="form-select" required>
                        <option value="" selected disabled>
                            Seleccione su ciudad
                        </option>
                        <option value="Beni">Beni</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="La Paz">La Paz</option>
                        <option value="Oruro">Oruro</option>
                        <option value="Pando">Pando</option>
                        <option value="Potosí">Potosí</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tarija">Tarija</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-registrar">
                        REGISTRAR
                    </button>
                </div>

            </form>

            <div class="marca">
                SALVIETTI
            </div>

        </div>

    </div>
    <br><footer class="footer">
        <div class="container">
            <div class="row">

                <section class="col-md-4 mb-4">
                    <h3>REDES SOCIALES</h3>
                    <a href="https://www.facebook.com/" target="_blank"
                        rel="noopener noreferrer">Facebook</a>
                    <a href="https://www.whatsapp.com/" target="_blank"
                        rel="noopener noreferrer">WhatsApp</a>
                </section>

                <section class="col-md-4 mb-4">
                    <h3>UBICACIÓN</h3>
                    <a href="https://maps.google.com/" target="_blank"
                        rel="noopener noreferrer">Google Maps</a>
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