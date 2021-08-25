<nav>
<div class="nav-wrapper cyan darken-2">
  <a class="brand-logo center">
  {if isset($nombre)}
    {$nombre}  {$apellido} {$ro}
    {else}
      Inicio Sesion            
  {/if}
    </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="?class=Home&method=Inicio">Salir</a></li>
  </ul>
</div>
</nav>