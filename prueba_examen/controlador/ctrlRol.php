<?php
include_once "../modelo/modRol.php";
if($method=="POST"){
    $nombre_rol=$data->nombre_rol;
    $rol= new Rol;
    $rol->setNombre_rol($nombre_rol);
    $rol->registrarRol();
}elseif ($method=="GET") {
    if($data->operacion=="ListarRol"){
        $rol = new Rol();
        $rol->ListarRol();
    }
}