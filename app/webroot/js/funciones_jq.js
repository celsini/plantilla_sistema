/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 *Permite conocer información sobre los custodios del sistema
 *
 **/
$().ready(function() {
/*BEGIN*/

    /*BEGIN- Valida que solo se ingrese numeros en el campo especificos*/
        $(".solo-numero").keyup(function(){
                if ($(this).val() != '')
                $(this).val($(this).attr('value').replace(/[^0-9]/g, ""));
         });

        $(".solo-numero").change(function(){
            if ($(this).val() != '')
            $(this).val($(this).attr('value').replace(/[^0-9]/g, ""));
        });
        
  
    /*BEGIN- Formatear tos los input file para que sean mas amigables*/
    $("input[type=file]").filestyle({
     image: $('#cakeurl').val()+"/img/choose-file.gif",
     imageheight : 22,
     imagewidth : 82,
     width : 120
    });
    /*END- Formatear tos los input file para que sean mas amigables*/

    /*BEGIN- solo se permiten textos en mayuscula */
  $(".justUpperCase").keyup(function(){
        $(this).val( $(this).val().toUpperCase() );
   });

 $(".justUpperCase").change(function(){
        $(this).val( $(this).val().toUpperCase() );
   });

 /*END- solo se permiten textos en mayuscula */

$('#C007tMensajesEnviadoTxMensajeEnv').maxlength({
    events: [], // Array of events to be triggerd
    maxCharacters: 160, // Characters limit
    status: true, // True to show status indicator bewlow the element
    statusClass: "error-message", // The class on the status div
    statusText: "Caracteres disponibles", // The status text
    notificationClass: "notification",	// Will be added when maxlength is reached
    showAlert: false, // True to show a regular alert message
    alertText: "Limite de caracteres alcanzado", // Text in alert message
    slider: false // True Use counter slider
  });

  $('#tx_mensaje_env_per').maxlength({
    events: [], // Array of events to be triggerd
    maxCharacters: 100, // Characters limit
    status: true, // True to show status indicator bewlow the element
    statusClass: "error-message", // The class on the status div
    statusText: "Caracteres disponibles", // The status text
    notificationClass: "notification",	// Will be added when maxlength is reached
    showAlert: false, // True to show a regular alert message
    alertText: "Limite de caracteres alcanzado", // Text in alert message
    slider: false // True Use counter slider
  });



/*END*/});

function formatFecha(widthDay,widthMonth,widthYear){

   var selectFechas = $('.formatForDate');
   var i = 0;
   selectFechas.each(function() {
       switch (i) {
            case 0:
                $("#"+this.id).width(widthDay);
                i++;
            break;
            case 1:
                $("#"+this.id).width(widthMonth);
                i++;
            break;
            case 2:
                $("#"+this.id).width(widthYear);
                i=0;
            break;
        }
    });

 /*var daySelect = $(".formatForDate").attr('id');
    var monthSelect = $(".formatForDate").next().attr('id');
    var yearSelect = $(".formatForDate").next().next().attr('id');

    $("#"+daySelect).width(widthDay);
    $("#"+monthSelect).width(widthMonth);
    $("#"+yearSelect).width(widthYear);

    var daySelect2 = $(".formatForDate").next().next().attr('id');
    var monthSelect2 = $(".formatForDate").next().attr('id');
    var yearSelect2 = $(".formatForDate").next().next().next().next().next().attr('id');
    alert(monthSelect2);
    $("#"+daySelect2).width(widthDay);
    $("#"+monthSelect2).width(widthMonth);
    $("#"+yearSelect2).width(widthYear);
    */
}

function open_contac(){

    var table ="<table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion' >\n\
                    <tbody>\n\
                          <tr><th width='100px'><b><font color='white'>Datos</font></b></th><th width='100px'><b><font color='white'>Indicador</font></b></th><th width='100px'><b><font color='white'>Ext</font></b></th><th width='100px'><b><font color='white'>Rol</font></b></th></tr>\n\
                          <tr><td width='100px'>Nombre Apellido</td><td width='100px'>Usuario</td><td width='100px'>Telefono</td><td width='100px'>Analista Mantenedor</td></tr>\n\
                </tbody></table>";
    Sexy.info(table,{textBoxBtnOk:'Aceptar'});

}

function showImgOfHouse(url,title,path){

var imagen ="<img src='/upload/images/"+path+"/"+url+"' width='350' height='250' alt='imagen'/>";

var table ="<table width='100%' border='0' cellspacing='2' cellpadding='0' class='Tabla-Aplicacion' >\n\
                    <tbody>\n\
                          <tr><th width='100px'><b><font color='white'>"+title+"</font></b></th></tr>\n\
                          <tr><td width='100px'>"+imagen+"</td></tr>\n\
                </tbody></table>";
    Sexy.info(table,{textBoxBtnOk:'Aceptar'});
}
/*
 *Permite salir del sistema de manera correcta
 **/
