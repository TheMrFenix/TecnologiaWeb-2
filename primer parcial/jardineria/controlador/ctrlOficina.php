<?php
include_once "../modelo/modOficina.php";
$oficina=new Oficina();
$ciudad=htmlspecialchars($_POST['ciudad']);
$pais=htmlspecialchars($_POST['pais']);
$region=htmlspecialchars($_POST['region']);
$codigoPostal=htmlspecialchars($_POST['codigoPostal']);
$telefono=htmlspecialchars($_POST['telefono']);
$lineaDireccion1=htmlspecialchars($_POST['lineaDireccion1']);
$lineaDireccion2=htmlspecialchars($_POST['lineaDireccion2']);
$oficina->setCiudad($ciudad);
$oficina->setPais($pais);
$oficina->setRegion($region);
$oficina->setCodigoPostal($codigoPostal);
$oficina->setTelefono($telefono);
$oficina->setLineaDireccion1($lineaDireccion1);
$oficina->setLineaDireccion2($lineaDireccion2);
$oficina->registrarOficina();