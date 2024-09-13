<?php
include_once "../modelo/modCuenta.php";

$nick=htmlspecialchars($_POST['nick']);
$pass=htmlspecialchars($_POST['pass']);
$idCliente=htmlspecialchars($_POST['idCliente']);
$Cuenta= new modCuenta;
$Cuenta->setNick($nick);
$Cuenta->setPass($pass);
$Cuenta->getCliente()->setIdCliente($idCliente);
$Cuenta->registrarCuenta();