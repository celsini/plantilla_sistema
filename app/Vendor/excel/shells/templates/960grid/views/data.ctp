<div class="<?php echo $pluralVar;?> view">
<h2><?php echo "<?php  __('{$singularHumanName}');?>";?></h2>

<table table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
<?php foreach ($fields as $field) {
		echo "<tr >\n\t\t<td id='view'><?php __('".Inflector::humanize($field)."'); ?></td>\n\t\t<td><?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?></td>\n</tr>";
		$modelId = "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?>";
		}?>
</table>
<table>
	<tr>
	<td>
			<input type='button' value='REGRESAR' onclick="location.href='/<?php echo $pluralVar;?>/index'" />
	<td>
			<input type='button' value='EDITAR' onclick="location.href='/<?php echo $pluralVar;?>/edit/<?php echo $modelId; ?>'"/>
	</td>
	<td>
			<input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/<?php echo $pluralVar;?>/delete/<?php echo $modelId; ?>'}" />
	</td>
	</tr>
</table>
</div>
