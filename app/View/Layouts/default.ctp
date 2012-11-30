<?php header('Content-type: text/html; charset=UTF-8') ;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>UBT- Universidad de Trabajadores Jesus Rivero</title>
<?php /*Begin Incluir Metas*/
    echo $this->Html->charset('utf-8');
//echo $this->Html->charset();

/*End Incluir Metas*/ ?>
<?php
/*Being Thema de la aplicacion*/
        echo $this->Html->css("themes/smoothness/jquery-ui-1.8.5.custom.css");
        echo $this->Html->css("themes/ui.jqgrid.css");
        echo $this->Html->css("themes/smoothness/css/jquery.searchFilter.css");
        echo $this->Html->css("themes/formato/celda/celda.css");

        
        /*Menu y Estilos Generales de la apliccacion*/
        echo $this->Html->css(array('main-aplicacion.css', 'menu/slide-out-menu-new.css'));

 ?>
<style type="text\css">
    html, body {
        margin: 0;
        padding: 0;
        font-size: 75%;
    }
</style>
 <?php
/*End Thema de la aplicacion*/

/*Begin Libreria Jqgrid*/
	echo $this->Html->script('js/jquery.min.js');
/*End Libreria Jqgrid*/

/*Begin Traducir el datapicker*/
       // echo $this->Html->script('i18n/jquery.ui.datepicker-es.js');
/*End datapicker*/
        echo $this->Html->script(array('js/jquery-ui-1.8.2.custom.min.js','js/i18n/grid.locale-sp.js','js/jquery.jqGrid.min.js','js/ui.datepicker-es.js','funciones_jq','jquery.filestyle.mini','jquery.uitableedit.js','jquery.maxlength-min.js'));

/*Mesasages Using sexy Librery*/
 echo $this->Html->css('sexy_alertbox/sexyalertbox');
 

 echo $this->Html->script(array('sexy_alertbox/jquery.easing.1.3','sexy_alertbox/sexyalertbox.v1.2.jquery'));
/* End Mesasages Using sexy Librery*/


?>

<?php echo $scripts_for_layout; ?>

</head>
<body>

<!-- Configuracion de variable session-->
<?php
$usuario = $this->Session->read('userProfileData');
$rol = $usuario['Usuario']['rol_id'];
?>
<!-- Fin Configuracion de variable session-->
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="98%"><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="18%"><!--<img src="<?php echo $this->webroot;?>img/logorojo.png" width="155" height="70" alt='logo' />--></td>
          <td width="82%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="22" style="background-image:url(<?php echo $this->webroot;?>img/degradacion_roja-aux.png); background-repeat:no-repeat; background-position:right;"><div align="right" class="style4" style="margin-right:10px;">
                    <?php echo "UBT- Universidad de Trabajadores Jesus Rivero"?>
                        <?php /*echo $this->Html->image('logo.jpg', array('alt' => 'logo',"align"=>"middle","border"=>"0","width"=>"720px "))*/?>
                    </div></td>
              </tr>
          </table>		  </td>
        </tr>
      </table>
    </div></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"></td>
    <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/puntoRojo.gif);"></td>
    <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;"></td>
  </tr>
  <tr>
    <td width="1%" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"><img src="<?php echo $this->webroot;?>img/sombrapaginaD.png" width="15" height="1" alt='imagen' /></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
          <td width="50%" height="20" style="background-image:url(<?php echo $this->webroot;?>img/back_gris_izq.png); background-repeat:repeat-y; background-position:left;">
              <!-- Usuario logeado-->
              <div class="style7"><?php /*echo $usuario_logeado;*/?></div>
          </td>
        <td width="50%" align="right" style="background-image:url(<?php echo $this->webroot;?>img/back_gris_dere.png); background-repeat:repeat-y; background-position:right;"><div class="style6"><?php /*echo $customInfo->fecha();*/?></div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CC0000" height="20">
            <div align="right">
                <?php echo $this->Html->link('Cerrar ',array('controller'=>'usuarios', 'action'=>'logout'),array('class'=>'style5','onclick'=>"return logout();"));?>

            </div></td>
      </tr>
      <tr>
        <td colspan="2" height="2"></td>
      </tr>
    </table></td>
    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;"><img src="<?php echo $this->webroot;?>img/sombrapaginaI.png" width="15" height="1" alt='imagen' /></td>
  </tr>
  <tr>
    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
    <td><div align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0">
        <tr>
<!--- EL TAMAÑO DEL MENU --> <td width="150">
  <!--- EL TAMAÑO DEL MENU --><img src="<?php echo $this->webroot;?>img/imagen_superior_menu.gif" width="154" height="27" alt='imagen'/></td>
          <td width="1" style="background-image:url(<?php echo $this->webroot;?>img/puntogris.gif);">
          <img src="<?php echo $this->webroot;?>img/puntogris.gif" width="1" height="1" alt='imagen' /></td>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="99%" style="background-image:url(<?php echo $this->webroot;?>img/back_grisoscuro.png);">&nbsp;</td>
              <td width="1%"><div align="right"><img src="<?php echo $this->webroot;?>img/esquinader.gif" width="10" height="27" alt='imagen' /></div></td>
            </tr>
          </table></td>
          </tr>
        <tr>
