<?php
   
    Class Direcciones
    {
        public $smarty;
        public $admin;
        public function __construct()
        {
            Session_start();
            $this->smarty = new Smarty();
            $this->admin = new Admin();
        }
        public function VistaInicio()
        {
            $this->smarty->assign('title','Inicio Sesion Empleados');
            $this->smarty->display('Trabajador/Iniciotrabajador.tpl');
        }
        public function VistaCrearTrabajador()
        {
            $a=$this->admin->VerRol();
            $arr=array();
            while($row=mysqli_fetch_assoc($a))
            {
                array_push($arr,$row);        
            }
            $this->smarty->assign('NombreRol',$arr);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Crear Trabajador');
            $this->smarty->display('Administrador/Creartrabajador.tpl');

        }
    }   
?>