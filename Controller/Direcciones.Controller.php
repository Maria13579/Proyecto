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
        public function Dataencabezado()
        {
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
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
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Crear Trabajador');
            $this->smarty->display('Administrador/Creartrabajador.tpl');

        }
        public function Vistrabajador()
        {
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/trabajador.tpl');
        }
        public function Visventas()
        {
       
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/ventas.tpl');
        }
        public function Visresoluciondudas()
        {
          
            $this->Dataencabezado();  
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/resoluciondudas.tpl');
        }
        public function Visproblematecnico()
        {
            
            $this->Dataencabezado(); 
            $this->smarty->assign('title','Trabajador');
            $this->smarty->display('Trabajador/Problemastecnicos.tpl');
        }
    }   
?>