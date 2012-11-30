<?php echo "<?php echo \$form->create('{$modelClass}');?>\n";?>
<span class="Titulo-Aplicacion">Crear Nuevo <?php echo "<?php __('".strtolower(Inflector::humanize($action)).strtolower(" {$singularHumanName}');?>");?></span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<?php
	 
		foreach ($fields as $field) {
			if ($action == 'add' && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            if ($action == 'edit' && $field == $primaryKey) {
                                echo "\n\t\t<?php echo \$form->input('{$field}');?>\n\t";
                            }
                            else
                                echo "<tr>\t<th><span class='asterisco'>*</span><?php __('$field');?></th>\n\t<td>\n\t\t<?php echo \$form->error('{$field}');?>\n\t\t<?php echo \$form->input('{$field}',array('label'=>false,'error'=>false));?>\n\t</td>\n</tr>";
			 }
		}
		if(!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$form->input('{$assocName}');\n";
			}
		}
		echo "\t\n";
?>
</table>
</div>
<br>
<span class="Sub-Titulo-Aplicacion">Todos los campos marcados con asterisco (<span class='asterisco_final'>*</span>) son obligatorios</span>
	<br>
	<table>
	<tr>
	<td>
<?php
if ($action == 'add')
echo "<?php echo \$form->end('GUARDAR');?>\n";
else
echo "<?php echo \$form->end('ACTUALIZAR');?>\n";?>
</td>
<td>
<input type='button' value='REGRESAR' onclick="location.href='/<?php echo $pluralVar; ?>/index'" />
</td>
</tr>
</table>