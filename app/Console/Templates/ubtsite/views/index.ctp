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
<div class="<?php echo $pluralVar;?> index">
        <span class="Titulo-Aplicacion"><?php echo "<?php echo __('{$pluralHumanName}');?>";?></span>
        <span class="Separador_Modulo"></span>
        <div class="Contenedor-Tabla">
	<table class="Tabla-Aplicacion"  width="100%">
	<tr>
	<?php  foreach ($fields as $field):?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}');?>";?></th>
	<?php endforeach;?>
		<th class="actions"><?php echo "<?php echo __('Acci&oacute;n');?>";?></th>
	</tr>
	<?php
	echo "<?php
	foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('Consultar'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
	 	echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</table>
	<div class="paging">
            <?php
                echo "<?php\n";
                echo "\t\techo \$this->Element('paginador'); ?>\n";
            ?>
	</div>
</div>
</div>
<br />
<input type='button' value='<?php echo 'NUEVO '.$singularHumanName; ?>' onclick="location.href='/<?php echo $pluralVar; ?>/add'" />
