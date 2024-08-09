<?php
include_once "../modelo/modEmpleado.php";
$empleado=new Empleado();
$nombre=htmlspecialchars($_POST['nombre']);
$apellido1=htmlspecialchars($_POST['apellido1']);
$apellido2=htmlspecialchars($_POST['apellido2']);
$extension=htmlspecialchars($_POST['extension']);
$email=htmlspecialchars($_POST['email']);
$puesto=htmlspecialchars($_POST['puesto']);
$empleado->setNombre($nombre);
$empleado->setApellido1($apellido1);
$empleado->setApellido2($apellido2);
$empleado->setExtension($extension);
$empleado->setEmail($email);
$empleado->setPuesto($puesto);
$empleado->registrarEmpleado();