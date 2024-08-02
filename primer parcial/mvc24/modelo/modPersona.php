<?php

include_once "conexion/conexionBase.php";
class Persona
{
    private $idPersona;
    private $nombres;
    private $papellido;
    private $sapellido;
    private $con;

    function __construct(){
        $this->idPersona=null;
        $this->nombres="";
        $this->papellido="";
        $this->sapellido="";
        $this->con=new conexionBase();
    }
    public function setIdPersona($v){
        $this->idPersona=$v;
    }
    public function getIdPersona(){
        return $this->idPersona;
    }
    public function setNombres($v){
        $this->nombres=$v;
    }
    public function getNombres(){
        return $this->nombres;
    }
    public function setPapellido($v){
        $this->papellido=$v;
    }
    public function getPapellido(){
        $this->papellido;
    }
    public function setSapellido($v){
        $this->sapellido=$v;
    }
    public function getSapellido(){
        $this->sapellido;
    }
    public function registrarPersona(){
        $this->con->createConnection();
        $sql="insert into persona (nombres,papellido,sapellido) values ('$this->nombres','$this->papellido','$this->sapellido')";
        $this->con->executeQuery($sql);
    }
}