<?php
//print_r($_POST);
include_once "persona.php";
$persona=new persona();
$nombres=htmlspecialchars($_POST["nombres"]);
$papellido=htmlspecialchars($_POST["primerApellido"]);
$sapelldio=htmlspecialchars($_POST["segundoApellido"]);
$direccion=htmlspecialchars($_POST["direccion"]);
$fechanac=htmlspecialchars($_POST["fechaNacimiento"]);

$persona->setNombres($nombres);
$persona->setPrimerApellido($papellido);
$persona->setSegundoApellido($sapelldio);
$persona->setFechaNacimiento($fechanac);
$persona->setDireccion($direccion);

$persona->toString();

echo "Nombres:". $persona->getNombres()."<br>";
echo "Primer apellido:". $persona->getPrimerApellido()."<br>";
echo "Segundo apellido:". $persona->getSegundoApellido()."<br>";
echo "Direccion:". $persona->getDireccion()."<br>";
echo "Fecha de nacimiento:". $persona->getFechaNacimiento()."<br>";