<!--- EL TAMAÑO DEL MENU --><td width="150" height="450" valign="top" style="background-image:url(<?php echo $this->webroot;?>img/degradacion.gif); background-repeat:repeat-x;"><table width="100%" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td>
   <!--- START MENU HTML -->

      <div id="dhtmlgoodies_menu">
                 <ul>
                    <li>
                        <span class="Text-menu">
                            <?php echo $this->Html->link('Menú',array('controller'=>'Usuarios', 'action'=>'inicio'));?>
                        </span>
                     </li>
                     <?php if($rol==1 || $rol==2): ?>
                     <li><a href="#" >Administraci&oacute;n</a>
				<ul>
                                   
                                    <li>
                                            <?php echo $this->Html->link('Localidad',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>

                                     <li>
                                            <?php echo $this->Html->link('Personas',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                    <li>
                                            <?php echo $this->Html->link('Coord Centro',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                    <li>
                                            <?php echo $this->Html->link('Facilitadores',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                    <li>
                                            <?php echo $this->Html->link('Comisión',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                    <li>
                                            <?php echo $this->Html->link('Centro de formación',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                    <li>
                                            <?php echo $this->Html->link('Equipos de estudios',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                   
				</ul>
			</li>
                       <?php endif; ?>
                     <?php if($rol==1 || $rol==2): ?>
                     <li><a href="#" >Usuarios</a>
				<ul>

                                    <li>
                                            <?php echo $this->Html->link('Roles',array('controller'=>'Roles', 'action'=>'index'));?>
                                    </li>

                                     <li>
                                            <?php echo $this->Html->link('Usuarios',array('controller'=>'Usuarios', 'action'=>'index'));?>
                                    </li>
                                    
				</ul>
			</li>
                       <?php endif; ?>
                     <?php if($rol==1 || $rol==2): ?>
                     <li><a href="#" >Carreras</a>
				<ul>

                                    <li>
                                            <?php echo $this->Html->link('PNF',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>

                                     <li>
                                            <?php echo $this->Html->link('Materias',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                     <li>
                                            <?php echo $this->Html->link('Equipos / Materias',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
                                     <li>
                                            <?php echo $this->Html->link('Calificaciones',array('controller'=>'nada', 'action'=>'index'));?>
                                    </li>
				</ul>
			</li>
                       <?php endif; ?>
                       
                       <?php if($rol==1 || $rol==2): ?>
                        <li><a href="#" >Reportes</a>
				<ul>
                                        <li><?php echo $this->Html->link('Certificado de notas',array('controller'=>'nada', 'action'=>'index'));?></li>
                                        
                                               
				</ul>
			</li>

                        <?php endif; ?>
		<li><span class="PuntoHo_Cortico"></span></li>
 </ul>
 </div>

		<script type="text/javascript">
	      document.getElementById('dhtmlgoodies_menu').style.visibility='hidden';	// Because the ads make it a little slow
             </script>

   <!-- END MENU HTML-->
	   </td>
            </tr>
          </table></td>
          <td width="1" style="background-image:url(<?php echo $this->webroot;?>img/puntogris.gif);" ></td>
          <td valign="top">
		     <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="500" width='550' valign="top" id="body">
                  <?php echo "<div id='contenido'>".$this->fetch('content')."<br /><br clear='all' /></div>"; ?>

              </td>
            </tr>
            <tr>
            
              <td height="15" align="center" valign="middle" style="background-image:url(<?php echo $this->webroot;?>img/background.jpg);" id="body2">
              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="23%">&nbsp;</td>
                  
                  <td width="77%"><div align="right"> </div></td>
                </tr>
              </table></td>
            </tr>
          </table>		  </td>
          </tr>
      </table>
    </div></td>
    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"></td>
    <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/puntoRojo.gif);"></td>
    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;"></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="10px"></td>
    <td height="10px" align="center"><div align="center" style="vertical-align:middle; font-family:Arial; font-size:12px; color:#FF0000; cursor:pointer; width:40px;" onclick="open_contac();">Cont&aacute;ctanos</div></td>

	<td height="10px"></td>
  </tr>
</table>
    <?php echo $this->Html->script('slide-out-menu-new.js');?>
<?php
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$file = dirname($url);
?>
<input type="hidden" readonly="true" style ="width:265px;" value="<?php echo $file; ?>" name="urlApp" id="urlApp" />
</body>
</html>
<?php echo $this->element('sql_dump'); ?>
