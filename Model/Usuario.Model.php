<?php
    Class Usuario
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function BuscarUsuario($user, $pass)
        {
            $consulta=$this->con->query("SELECT * FROM `usuario` WHERE `Usuario` = '$user' AND `Pass` = '$pass'");
            $this->con->close();
            return $consulta;
        }  
    } 
?>