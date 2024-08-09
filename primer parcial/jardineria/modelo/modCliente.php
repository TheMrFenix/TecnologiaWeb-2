<?php
include_once "conexion/conexionBase.php";

class Cliente{
    private $codigo_cliente;
    private $nombre_cliente;
    private $nombre_contacto;
    private $apellido_contacto;
    private $telefono;
    private $fax;
    private $linea_direccion1;
    private $linea_direccion2;
    private $ciudad;
    private $region;
    private $pais;
    private $codigo_postal;
    private $codigo_empleado_rep_ventas;
    private $limite_credito;
    private $con;
    function __construct(){
        $this->codigo_clienta=null;
        $this->nombre_cliente="";
        $this->nombre_contacto="";
        $this->apellido_contacto="";
        $this->telefono="";
        $this->fax="";
        $this->linea_diraccion1="";
        $this->linea_direccion2="";
        $this->ciudad="";
        $this->region="";
        $this->pais="";
        $this->codigo_postal="";
        $this->codigo_empleado_rep_ventas="";
        $this->limite_credito=0;
        $this->con=new conexionBase();
    }
    public function setCodigo_cliente($v){
        $this->codigo_cliente=$v;
    }
    public function getCodigo_cliente(){
        return $this->codigo_cliente;
    }
    public function setNombre_cliente($v){
        $this->nombre_cliente=$v;
    }
    public function getNombre_cliente(){
        return $this->nombre_cliente;
    }
    public function setNombre_contacto($v){
        $this->nombre_contacto=$v;
    }
    public function getNombre_contacto(){
        return $this->nombre_contacto;
    }
    public function setApellido_contacto($v){
        $this->apellido_contacto=$v;
    }
    public function getApellido_contacto(){
        return $this->apellido_contacto;
    }
    public function setTelefono($v){
        $this->telefono=$v;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setFax($v){
        $this->fax=$v;
    }
    public function getFax(){
        return $this->fax;
    }
    public function setLinea_direccion1($v){
        $this->linea_direccion1=$v;
    }
    public function getLinea_direccion1(){
        return $this->linea_direccion1;
    }
    public function setLinea_direccion2($v){
        $this->linea_direccion2=$v;
    }
    public function getLinea_direccion2(){
        return $this->linea_direccion2;
    }
    public function setCiudad($v){
        $this->ciudad=$v;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function setRegion($v){
        $this->region=$v;
    }
    public function getRegion(){
        return $this->region;
    }
    public function setPais($v){
        $this->pais=$v;
    }
    public function getPais(){
        return $this->pais;
    }
    public function setCodigo_postal($v){
        $this->codigo_postal=$v;
    }
    public function getCodigo_postal(){
        return $this->codigo_postal;
    }
    public function setCodigo_empleado_rep_ventas($v){
        $this->codigo_empleado_rep_ventas=$v;
    }
    public function getCodigo_empleado_rep_ventas(){
        return $this->codigo_empleado_rep_ventas;
    }
    public function setLimite_credito($v){
        $this->limite_credito=$v;
    }
    public function getLimite_credito(){
        return $this->limite_credito;
    }
    public function registrarCliente(){
        $this->con->createConnection();
        $sql="insert into cliente (nombre_cliente,nombre_contacto,apellido_contacto,telefono,fax,linea_direccion1,linea_direccion2,ciudad,region,pais,codigo_postal,limite_credito) values ('$this->nombre_cliente','$this->nombre_contacto','$this->apellido_contacto','$this->telefono','$this->fax','$this->linea_direccion1','$this->linea_direccion2','$this->ciudad','$this->region','$this->pais','$this->codigo_postal','$this->limite_credito')";
        $this->con->executeQuery($sql);
    }
}