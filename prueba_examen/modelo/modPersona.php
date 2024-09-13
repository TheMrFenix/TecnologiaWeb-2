<?php
include_once "conexion/conexionBase.php";
class Persona
{
    private $idPersona;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $fecha_nacimiento;
    private $email;
    private $telefono;
    private $con;

    function __construct()
    {
        $this->idPersona = null;
        $this->nombres = "";
        $this->apellido1 = "";
        $this->apellido2 = "";
        $this->fecha_nacimiento = "";
        $this->email = "";
        $this->telefono = "";
        $this->con = new ConexionBase();
    }
    public function setIdPersona($v)
    {
        $this->idPersona = $v;
    }
    public function getIdPersona()
    {
        return $this->idPersona;
    }
    public function setNombre($v)
    {
        $this->nombre = $v;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setApellido1($v)
    {
        $this->apellido1 = $v;
    }
    public function getApellido1()
    {
        return $this->apellido1;
    }
    public function setApellido2($v)
    {
        $this->apellido2 = $v;
    }
    public function getApellido2()
    {
        return $this->apellido2;
    }
    public function setFecha_nacimiento($v)
    {
        $this->fecha_nacimiento=$v;
    }
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    public function setEmail($v)
    {
        $this->email=$v;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setTelefono($v)
    {
        $this->telefono=$v;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function registrarPersona()
    {
        $this->con->createConnection();
        $sql="insert into persona (nombres,apellido1,apellido2,fecha_nacimiento,email,telefono) values (
        '$this->nombres', '$this->apellido1','$this->apellido2','$this->fecha_nacimiento','$this->email','$this->telefono')";
        $this->con->executeQuery($sql);
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
        $sql = "select * from persona where idpersona='$this->idPersona'";
        $resp = $this->con->executeQuery($sql);
        $data= mysqli_fetch_assoc($resp);
        echo json_encode($data);
    }
}
