<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Salvietti</title>

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

        .texto-principal {
            padding: 70px;
            color: white;
        }

        .texto-principal h1 {
            font-weight: bold;
            margin-bottom: 25px;
        }

        .texto-principal p {
            font-size: 18px;
            line-height: 1.7;
        }

        .contenedor-imagen {
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            overflow: hidden;
            line-height: 0;
        }

        .imagen-principal {
            width: 100%;
            max-width: 100%;
            height: auto;
            margin: 0;
            padding: 0;
            object-fit: contain;
            display: block;
        }

        @media (max-width: 768px) {
            .texto-principal {
                padding: 35px;
            }

            .contenedor-imagen {
                width: 100%;
            }

            .imagen-principal {
                width: 100%;
                height: auto;
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
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
          <img src="https://salvietti.com.bo/wp-content/uploads/2020/12/logo-menu.png" alt="Logo Salvietti">
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


  <main class="container-fluid px-0">
    <div class="row g-0 align-items-start">

      <div class="col-md-6">
        <div class="texto-principal">

          <br><br> <h1>BIENVENIDOS A SALVIETTI</h1> <br><br>

          <p>
            Somos una empresa dedicada a ofrecer productos
            de calidad para nuestros clientes.
          </p>

          <p>
            En Salvietti trabajamos para brindar variedad,
            calidad y satisfacción a todos nuestros consumidores.
          </p>

          <p>
            Conoce más sobre nuestra empresa y descubre
            todo lo que tenemos para ofrecerte.
          </p>
          <p>
            Bebida 100% refrescante para nuestro clientes.
          </p>

        </div>
      </div>

      <div class="col-md-6 contenedor-imagen">
        <img src="https://salvietti.com.bo/wp-content/uploads/2020/12/home-salvietti.png"
             class="img-fluid imagen-principal"
             alt="Imagen de Salvietti">
      </div>

    </div>
  </main>
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