<?php include_once "indexJardineria.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<h2>Registrar Empleado</h2>
    <body>
        <form action="../controlador/ctrlEmpleado.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" name="apellido1" id="apellido1">
            <br>
            <label for="apellido2">Segundo Apellido:</label>
            <input type="text" name="apellido2" id="apellido2">
            <br>
            <label for="extension">Extension:</label>
            <input type="text" name="extension" id="extension">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" id="puesto">
            <br>
            <button type="submit">Registrar</button>
        </form>
        <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>