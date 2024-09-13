<?php
include_once "../modelo/modPersona.php";
if($method=="POST"){
    // Función para validar y sanitizar los datos
    function validarCampo($campo, $nombreCampo, $opcional = false) {
        if ($opcional && empty($campo)) {
            // Si el campo es opcional y está vacío, simplemente lo devuelve como una cadena vacía
            return '';
        }
        if (isset($campo) && !empty($campo)) {
            return htmlspecialchars($campo, ENT_QUOTES, 'UTF-8');
        } else {
            echo json_encode([
                "status" => 404,
                "mensaje" => "Falta el " . $nombreCampo
            ]);
            exit(); // Termina la ejecución del script
        }
    }
// Validar y sanitizar los datos
    $nombre = validarCampo($data->nombre, 'nombre');
    $apellido1 = validarCampo($data->apellido1, 'apellido1');
    $apellido2 = validarCampo($data->apellido2, 'apellido2', true); // Hacemos que sea opcional
    $fecha_nacimiento = validarCampo($data->fecha_nacimiento, 'fecha_nacimiento', true);
    $email = validarCampo($data->email, 'email');
    $telefono = validarCampo($data->telefono, 'telefono', true);
// Validar el formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => 400,
            "mensaje" => "El email no es válido"
        ]);
        exit(); // Termina la ejecución del script
    }

    $persona= new Persona();
    $persona->setNombre($nombre);
    $persona->setApellido1($apellido1);
    $persona->setApellido2($apellido2);
    $persona->fecha_nacimiento($fecha_nacimiento);
    $persona->setEmail($email);
    $persona->telefono($telefono);
    $persona->RegistrarPersona();
}elseif ($method=="GET") {
   if($data->operacion=="ListarPersona"){
       $persona = new Persona();
       $persona->ListarPersona();
   }
   elseif ($data->operacion=="BuscarPersona"){
       $persona = new Persona();
       $persona->setIdPersona($data->idPersona);
       $persona->BuscarPersona();
   }
}