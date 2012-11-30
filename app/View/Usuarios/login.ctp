<div class="error-message">
<?php

   echo utf8_decode($this->Session->flash());
   echo utf8_decode($this->Session->flash('auth'));
?>

</div>
<?php echo $this->Form->create('Usuario', array('url' => '/Usuarios/login'));?>
<fieldset>
  <legend><?php __('Autenticaci&oacute;n Requerida'); ?></legend>

    <table width="282" border="0" align="center" cellpadding="2" cellspacing="2">

        <tr>
            <td width="124" style="vertical-align:middle; font-family:Arial; font-size:12px; color:#999999;">Usuario:</td>
            <td>
               <?php echo $this->Form->input('tx_usuario', array('size' => 20,"label"=>false,'onkeyup'=>"this.value=this.value.toUpperCase();")); ?>

            </td>
       </tr>
        <tr>
            <td style="vertical-align:middle; font-family:Arial; font-size:12px; color:#999999">Contraseña:</td>
            <td><?php echo $this->Form->input('tx_password', array('size' => 20,"label"=>false,"type"=>'password')); ?></td>
        </tr>
        <tr>
            <td>&nbsp; <!--<img src="/img/logo2.png" alt="imagen" width="56px;" height="56px;"  />--></td>
            <td colspan='2' align='center'>  <?php echo $this->Form->end('INICIAR SESION'); ?></td>
        </tr>
    </table>
   </fieldset>

