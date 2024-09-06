<?php
session_start();

include_once "conexion/conexionBase.php";

class Persona
{
    private $idpersona;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $email;
    private $con;

    public function __construct()
    {
        $this->idpersona = null;
        $this->nombre = "";
        $this->primerApellido = "";
        $this->segundoApellido = "";
        $this->email = "";
        $this->con = new ConexionBase();
    }

    /**
     * @return null
     */
    public function getIdPersona()
    {
        return $this->idpersona;
    }

    /**
     * @param null $idpersona
     */
    public function setIdPersona($idpersona)
    {
        $this->idpersona = $idpersona;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getPrimerApellido(): string
    {
        return $this->primerApellido;
    }

    public function setPrimerApellido(string $primerApellido)
    {
        $this->primerApellido = $primerApellido;
    }

    public function getSegundoApellido(): string
    {
        return $this->segundoApellido;
    }

    public function setSegundoApellido(string $segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function RegistrarPersona()
    {
        $resp = $this->validarEmail($this->email);
        if ($resp) {
            echo json_encode(array("mensaje" => "El email ya existe"));
        } else {
            $this->con->createConnection();
            $sql = "insert into persona(nombre, primerApellido, segundoApellido, email)
            values('$this->nombre', '$this->primerApellido', '$this->segundoApellido', '$this->email')";
            $this->con->executeQuery($sql);
            echo json_encode(array("mensaje" => "Persona Registrado"));
        }

    }

    private function validarEmail($email)
    {
        $this->con->createConnection();
        $sql = "select email from persona where email='$email'";
        $resp = $this->con->executeQuery($sql);
        $datos = $this->con->getCountAffectedRows($resp);
        if ($datos == true) {
            return true;
        } else {
            return false;
        }
    }

    public function ListarPersona()
    {
        $this->con->createConnection();
        $sql = "select * from persona";
        $resp = $this->con->executeQuery($sql);
        $data=array();
        while ($row = mysqli_fetch_assoc($resp)) {
            $data[]=$row;
        }
        echo json_encode($data);
    }
public function BuscarPersona()
{
    $this->con->createConnection();
    $sql = "select * from persona where idpersona='$this->idpersona'";
    $resp = $this->con->executeQuery($sql);
    $data= mysqli_fetch_assoc($resp);
    echo json_encode($data);
}

}