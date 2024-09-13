<?php
include_once "modCliente.php";
class modCuenta{
    private $idCuenta;
    private $nick;
    private $pass;
    private $cliente;
    private $con;

    public function __construct(){
        $this->idCuenta=null;
        $this->nick="";
        $this->pass="";
        $this->cliente=new Cliente();
        $this->con=new ConexionBase();
    }
    

    public function getIdCuenta()
    {
        return $this->idCuenta;
    }

    public function setIdCuenta($idCuenta)
    {
        $this->idCuenta = $idCuenta;
        return $this;
    }

    public function getNick(): string
    {
        return $this->nick;
    }


    public function setNick($nick)
    {
        $this->nick = $nick;
        return $this;
    }


    public function getPass(): string
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }


    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;

    }

    public function registrarCuenta(){
        $this->con->createConnection();
        $sql="insert into cuenta (nick,pass,Cliente_idCliente)
        values(?,?,?)";
        $stmCuenta=$this->con->prepare($sql);
        $stmCuenta->execute([$this->getNick(),$this->getPass(),$this->getCliente()->getIdCliente()]);
    } 
}