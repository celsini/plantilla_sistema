<html>
    <head>
        <title>UBT- Universidad de Trabajadores Jesus Rivero</title>

<?php
    echo $this->Html->script(array('prototype','funciones'));
    
     echo $this->Html->script(array('js/jquery.min.js'));
?>
 <script>
    jQuery.noConflict();
  </script>
        <?php


     echo $this->Html->css('sexy_alertbox/sexyalertbox');
     echo $this->Html->script(array('sexy_alertbox/jquery.easing.1.3','sexy_alertbox/sexyalertbox_noConflict.js'));

     echo $this->Html->css(array('main-aplicacion','index.css'));

?>
    </head>
    <body>
        <table width="830" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="1%">&nbsp;</td>
                <td width="98%"><div align="center">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="18%"><!--<img src="<?php echo $this->webroot;?>img/logorojo.png" alt="logorojo" width="155" height="70" />--></td>
                                <td width="82%" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td height="22" style="background-image:url(<?php echo $this->webroot;?>img/degradacion_roja-aux.png); background-repeat:no-repeat; background-position:right;"><div align="right" class="style4" style="margin-right:10px;"><?php echo "UBT- Universidad de Trabajadores Jesus Rivero" ?></div></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>
                    </div></td>
                <td width="1%">&nbsp;</td>
            </tr>
            <tr>
                <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"></td>
                <td height="1" style="background-image: url(<?php echo $this->webroot;?>img/puntoRojo.gif)"></td>
                <td height="1" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;"></td>
            </tr>
            <tr>
                <td width="1%" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"><img src="<?php echo $this->webroot;?>img/sombrapaginaD.png" alt="sombra" width="15" height="1"></td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="50%" height="20" style="background-image:url(<?php echo $this->webroot;?>img/back_gris_izq.png); background-repeat:repeat-y; background-position:left;"><div class="style7">Bienvenido</div></td>
                            <td width="50%" height="20" style="background-image:url(<?php echo $this->webroot;?>img/back_gris_dere.PNG); background-repeat:repeat-y; background-position:right;"><div class="style6"><?php /*echo $customInfo->fecha();*/?></div></td>
                        </tr>
                    </table></td>
                    <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;"><img src="<?php echo $this->webroot;?>img/sombrapaginaI.png" alt="sombra" width="15" height="1"></td>
            </tr>
            <tr>
                <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
                <td><div align="center">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="1%"><div align="left"><img src="<?php echo $this->webroot;?>img/esquinaizq_gris.gif" alt="imagen" width="10" height="27"></div></td>
                                <td width="98%" style="background-image: url(<?php echo $this->webroot;?>img/back_grisoscuro.png)">&nbsp;</td>
                                <td width="1%"><div align="right"><img src="<?php echo $this->webroot;?>img/esquinader_gris.gif" alt="imagen" width="10" height="27"></div></td>
                            </tr>
                        </table>
                    </div></td>
                <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
                <td><div align="center">
                        <table width="780"  border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="370" height="100" align="center" valign="middle">
                                    <!--<img src="<?php echo $this->webroot;?>img/tituloCentral.png" alt="imagen"  />-->
                                    Logo Central
                                    <br />
                                    <!--<img src="<?php echo $this->webroot;?>img/version.png" alt="imagen"  />-->
                                </td>
                                <td width="300" rowspan="2" align="center" valign="middle">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>

                                                
                                               <!-- <img src="<?php echo $this->webroot;?>img/logoPrincipal.jpg" border="0" alt="logorojo" style="padding-left:70px;"  />-->
                                               Logo Izquierdo
                                            </td>
                                        </tr>
                                    </table></td>
                            </tr>
                            <tr>
                                <td height="199" align="center" valign="middle">
                               
                                <?php echo $content_for_layout; ?>

                              </td>
                            </tr>
                        </table>
                    </div></td>
                <td style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaI.png); background-repeat:repeat-y; background-position:right;">&nbsp;</td>
            </tr>

            <tr>
                <td height="1px" style="background-image:url(<?php echo $this->webroot;?>img/sombrapaginaD.png); background-repeat:repeat-y; background-position:right;"></td>
                <td height="1px" style="background-image:url(<?php echo $this->webroot;?>img/puntoRojo.gif);"></td>
                
            </tr>
            <tr>
                <td height="10px"></td>
            </tr>
            <tr>
                <td height="10px"></td>
                <td height="10px" align="center"><div align="center" style="vertical-align:middle; font-family:Arial; font-size:12px; color:#FF0000; cursor:pointer; width:40px;" onClick="open_contac();"> Cont&aacute;ctanos</div>
                <!--<img src="<?php echo $this->webroot;?>img/icons-browsers.png" alt="imagen" width="200px" height="auto" />-->
                </td>
               
            </tr>
        </table>
    </body>
</html>
