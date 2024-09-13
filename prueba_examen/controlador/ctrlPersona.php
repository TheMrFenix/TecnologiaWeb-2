<?php
include_once "../modelo/modPersona.php";
if($method=="POST"){
    $nombre=$data->nombre;
    $apellido1=$data->apellido1;
    $apellido2=$data->apellido2;
    $fecha_nacimiento=$data->fecha_nacimiento;
    $email=$data->email;
    $telefono=$data->telefono;
    $persona= new Persona();
    $persona->setNombre($nombre);
    $persona->setApellido1($apellido1);
    $persona->setApellido2($apellido2);
    $persona->setFecha_nacimiento($fecha_nacimiento);
    $persona->setEmail($email);
    $persona->setTelefono($telefono);
    $persona->RegistrarPersona();
}elseif ($method=="GET") {
   if($data->operacion=="ListarPersona"){
       $persona = new Persona();
       $persona->ListarPersona();
   }
}