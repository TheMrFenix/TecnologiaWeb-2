<?php include_once "indexJardineria.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>Registrar Cliente</h2>
    <form action="../controlador/ctrlCliente.php" method="post">
        <label for="nombre_cliente">Nombre:</label>
        <input type="text" name="nombre_cliente" id="nombre_cliente">
        <br>
        <label for="nombre_contacto">Nombre de Contacto:</label>
        <input type="text" name="nombre_contacto" id="nombre_contacto">
        <br>
        <label for="apellido_contacto">Apellido de Contacto:</label>
        <input type="text" name="apellido_contacto" id="apellido_contacto">
        <br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono">
        <br>
        <label for="fax">Fax:</label>
        <input type="text" name="fax" id="fax">
        <br>
        <label for="linea_direccion1">Linea Direccion 1:</label>
        <input type="text" name="linea_direccion1" id="linea_direccion1">
        <br>
        <label for="linea_direccion2">Linea Direccion 2:</label>
        <input type="text" name="linea_direccion2" id="linea_direccion2">
        <br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad">
        <br>
        <label for="region">Region:</label>
        <input type="text" name="region" id="region">
        <br>
        <label for="pais">Pais:</label>
        <input type="text" name="pais" id="pais">
        <br>
        <label for="codigo_postal">Codigo Postal:</label>
        <input type="text" name="codigo_postal" id="codigo_postal">
        <br>
        <label for="codigo_empleado_rep_ventas">Codigo de Empleado de Ventas:</label>
        <input type="number" name="codigo_empleado_rep_ventas" id="codigo_empleado_rep_ventas">
        <br>
        <label for="limite_credito">Limite Credito:</label>
        <input type="number" name="limite_credito" id="limite_credito">
        <br>
        <button type="submit">Registrar</button>
    </form>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>