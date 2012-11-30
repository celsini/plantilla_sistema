<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="<?php echo $pluralVar;?> view">
    <span class="Titulo-Aplicacion">Consultar-<?php  __('{$singularHumanName}');?></span>
    <?php echo "<?php echo \$this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo')); ?>"; ?>

 <table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
                                echo " <tr>";
				echo "\t\t<th><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></th>\n";
				echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
                                 echo " </tr>";
				break;
			}
		}
	}
	if ($isKey !== true) {
                echo " <tr>";
		echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
		echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t</td>\n";
                echo " </tr>";
                
	}
}
?>     
</table>
<table>
	<tr>
            <td><input type='button' value='REGRESAR' onclick="location.href='/<?php echo $pluralVar; ?>'" /></td>
            <td><input type='button' value='EDITAR' onclick="location.href='/<?php echo $pluralVar; ?>/edit/<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}'] ?>"; ?>'"/></td>
            <td><input type='button' value='ELIMINAR' onclick="if(confirm('¿Esta seguro que desea eliminar el registro?')){location.href='/<?php echo $pluralVar; ?>/delete/<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}']?>";?>'}" /></td>

	</tr>
</table>
</div>