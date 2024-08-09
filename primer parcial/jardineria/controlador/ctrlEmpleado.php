<?php
include_once "../modelo/modEmpleado.php";
$oficina=new Oficina();
$nombre=htmlspecialchars($_POST['nombre']);
$apellido1=htmlspecialchars($_POST['apellido1']);
$apellido2=htmlspecialchars($_POST['apellido2']);
$extension=htmlspecialchars($_POST['extension']);
$email=htmlspecialchars($_POST['email']);
$codigo_oficina=htmlspecialchars($_POST['codigo_oficina']);
$puesto=htmlspecialchars($_POST['puesto']);
$oficina->setNombre($nombre);
$oficina->setApellido1($apellido1);
$oficina->setApellido2($apellido2);
$oficina->setExtension($extension);
$oficina->setEmail($email);
$oficina->setCodigo_oficina($codigo_oficina);
$oficina->setPuesto($puesto);
$oficina->registrarEmpleado();