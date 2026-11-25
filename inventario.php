<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inventario</title>

    <style>
        * {
    box-sizing: border-box;
}

html,
body {
    margin: 0;
    padding: 0;
    width: 100%;
}

body {
    background-color: #1b563b;
    color: white;
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

.contenedor {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 40px 15px;
}

.inventario {
    width: 100%;
    max-width: 750px;
    padding: 35px;
    margin: 0 auto;
}

.titulo {
    text-align: center;
    margin-bottom: 30px;
    color: #f5d328;
    font-weight: bold;
}

.inventario .form-control,
.inventario .form-select {
    width: 100%;
    max-width: 100%;
    border: 2px solid #f5d328;
    border-radius: 6px;
}

.inventario .form-label {
    display: block;
    margin-bottom: 8px;
    color: white;
    font-weight: bold;
}

.inventario .row {
    align-items: center;
}

.inventario .form-check {
    display: flex;
    align-items: center;
    gap: 8px;
    padding-left: 1.5em;
}

.inventario .form-check-input {
    border: 2px solid #f5d328;
}

.inventario .form-check-input:checked {
    background-color: #f5d328;
    border-color: #f5d328;
}

.inventario .form-check-label {
    color: white;
}

.inventario .row .form-select {
    width: 100%;
}

.inventario .btn-registrar {
    width: 100%;
    background-color: #f5d328;
    color: #1b563b;
    font-weight: bold;
    border: 2px solid #f5d328;
    padding: 12px;
    border-radius: 6px;
    transition: 0.3s;
}

.inventario .btn-registrar:hover {
    background-color: #238b45;
    border-color: #238b45;
    color: white;
}

.marca {
    text-align: center;
    margin-top: 25px;
    color: #f5d328;
    font-weight: bold;
    font-size: 20px;
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
    transition: 0.3s;
}

.footer a:hover {
    color: #238b45;
}

.footer p {
    color: #1b563b;
}

@media (max-width: 576px) {

    .inventario {
        padding: 20px 15px;
    }

    .contenedor {
        padding: 20px 10px;
    }

    .inventario .row {
        row-gap: 10px;
    }

}
    </style>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://salvietti.com.bo/wp-content/uploads/2020/12/logo-menu.png" alt="Logo Salvietti">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link mx-3" href="http://localhost/proyecto_salvietti/salvietti/index.php">Inicio</a>
                    <a class="nav-link mx-3" href="http://localhost/proyecto_salvietti/salvietti/productos.php">Productos</a>
                    <a class="nav-link mx-3" href="http://localhost/proyecto_salvietti/salvietti/login.php">Registro de Usuarios</a>
                    <a class="nav-link mx-3" href="http://localhost/proyecto_salvietti/salvietti/inventario.php">Inventario</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="decoracion"></div>

<div class="contenedor">
    <div class="inventario">

        <?php include "conexion_inventario.php"; ?>

        <h2 class="titulo">Inventario</h2>

        <form action="inventario.php" method="POST" autocomplete="off">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingrese el teléfono" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="ejemplo@gmail.com" required>
            </div>

            <div class="mb-4">
                <label for="ciudad" class="form-label">Departamento:</label>
                <select name="ciudad" id="ciudad" class="form-select" required>
                    <option value="" selected disabled>Seleccione el departamento</option>
                    <option value="Beni">Beni</option>
                    <option value="Chuquisaca">Chuquisaca</option>
                    <option value="Cochabamba">Cochabamba</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Oruro">Oruro</option>
                    <option value="Pando">Pando</option>
                    <option value="Potosí">Potosí</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Tarija">Tarija</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Envío:</label>
                <div class="d-flex align-items-center gap-3">
                    <div class="form-check">
                        <input type="radio" name="envio" value="Si" id="si" class="form-check-input" required>
                        <label for="si" class="form-check-label">Sí</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="envio" value="No" id="no" class="form-check-input" required>
                        <label for="no" class="form-check-label">No</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección de Domicilio:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese su dirección" required>
            </div>

            <div class="mb-4">
                <label for="envase" class="form-label">Envase del Producto:</label>
                <select name="envase" id="envase" class="form-select" required>
                    <option value="" selected disabled>Seleccione el envase del producto</option>
                    <option value="Botella">Botella</option>
                    <option value="Lata">Lata</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="sabor" class="form-label">Sabor del Producto:</label>
                <select name="sabor" id="sabor" class="form-select" required>
                    <option value="" selected disabled>Seleccione el sabor</option>
                    <option value="Papaya">Papaya</option>
                    <option value="Naranja">Naranja</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Productos:</label>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti 3L" id="salvietti3l">
                            <label class="form-check-label" for="salvietti3l">Salvietti 3L</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti 3L]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti 2L" id="salvietti2l">
                            <label class="form-check-label" for="salvietti2l">Salvietti 2L</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti 2L]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti 1L" id="salvietti1l">
                            <label class="form-check-label" for="salvietti1l">Salvietti 1L</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti 1L]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti 500 ml" id="salvietti500ml">
                            <label class="form-check-label" for="salvietti500ml">Salvietti 500 ml</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti 500 ml]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti 250 ml" id="salvietti250ml">
                            <label class="form-check-label" for="salvietti250ml">Salvietti 250 ml</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti 250 ml]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="producto[]" value="Salvietti Lata 355 ml" id="salviettiLata355ml">
                            <label class="form-check-label" for="salviettiLata355ml">Salvietti Lata 355 ml</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select name="cantidad[Salvietti Lata 355 ml]" class="form-select">
                            <option value="" selected disabled>Seleccione cantidad</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-registrar">REGISTRAR</button>
            </div>

        </form>

        <div class="marca">SALVIETTI</div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <section class="col-md-4 mb-4">
                <h3>REDES SOCIALES</h3>
                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">Facebook</a>
                <a href="https://www.whatsapp.com/" target="_blank" rel="noopener noreferrer">WhatsApp</a>
            </section>

            <section class="col-md-4 mb-4">
                <h3>UBICACIÓN</h3>
                <a href="https://maps.google.com/" target="_blank" rel="noopener noreferrer">Google Maps</a>
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
