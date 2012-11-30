<div class="c005tUsuarios view">
<span class="Titulo-Aplicacion">Seleccionar Grupos</span>

<?php echo $this->Html->image('separador_modulo.png',array('alt' => 'separador','border'=>'0','id'=>'Separador_Modulo'));?>
<?php echo $this->Form->create('Usuario',array("controller"=>"Usuarios",'action'=>'validar'));?>
<?php
   echo utf8_decode($this->Session->flash());
?>
<table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion'>
<tr >
		<th><?php echo ('Grupos'); ?></th>
		<td><?php echo $this->Form->input('c003t_grupo_id',array('label'=>false)); ?></td>
</tr>
</table>
<table>
	<tr>
            <td><?php echo $this->Form->end(__('SELECCIONAR'));?></td>
          </tr>
</table>
</div>