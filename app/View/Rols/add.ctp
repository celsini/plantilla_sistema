<div class="rols form">
<?php echo $this->Form->create('Rol');?>
<span class="Titulo-Aplicacion">rols form</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
    
<tr>
	<th><?php echo 'tx_rol';?></th>
<td>
<?php
	echo $this->Form->error('tx_rol');
	echo $this->Form->input('tx_rol',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>

<tr>
	<th><?php echo 'tx_descripcion_rol';?></th>
<td>
<?php
	echo $this->Form->error('tx_descripcion_rol');
	echo $this->Form->input('tx_descripcion_rol',array('label'=>false,'error'=>false,'style'=>'width:200px;'));
?>
</td>
</tr>
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
        <?php echo $this->Form->end(__('GUARDAR'));?>
    </td>
    <td>
        <input type='button' value='REGRESAR' onclick="location.href='/rols/index'" />
    </td>
</tr>
</table>