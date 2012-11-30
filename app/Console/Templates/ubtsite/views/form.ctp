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
<div class="<?php echo $pluralVar;?> form">
<?php echo "<?php echo \$this->Form->create('{$modelClass}');?>\n";?>
<span class="Titulo-Aplicacion"><?php echo $pluralVar;?> form</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    <?php
            foreach ($fields as $field) {
                if (strpos($action, 'add') !== false && $field == $primaryKey) {
                    continue;
                } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                   if($field == $primaryKey){
                        echo "<?php";
                            echo " echo \$this->Form->input('{$field}');";
                        echo "?>\n";
                   }
                   else{
                        echo "\n<tr>\n";
                        echo "\t<th><?php echo '{$field}';?></th>\n<td>\n";
                        echo "<?php\n";
                        echo "\techo \$this->Form->error('{$field}');\n";
                        echo "\techo \$this->Form->input('{$field}',array('label'=>false,'error'=>false,'style'=>'width:200px;'));";
                        echo "\n?>\n";
                        echo "</td>";
                        echo "\n</tr>\n";
                     }

                }
            }
            if (!empty($associations['hasAndBelongsToMany'])) {
                foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                    echo "\t\techo \$this->Form->input('{$assocName}');\n";
                }
            }

            ?>
</tbody>
</table>
</div>
</div>
<br>
<span class="Sub-Titulo-Aplicacion">Todos los campos marcados con asterisco (<span class='asterisco'>*</span>) son obligatorios</span>
<br>
<table>
<tr>
    <td>
        <?php
            if ($action== 'add')
                echo "<?php echo \$this->Form->end(__('GUARDAR'));?>\n";
            else
                echo "<?php echo \$this->Form->end(__('EDITAR'));?>\n";
        ?>
    </td>
    <td>
        <input type='button' value='REGRESAR' onclick="location.href='/<?php echo $pluralVar; ?>/index'" />
    </td>
</tr>
</table>