<?php
$conexion = new mysqli("localhost", "root", "", "salvietti");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];
    $envio = $_POST['envio'];
    $direccion = $_POST['direccion'];
    $envase = $_POST['envase'];
    $sabor = $_POST['sabor'];
    $producto = isset($_POST['producto']) ? implode(", ", $_POST['producto']) : "";
    $cantidad = isset($_POST['cantidad']) ? json_encode($_POST['cantidad']) : "";

    $sql = "INSERT INTO Usuarios2 (nombre, telefono, correo, ciudad, envio, direccion, envase, sabor, producto, cantidad)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssssss", $nombre, $telefono, $correo, $ciudad, $envio, $direccion, $envase, $sabor, $producto, $cantidad);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Registro guardado con éxito.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

$conexion->close();
?>