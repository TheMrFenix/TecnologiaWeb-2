<?php
include_once "conexion/conexionBase.php";

class Empleado{
    private $codigo_empleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $extension;
    private $email;
    private $codigo_oficina;
    private $codigo_jefe;
    private $puesto;
    private $con;
    function __construct() {
        $this->codigo_empleado=null;
        $this->nombre="";
        $this->apellido1="";
        $this->apellido2="";
        $this->extension="";
        $this->email="";
        $this->codigo_oficina="";
        $this->codigo_jefe="";
        $this->puesto="";
        $this->con=new connectionBase();
    }
        public function setCodigo_empleado($v){
            $this->codigo_empleado=$v;
        }
        public function getCodigo_empleado(){
            return $this->codigo_empleado;
        }
        public function setNombre($v){
            $this->nombre=$v;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellido1($v){
            $this->apellido1=$v;
        }
        public function getApellido1(){
            return $this->apellido1;
        }
        public function setApellido2($v){
            $this->apellido2=$v;
        }
        public function getApellido2(){
            return $this->apellido2;
        }
        public function setExtension($v){
            $this->extension=$v;
        }
        public function getExtension(){
            return $this->extension;
        }
        public function setEmail($v){
            $this->email=$v;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setCodigo_oficina($v){
            $this->codigo_oficina=$v;
        }
        public function getCodigo_oficina(){
            return $this->codigo_oficina;
        }
        public function setCodigo_jefe($v){
            $this->codigo_jefe=$v;
        }
        public function getCodigo_jefe(){
            return->codigo_jefe;
        }
        public function setPuesto($v){
            $this->puesto=$v;
        }
        public function getPuesto(){
            return $this->puesto;
        }
        public function registrarEmpleado(){
            $this->con->createConnetion();
            $sql="insert into empleado (nombre,apellido1,apellido2,extension,email,codigo_oficina,puesto) values ('$this->nombre','$this->apelldio1','$this->apellido2','$this->extension','$this->email','$this->codigo_oficina','$this->puesto')";
            $this->con->executeQuery($sql);
        }
}