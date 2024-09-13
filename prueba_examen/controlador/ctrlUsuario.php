<?php
include_once "../modelo/modUsuario.php";
if($method=="POST" and isset($data->operacion) and $data->operacion=="login"){
    $nick=$data->nick;
    $contraseña=$data->contraseña;
    $usuario = new Usuario();
    $usuario->setNick($nick);
    $usuario->setContraseña($contraseña);
    $usuario->login();
} elseif ($method=="POST" and isset($data->operacion) and $data->operacion=="logout"){
    $nick=$data->nick;
    $contraseña=$data->contraseña;
    $usuario = new Usuario();
    $usuario->setNick($nick);
    $usuario->setContraseña($contraseña);
    $usuario->logout();
}
if ($method=="POST") {
    $nick=$data->nick;
    $contraseña=$data->contraseña;
    $usuario= new Usuario();
    $usuario->setNick($nick);
    $usuario->setContraseña($contraseña);
    $usuario->registrarUsuario();    
}elseif ($method=="GET") {
    if($data->operacion=="ListarUsuario"){
        $usuario = new Usuario();
        $usuario->ListarUsuario();
    }
}
?>