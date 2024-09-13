<?php
session_start();

include_once "conexion/conexionBase.php";
class Usuario {
    private $idUsuario;
    private $nick;
    private $contraseña;
    private $fecha_creacion;
    private $estado;
    private $con;
    public function __construct(){
        $this->idUsuario= null;
        $this->nick="";
        $this->contraseña="";
        $this->fecha_creacion="";
        $this->estado="";
        $this->con=new ConexionBase();
    }

    /**
     * @return null
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param null $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    public function getContraseña()
    {
        return $this->contraseña;
    }

    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    }

    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function RegistrarUsuario()
    {
        $this->con->createConnection();
        $sql="insert into usuario(nick, contraseña, fecha_creacion, estado)
values('$this->nick', '$this->contraseña', '$this->fecah_creacion', '$this->estado')";
        $this->con->executeQuery($sql);
        $_SESSION['mensaje']="Registro exitoso";
    }

}