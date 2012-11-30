<?php echo $this->Form->create('query', array('url' => array('controller' => $wheretogo, 'action' =>'index')));?>
<div id='busquedaDvi' >
<table>
<tr>
 <?php
    if(empty ($queryInfo))
        $queryInfo = "";
 ?>
<?php $path="magnifier.png" ?>
  <td class='busquedaTexto'><?php echo $label; ?></td>
  <td><input title =" Dejar campo vacío para ver todos" type='text' name='busqueda' id='busqueda' value="<?php echo $queryInfo;?>"  /></td>
  <td>
  <?php echo $this->Html->image('magnifier.png', array('alt' => 'logo','id'=>'busquedaImg',"onclick"=>'getSearchValue()',"title"=>'Iniciar Busqueda'))?>
  </td>
  </tr>
  </table>
</div>
</form>
