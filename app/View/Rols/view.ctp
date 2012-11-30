<div class="rols view">
    <span class="Titulo-Aplicacion">Consultar-</span>
    <?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>
 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
 <tr>		<th><?php echo __('Co Rol'); ?></th>
		<td>
			<?php echo h($rol['Rol']['co_rol']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Tx Rol'); ?></th>
		<td>
			<?php echo h($rol['Rol']['tx_rol']); ?>
		</td>
 </tr> <tr>		<th><?php echo __('Tx Descripcion Rol'); ?></th>
		<td>
			<?php echo h($rol['Rol']['tx_descripcion_rol']); ?>
		</td>
 </tr>     
</table>
<table>
	<tr>
            <td><input type='button' value='REGRESAR' onclick="location.href='/rols'" /></td>
            <td><input type='button' value='EDITAR' onclick="location.href='/rols/edit/<?php echo $rol['Rol']['co_rol'] ?>'"/></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/rols/delete/<?php echo $rol['Rol']['co_rol']?>'}" /></td>

	</tr>
</table>
</div>