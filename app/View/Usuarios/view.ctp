<div class="c005tUsuarios view">
<span class="Titulo-Aplicacion">Consultar- Usuarios</span>

<?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo'));?>
<table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
<tr >
		<th id='view'><?php __('Identificador'); ?></th>
		<td><?php echo h($Usuario['Usuario']['co_usuario']); ?></td>
</tr><tr>
		<th id='view'><?php __('Usuario'); ?></th>
		<td><?php echo h($Usuario['Usuario']['tx_usuario']); ?></td>
</tr><tr>
		<th id='view'><?php __('Rol'); ?></th>
                <td><?php echo $Usuario['Rol']['tx_rol']; ?></td>
</tr>
</table>
<table>
	<tr>
            <td><?php echo $this->element('custom_button',array('controller' => 'Usuarios','action' => 'index','label'=>'REGRESAR','param'=>'no')); ?></td>
            <td>
                <?php echo $this->element('custom_button',array('controller' => 'Usuarios','action' => 'edit','label'=>'EDITAR','param'=>$Usuario['Usuario']['co_usuario'])); ?>
            </td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='<?php echo $this->Html->url(array('controller' => 'Usuarios','action' => 'delete',$Usuario['Usuario']['co_usuario']));?>'}" /></td>

	</tr>
</table>
</div>