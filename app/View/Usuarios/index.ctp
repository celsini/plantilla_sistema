<span class="Titulo-Aplicacion">Listado de usuarios</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<?php echo $this->element('busqueda',array("wheretogo" => "Usuarios","label" => "Usuario")); ?>
<div class="error-message">
<?php
   echo utf8_decode($this->Session->flash());
?>

</div>
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Identificador');?></th>
			<th><?php echo $this->Paginator->sort('tx_usuario','Usuario');?></th>
			<th><?php echo $this->Paginator->sort('rol_id','Rol');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($Usuarios as $c005tUsuario): ?>
	<tr>
		<td><?php echo h($c005tUsuario['Usuario']['co_usuario']); ?>&nbsp;</td>
		<td><?php echo h($c005tUsuario['Usuario']['tx_usuario']); ?>&nbsp;</td>
		<td>
			<?php echo ($c005tUsuario['Rol']['tx_rol']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $c005tUsuario['Usuario']['co_usuario'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

<?php echo $this->Element('paginador'); ?>
</div>
<br />
<?php echo $this->element('custom_button',array('controller' => 'Usuarios','action' => 'add','label'=>'NUEVO USUARIO','param'=>'no')); ?>
