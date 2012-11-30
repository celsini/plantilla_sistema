<?php echo $this->Form->create('Usuario',array("onsubmit"=>"return validateUsuario();"));?>
<span class="Titulo-Aplicacion">Crear Nuevo Usuario</span>
<span class="Separador_Modulo"></span>
<div class="Contenedor-Tabla">
<table class="Tabla-Aplicacion"  width="100%">
<tbody>
<tr>
  <th colspan="1">Indicador: </th>
  <td colspan="5">
    <?php echo $this->Form->error('tx_usuario');?>
    <?php echo $this->Session->flash();?>
      <div>
          <div style="float: left;width: 210px;">
          <?php echo $this->Form->input('co_usuario'); ?>
          <?php echo $this->Form->input('tx_usuario',array('label'=>false,'error'=>false,'style'=>'width:200px;'));?>
          </div>
            </div>
  </td>
</tr>
<tr id="tx_password_div">
  <th colspan="1">Clave: </th>
  <td colspan="5">
    <?php echo $this->Form->error('tx_password');?>
    <?php echo $this->Session->flash();?>
      <div>
          <div style="float: left;width: 210px;">
          <?php echo $this->Form->input('tx_password',array('label'=>false,'type'=>'password','error'=>false,'style'=>'width:200px;'));?>
          </div>
     </div>
  </td>
</tr>

<tr>
  <th colspan="1">Rol: </th>
  <td colspan="5">
    <?php echo   $this->Form->error('rol_id');?>
    <?php echo   $this->Form->input('rol_id',array('label'=>false,'error'=>false,'style'=>'width:200px;','readonly'=>true));?>
      <?php echo $this->Form->input('tx_tipo_usuario',array('label'=>false,'type'=>'text','error'=>false,'style'=>'width:200px;','hidden'=>true,'value'=>'L'));?>
  </td>
</tr>
</tbody>
</table>
</div>
<br>
<span class="Sub-Titulo-Aplicacion">Todos los campos marcados con asterisco (<span class='asterisco'>*</span>) son obligatorios</span>
	<br>
	<table>
	<tr>
	<td>
<?php echo $this->Form->end('GUARDAR');?>
</td>
<td>
    <?php echo $this->element('custom_button',array('controller' => 'Usuarios','action' => 'index','label'=>'REGRESAR','param'=>'no')); ?>
</td>
</tr>
</table>
<script type="text/javascript">

</script>