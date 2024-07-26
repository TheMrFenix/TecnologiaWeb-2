<?php
class persona
{
    private $nombres;
    private $primerApellido;
    private $segundoApellido;
    private $fechaNacimiento;
    private $direccion;


public function __constructor(){
    $this->nombres="";
    $this->primerApellido="";
    $this->segundoApellido="";
    $this->fechaNacimiento="";
    $this->direccion="";
}
/*public function asignar($atributo,$valor){
    $this->$atributo=$valor;
} */
public function setNombres($n){
    $this->nombres=$n;

}
public function getNombres(){
    return $this->nombres;
}
public function setPrimerApellido($p){
    $this->primerApellido=$p;
}
public function getPrimerApellido(){
    return $this->primerApellido;
}
public function setSegundoApellido($s){
    $this->segundoApellido=$s;
}
public function getSegundoApellido(){
    return $this->segundoApellido;
}
public function setFechaNacimiento($f){
    $this->fechaNacimiento=$f;
}
public function getFechaNacimiento(){
    return $this->fechaNacimiento;
}
public function setDireccion($d){
    $this->direccion=$d;
}
public function getDireccion(){
    return $this->direccion;
}
public function toString(){
    return "Datos personales <br> Nombres: "
    .$this->getNombres()
    ."<br> Primer Apellido: "
    .$this->getPrimerApellido();
}
}