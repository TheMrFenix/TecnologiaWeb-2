<?php
include_once "../modelo/modUsuario.php";
//Llenado de los datos del formulario html.
$usuario= new Usuario();
    $usuario->setNick($nick);
    $usuario->setContraseña($Contraseña);
    $usuario->setFecha_creacion($fecha_creacion);
    $usuario->setEstado($estado);
    $usuario->RegistrarUsuario();
?>