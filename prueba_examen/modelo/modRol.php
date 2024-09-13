<?php
include_once "conexion/conexionBase.php";
class Rol{
    private $idRol;
    private $nombre_rol;
    private $con;

    public function __construct(){
        $this->idRol=null;
        $this->nombre_rol="";
        $this->con=new ConexionBase();
    }
    

    public function getIdRol()
    {
        return $this->idRol;
    }

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    public function getNombre_rol()
    {
        return $this->nombre_rol;
    }


    public function setNombre_rol($nombre_rol)
    {
        $this->nombre_rol = $nombre_rol;
    }

    public function registrarRol(){
        $this->con->createConnection();
        $sql="insert into rol (nombre_rol)
        values('$this->nombre_rol')";
        $this->con->executeQuery($sql);
        $_SESSION['mensaje']="Registro exitoso";
    } 
    public function ListarRol()
    {
        $this->con->createConnection();
        $sql = "select * from rol";
        $resp = $this->con->executeQuery($sql);
        $data=array();
        while ($row = mysqli_fetch_assoc($resp)) {
            $data[]=$row;
        }
        echo json_encode($data);
    }
}