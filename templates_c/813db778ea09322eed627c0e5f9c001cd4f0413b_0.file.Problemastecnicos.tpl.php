<?php
/* Smarty version 3.1.39, created on 2021-08-25 21:08:14
  from 'C:\adobeTemp\htdocs\Proyecto\templates\Trabajador\Problemastecnicos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6126951ecaeca5_69270477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '813db778ea09322eed627c0e5f9c001cd4f0413b' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\Proyecto\\templates\\Trabajador\\Problemastecnicos.tpl',
      1 => 1629918490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:Navs/barratrabajador.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6126951ecaeca5_69270477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/barratrabajador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 >Problemas tecnicos</h1> 
<br/><br/>
<div >
<a href="?class=&method=" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Libre</a>
<a class="waves-effect waves-light btn"><i class="material-icons right">close</i>Ocupado</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
