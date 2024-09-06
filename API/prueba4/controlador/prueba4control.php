<?php
include_once "../modelo/prueba4mod.php";
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
    $primerApellido = validarCampo($data->primerApellido, 'priemrApellido');
    $segundoApellido = validarCampo($data->segundoApellido, 'segundoApellido', true); // Hacemos que sea opcional
    $email = validarCampo($data->email, 'email');
// Validar el formato del email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => 400,
            "mensaje" => "El email no es válido"
        ]);
        exit(); // Termina la ejecución del script
    }
// Sanitizar dirección, asumiendo que siempre es requerida

    $Persona= new Persona();
    $Persona->setNombre($nombre);
    $Persona->setPrimerApellido($primerApellido);
    $Persona->setSegundoApellido($segundoApellido);
    $Persona->setEmail($email);
    $Persona->RegistrarPersona();
}
/*elseif ($method=="GET") {
   if($data->operacion=="ListarPersona"){
       $Persona = new Persona();
       $Persona->ListarPersona();
   }
   elseif ($data->operacion=="BuscarPersona"){
       $Persona = new Persona();
       $Perosna->setIdPersona($data->idPersona);
       $Persona->BuscarPersona();
   }
}*/