function logout() {
    Sexy.confirm('Esta seguro que desea salir del sistema?', {
        textBoxBtnOk: 'Salir',
        textBoxBtnCancel: 'Cancelar',
        onComplete: function(returnvalue) {
            // here is where you act, after user has made a choice...
            if (returnvalue) {
                //alert ("pressed OK");
                window.location.href = '/ubtsite/index.php/usuarios/logout';
            }
            else {
                //alert("pressed Cancel");
               //window.location.href = '/page2/';
            }
        }
    });
    return false; // this is to cancel the native click event
}


function ejemplos(){

    Sexy.alert('USNADO UN ALER',{textBoxBtnOk:'Quiero Entrar'});
    Sexy.info('INFORMACION');
    Sexy.confirm('Hello world!', {
    textBoxBtnOk: 'Quiero Entrar',textBoxBtnCancel: 'Quiero Salir'});
}

function createErrorDiv(idElemento,msg)
{
    $(".error-message").remove();
    
	if(msg == "")
                $("#"+idElemento).before($("<div id='msg_"+idElemento+"' class='error-message'>&darr;Campo Obligatorio&darr;</div>"));
	else
		$("#"+idElemento).before("<div id='msg_"+idElemento+"' class='error-message'>&darr;"+ msg +"&darr;</div>");


	$("#"+idElemento).focus();
	return false;
}


function soloDosPuntos(){
        $("#dospuntos").keyup(function(){
            if ($(this).val() != '')
            $(this).val($(this).attr('value').replace(/[^0-9]/g, ""));
     });

}

function generarXLS(){
    if($('#query_sql').val()!=''){
        query_sql = $('#query_sql').val();
        //alert($('#query_sql').val());
        location.href="/C008Solicitudes/excel/"+query_sql;
    }
    return false;
}

function generarPDF(){
    if($('#query_sql').val()!=''){
        query_sql = $('#query_sql').val();
        location.href="/C008Solicitudes/solicitudPdf/"+query_sql;
    }
    return false;
}


function removeDisabled(){

   $('*:disabled').removeAttr('disabled');
    return true;

}



function generarXLSListadoAsignacion(){
    var reportesCamporesidencial = $('#reportesCamporesidencial').val();
    var reportesTipoempleado = $('#reportesTipoempleado').val();
    location.href="/reportes/listadoAsignacionesExcelPdf/"+reportesCamporesidencial+"/EXCEL/"+reportesTipoempleado+"/";
  return false;  
}

function generarPDFListadoAsignaciones(){
    var reportesCamporesidencial = $('#reportesCamporesidencial').val();
    var reportesTipoempleado = $('#reportesTipoempleado').val();
    location.href="/reportes/listadoAsignacionesExcelPdf/"+reportesCamporesidencial+"/PDF/"+reportesTipoempleado+"/";
  return false;  
    
}

function generarXLSPDFListadoAsignacionResumen(tipoReporte){
    var reportesCamporesidencial = $('#reportesCamporesidencial').val();
    //var reportesTipoempleado = $('#reportesTipoempleado').val();
    location.href="/reportes/listadoAsignacionesResumenExcelPdf/"+reportesCamporesidencial+"/"+tipoReporte+"/";
  return false;
}

function gererarConstatnciaPDF(tipoReporte){
    var reportesCedulaempleado = $('#reportesEmpleadoId').val();
    if(reportesCedulaempleado == ''){alert('Seleccione una opción');$('#reportesEmpleadoId').focus();return false;}

    location.href="/reportes/constanciaExcelPdf/"+reportesCedulaempleado+"/"+tipoReporte+"/";

  return false;
}

function ContratoExcelPDF(tipoReporte){

    var reportesCedulaempleado = $('#reportesEmpleadoId').val();
    if(reportesCedulaempleado == ''){alert('Seleccione una opción');$('#reportesEmpleadoId').focus();return false;}

    location.href="/reportes/ContratoExcelPdf/"+reportesCedulaempleado+"/"+tipoReporte+"/";

  return false;
}

function generarPDFHojaDeVida(){
    var reportesCamporesidencial = $('#reportesCamporesidencial').val();
    if(reportesCamporesidencial == ''){alert('Seleccione una opción');$('#reportesCamporesidencial').focus();return false;}
    location.href="/reportes/hojaDeVidaPdf/"+reportesCamporesidencial;
  return false;
}


function generarXLSPDFListadoControlRepaciones(tipoReporte){
    var reportesCamporesidencial = $('#reportesCamporesidencial').val();
    var reportesVivienda = $('#reportesVivienda').val();
    if(reportesCamporesidencial == ""){alert('Debe Seleccionar el Campo Residencial');return false;$('#reportesCamporesidencial').focus();};
    
    location.href="/reportes/ControlRepacionExcelPdf/"+reportesCamporesidencial+"/"+tipoReporte+"/"+reportesVivienda+"/";
  return false;
}


