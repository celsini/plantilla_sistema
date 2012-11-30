<div class="rols index">
        <span class="Titulo-Aplicacion"><?php echo __('Rols');?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
			<th><?php echo ('Identificador');?></th>
			<th><?php echo 'Rol';?></th>
			<th><?php echo ('Descripci&oacute;n');?></th>
			<th class="actions"><?php echo __('Acci&oacute;n');?></th>
	</tr>
	<?php
	foreach ($rols as $rol): ?>
	<tr>
		<td><?php echo h($rol['Rol']['co_rol']); ?>&nbsp;</td>
		<td><?php echo h($rol['Rol']['tx_rol']); ?>&nbsp;</td>
		<td><?php echo h($rol['Rol']['tx_descripcion_rol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Consultar'), array('action' => 'view', $rol['Rol']['co_rol'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
            <?php
		echo $this->Element('paginador'); ?>
	</div>
</div>
</div>
<br />
<input type='button' value='NUEVO ROL' onclick="location.href='/rols/add'" />
