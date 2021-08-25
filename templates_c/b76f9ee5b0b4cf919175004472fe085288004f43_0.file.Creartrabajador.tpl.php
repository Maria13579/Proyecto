<?php
/* Smarty version 3.1.39, created on 2021-08-25 20:40:57
  from 'C:\adobeTemp\htdocs\Proyecto\templates\Administrador\Creartrabajador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61268eb98a3114_21727985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b76f9ee5b0b4cf919175004472fe085288004f43' => 
    array (
      0 => 'C:\\adobeTemp\\htdocs\\Proyecto\\templates\\Administrador\\Creartrabajador.tpl',
      1 => 1629916853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/Cabeceras/Header.tpl' => 1,
    'file:Navs/Encabezado.tpl' => 1,
    'file:templates/Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_61268eb98a3114_21727985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Navs/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<h3 class="center-align"> Crear Trabajador</h3>
<div class="col s8" class="center-align">
            <form method="post" action="?class=Administrador&method=Trabajador">
                <div class="input-field col s6">
                    <input  type="text" name="nombre" placeholder="Nombre del Empleado">   
                    <br/>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="apellido" placeholder="Apellido del Empleado">
                    <br/>
                </div>
                <div class="input-field col s6">
                    <input  type="text" name="usuario" placeholder="Usuario del Empleado">
                    <br/>
                </div>
                <div class="input-field col s6">
                    <input  type="password" name="password" placeholder="Contraseña del Empleado">
                    <br/><br/>
                </div>
                <div class="input-field col s6">
                    <select class="browser-default" name="rol" placeholder="Rol del Empleado">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NombreRol']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['n']->value['id_Rol'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['Nombre'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>    
                <div class="input-field col s6">
                    <input class="waves-effect waves-light btn " type= "submit" value="Guardar Usuario">
                </div>
            </form>
</div>
        </div>
        </div>
        <br/> <br/> <br/>


<?php $_smarty_tpl->_subTemplateRender("file:templates/Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
