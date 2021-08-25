<?php
    Class Home
    {
        public $smarty;
        public function __construct()
        {
            $this->smarty = new Smarty();
        }
        public function Inicio()
        {
           $this->smarty->assign('title','Atencion al Cliente');
            $this->smarty->display('Home.tpl');
        }
    }
?>