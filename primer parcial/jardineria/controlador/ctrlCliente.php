<?php
include_once "../modelo/modCliente.php";
$cliente=new Cliente();
$nombre_cliente=htmlspecialchars($_POST['nombre_cliente']);
$nombre_contacto=htmlspecialchars($_POST['nombre_contacto']);
$apellido_contacto=htmlspecialchars($_POST['apellido_contacto']);
$telefono=htmlspecialchars($_POST['telefono']);
$fax=htmlspecialchars($_POST['fax']);
$linea_direccion1=htmlspecialchars($_POST['linea_direccion1']);
$linea_direccion2=htmlspecialchars($_POST['linea_direccion2']);
$ciudad=htmlspecialchars($_POST['ciudad']);
$region=htmlspecialchars($_POST['region']);
$pais=htmlspecialchars($_POST['pais']);
$codigo_postal=htmlspecialchars($_POST['codigo_postal']);
$limite_credito=htmlspecialchars($_POST['limite_credito']);
$cliente->setNombre_cliente($nombre_cliente);
$cliente->setNombre_contacto($nombre_contacto);
$cliente->setApellido_contacto($apellido_contacto);
$cliente->setTelefono($telefono);
$cliente->setFax($fax);
$cliente->setLinea_direccion1($linea_direccion1);
$cliente->setLinea_direccion2($linea_direccion2);
$cliente->setCiudad($ciudad);
$cliente->setRegion($region);
$cliente->setPais($pais);
$cliente->setCodigo_postal($codigo_postal);
$cliente->setLimite_credito($limite_credito);
$cliente->registrarCliente();

?>