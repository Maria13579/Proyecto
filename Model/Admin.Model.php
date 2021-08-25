<?php
    class Admin
    {
        public $con;
        public function __construct()
        {
            $this->con = new Conexion();
        }
        public function VerRol()
        {
            $result=$this->con->query("SELECT * FROM `rol`");
            $this->con->close();
            return $result;
        }
        public function Creartrabajador($rol,$no,$ap,$us,$pa)
        {
            $consulta=$this->con->query("INSERT INTO `usuario`(`Rol_id_Rol`,`nombre`,`Apellido`,`Usuario`,`Pass`) VALUES ('$rol','$no','$ap','$us','$pa')");
            $this->con->close();
            return $consulta;
        }

    }
?>