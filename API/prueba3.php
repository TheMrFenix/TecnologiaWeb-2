<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    die();
}
$data=json_decode(
    file_get_contents("php://input",true)
);
$email=$data->email;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El correo es válido.";
} else {
    echo "El correo no es válido.";
}
?>