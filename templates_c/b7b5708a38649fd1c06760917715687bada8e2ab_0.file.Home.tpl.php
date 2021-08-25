<?php
/* Smarty version 3.1.39, created on 2021-08-25 06:47:29
  from 'C:\adobeTemp\htdocs\Proyecto\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6125cb61e70c95_42230731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b5708a38649fd1c06760917715687bada8e2ab' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\Proyecto\\templates\\Home.tpl',
      1 => 1629866843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6125cb61e70c95_42230731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="card-panel teal lighten-2 "><h1 class="center-align">Bienvenido</h1> </div>
<br/><br/>
<div class="center-align">
<a href="?class=Direcciones&method=VistaInicio" class="waves-effect waves-light btn"><i class="material-icons right">assignment_ind</i>Trabajador</a>
<a class="waves-effect waves-light btn"><i class="material-icons right">face</i>Cliente</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
