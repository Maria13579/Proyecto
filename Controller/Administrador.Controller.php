<?php
    class Administrador
    {
        public $admin;
        public $smarty;
        public $u;
        public $direc;
        public function __construct()
        {
            
            $this->admin = new Admin();
            $this->smarty = new Smarty();
            $this->direc = new Direcciones();
         
        }
        public function Trabajador()
        {
            
            $nom=$_POST['nombre'];
            $ape=$_POST['apellido'];
            $use=$_POST['usuario'];
            $pas=$_POST['password'];
            $ro=$_POST['rol'];   
            $this->admin->Creartrabajador($ro,$nom,$ape,$use,$pas);
            $this->smarty->assign('nombre', $_SESSION['nombre']); 
            $this->smarty->assign('apellido', $_SESSION['apellido']);
            $this->smarty->assign('ro', $_SESSION['rol']); 
            $this->smarty->assign('title','Administrador');
            $this->direc->VistaCrearTrabajador();
        }
        
    }
?>