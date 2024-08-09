<?php include_once "indexJardineria.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Oficina</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>Registrar Oficina</h2>
    <form action="../controlador/ctrlOficina.php" method="post">
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad">
        <br>
        <label for="pais">Pais:</label>
        <input type="text" name="pais" id="pais">
        <br>
        <label for="region">Region:</label>
        <input type="text" name="region" id="region">
        <br>
        <label for="codigoPostal">Codigo Postal:</label>
        <input type="text" name="codigoPostal" id="codigoPostal">
        <br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono">
        <br>
        <label for="lineaDireccion1">Linea Direccion 1:</label>
        <input type="text" name="lineaDireccion1" id="lineaDireccion1">
        <br>
        <label for="lineaDireccion2">Linea Direccion 2:</label>
        <input type="text" name="lineaDireccion2" id="lineaDireccion2">
        <br>
        <button type="submit">Registrar</button>
    </form>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>