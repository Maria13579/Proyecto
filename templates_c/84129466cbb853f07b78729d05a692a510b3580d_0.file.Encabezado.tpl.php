<?php
/* Smarty version 3.1.39, created on 2021-08-25 06:48:33
  from 'C:\adobeTemp\htdocs\Proyecto\templates\Navs\Encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6125cba17657a0_51862646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84129466cbb853f07b78729d05a692a510b3580d' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\Proyecto\\templates\\Navs\\Encabezado.tpl',
      1 => 1629864710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6125cba17657a0_51862646 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
<div class="nav-wrapper cyan darken-2">
  <a class="brand-logo center">
  <?php if ((isset($_smarty_tpl->tpl_vars['nombre']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ro']->value;?>

    <?php } else { ?>
      Inicio Sesion            
  <?php }?>
    </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="?class=Home&method=Inicio">Salir</a></li>
  </ul>
</div>
</nav><?php }
}
