<?php
include_once "conexion/conexionBase.php";
class Usuario{
    private $idUsuario;
    private $nick;
    private $contraseña;
    private $estado;
    private $con;
    public function __construct(){
        $this->idUsuario= null;
        $this->nick="";
        $this->contraseña="";
        $this->estado=0;
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

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function registrarUsuario()
    {
        $this->con->createConnection();
        $sql="insert into usuario (nick,contraseña,estado) values (
        '$this->nick', '$this->contraseña','$this->estado'";
        $this->con->executeQuery($sql);
        $_SESSION['mensaje']="Registro exitoso";
    }
    public function ListarUsuario()
    {
        $this->con->createConnection();
        $sql = "select * from usuario";
        $resp = $this->con->executeQuery($sql);
        $data=array();
        while ($row = mysqli_fetch_assoc($resp)) {
            $data[]=$row;
        }
        echo json_encode($data);
    }
    public function login(){
        $this->con->createConnection();
        $sql="select * from usuario where nick='$this->nick' and contraseña='$this->contraseña'";
        $data=$this->con->executeQuery($sql);
        $row=mysqli_fetch_assoc($data);
        if($row){
            $sql="update usuario set estado=1 where idUsuario='$row[idUsuario]'";
            $this->con->executeQuery($sql);
            echo json_encode(["mensaje"=>"Sesion abierta"]);
            echo json_encode(array("status"=>"ok"));
            die();
        }
    }
    public function logout(){
        $this->con->createConnection();
        $sql="select * from usuario where nick='$this->nick' and contraseña='$this->contraseña'";
        $data=$this->con->executeQuery($sql);
        $row=mysqli_fetch_assoc($data);
        if($row){
            $sql="update usuario set estado=0 where idUsuario='$row[idUsuario]'";
            $this->con->executeQuery($sql);
            echo json_encode(["mensaje"=>"Sesion cerrada"]);
            echo json_encode(array("status"=>"ok"));
            die();
        }
        
    }
}