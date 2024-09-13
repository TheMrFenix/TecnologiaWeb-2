<?php
include_once "../modelo/modUsuario.php";

$method = $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents("php://input"));

if ($method == "POST") {

    function validarCampo($campo, $nombreCampo) {
        if (isset($campo) && !empty($campo)) {
            return htmlspecialchars($campo, ENT_QUOTES, 'UTF-8');
        } else {
            echo json_encode([
                "status" => 404,
                "mensaje" => "Falta el " . $nombreCampo
            ]);
            exit();
        }
    }

    // Validar y sanitizar los datos
    $nick = validarCampo($data->nick, 'nick');
    $contraseña = validarCampo($data->contraseña, 'contraseña');

    $usuario = new Usuario();
    $usuario->setNick($nick);
    $usuario->setContraseña($contraseña);

    $resultado = $usuario->login();

    if ($resultado) {
        echo json_encode([
            "status" => 200,
            "mensaje" => "Login exitoso",
            "data" => $resultado
        ]);
    } else {
        echo json_encode([
            "status" => 401,
            "mensaje" => "Credenciales inválidas"
        ]);
    }

} else {
    echo json_encode([
        "status" => 405,
        "mensaje" => "Método no permitido"
    ]);
}else {
    if($data->operacion=="LogOut"){
        $usuario = new Usuario();
        $usuario->Logout();
    }
}
?>