function generarXLSPDFFormatoRemision(tipoReporte){
    var reportesCamporesidencial = $('#reportesCamporesidencialformarto').val();
    var reportesVivienda = $('#reportesVivienda').val();
    var referencia = $('#reportesReferencia').val();
    
    if(reportesCamporesidencial == ""){alert('Debe Seleccionar el Campo Residencial');return false;$('#reportesCamporesidencialformarto').focus();};

    //alert(reportesCamporesidencial);
    //return false;
    location.href="/reportes/FormatoRemisionExcelPdf/"+reportesCamporesidencial+"/"+tipoReporte+"/"+reportesVivienda+"/"+"/"+referencia+"/";
  return false;
}
/********************************************SISTEMA DE ENVIO DE MENSAJES SMS*************************/
function showHideTxPassword(ope){
    if($('#usuarioLocal:checked').val())
        $("#tx_password_div").show();
    else
        $("#tx_password_div").hide();

}
function prueba(){

    alert('123456');
}

function validateC005tUsuario(){
    if($('#C005tUsuarioTxUsuario').val()=='')
        {createErrorDiv('C005tUsuarioTxUsuario',' Campo Obligatorio ');return false;}
        
    if($('#C005tUsuarioTxPassword').val()=='')
    {
        if($('#usuarioLocal:checked').val())
            {createErrorDiv('C005tUsuarioTxPassword',' Campo Obligatorio ');return false;}
         else
            $('#C005tUsuarioTxPassword').val($('#C005tUsuarioTxUsuario').val());
    }
    if($('#usuarioLocal:checked').val())
        $('#C005tUsuarioTxTipoUsuario').val('L');
    else
        $('#C005tUsuarioTxTipoUsuario').val('R');
    
return true;
}

function getSearchValue()
{
   $('#queryIndexForm').submit();

}

function validarArchivo(){


    var selected = $('#ImportsC003tGrupoId').val();
    if(selected == '' || selected==null)
        {createErrorDiv('ImportsC003tGrupoId',' Campo Obligatorio ');return false;}

    if($('input[type=file]').val() == '' || $('input[type=file]').val()==null)
        {createErrorDiv('archivoCargarDiv',' Campo Obligatorio ');return false;}
    if(validarExtension($('input[type=file]').val()) == false)
        {createErrorDiv('archivoCargarDiv',' Solo se permiten archivos con extension <b>.csv</b> ');return false;}
   //alert($("#ImportsUploadForm input[type='radio']:checked").val());
   //  return false;


   $('#img').show();

    return true;
}

function validarExtension(idElemento){
   
    var val = idElemento;
    val.substring(val.lastIndexOf('.') + 1).toLowerCase();
   
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'csv':
            return true;
            break;
        default:
            return false
            break;
    }
}


function informacion(message){
    Sexy.info(message);
}

function error(message){
     Sexy.error(message)
}

function confirmar(message){
     return Sexy.error(message)
}

function validateSms(){

   if ($('#C007tMensajesEnviadoC003tGrupoId').val() == null)
        {createErrorDiv('C007tMensajesEnviadoC003tGrupoId',' Campo Obligatorio ');return false;}

   if ($('#C007tMensajesEnviadoTxMensajeEnv').val() == '')
        {createErrorDiv('C007tMensajesEnviadoTxMensajeEnv',' Campo Obligatorio ');return false;}

   if($('#C007tMensajesEnviadoTxMensajeEnv').val().length <=9)
        {createErrorDiv('C007tMensajesEnviadoTxMensajeEnv',' El mensaje debe tener al menos 10 caracteres ');return false;}

    $(".error-message").remove();

     $('#img').show();

    return true;
}

function mayor(fecha, fecha2){
var xMes=fecha.substring(3, 5);
var xDia=fecha.substring(0, 2);
var xAnio=fecha.substring(6,10);
var yMes=fecha2.substring(3, 5);
var yDia=fecha2.substring(0, 2);
var yAnio=fecha2.substring(6,10);
if (xAnio > yAnio){
	return(true);
}else{
	if (xAnio == yAnio){
		if (xMes > yMes){
      		return(true);
		}
 		if (xMes == yMes){
			if (xDia > yDia){
				return(true);
			}else{
				return(false);
			}
		}else{
			return(false);
		}
	}else{
		return(false);
	}
}
}

function validarReporteEnviado(){

   if ($('#fecha_desde').val() == '')
        {createErrorDiv('fecha_desde',' Campo Obligatorio ');return false;}

   if ($('#fecha_hasta').val() == '')
        {createErrorDiv('fecha_hasta',' Campo Obligatorio ');return false;}

        if (mayor($('#fecha_desde').val(), $('#fecha_hasta').val())){alert("Error: El campo fecha desde no puede ser mayor que el campo fecha hasta.");$('#fecha_hasta').focus();return false;}
        //alert('listo para guardar');
    return true;
}

function validarReporteGrupos(){


   if ($('#Mv011DestinatarioGrupoC003tGrupoId').val() == '')
        {createErrorDiv('Mv011DestinatarioGrupoC003tGrupoId',' Campo Obligatorio ');return false;}

   if ($('#sub_categoria').val() == '')
        {createErrorDiv('sub_categoria',' Campo Obligatorio ');return false;}

    return true;
}


function cargarFigComByRegion(elemento,accion)
{
    alert(123);
   $.get('/Mv007SmsEnviadoReportes/sms/',{accion:accion},function(options) {
        //$(elemento).html(options);
        alert(options);
        alert(12);
    });
}