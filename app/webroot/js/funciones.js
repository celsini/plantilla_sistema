/**************************************************************/
//elimina los espacios en blanco de la izquierda de la cadena
/**************************************************************/
function ltrim(s) {
    return s.replace(/^\s+/, "");
}

/***********************************************************/
//elimina los espacios en blanco de la derecha de la cadena
/***********************************************************/
function rtrim(s) {
    return s.replace(/\s+$/, "");
}

/***********************************************************************/
//elimina los espacios en blanco de la derecha e izquierda de la cadena
/***********************************************************************/
function trim(s) {
    return rtrim(ltrim(s));
}



function isNumeric(sText) {
                   var ValidChars = "0123456789";
                   var IsNumber=true;
                   var Char;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                      Char = sText.charAt(i);
                      if (ValidChars.indexOf(Char) == -1) {
                         IsNumber = false;
                     }
                  }
                   return IsNumber;
               }

function extraChars(sText) {
                   var ValidChars = "@#~¬<>&%$!ªº\*Çç^^``+ŽŽ¡¿?=";
                   var cChar=0;
                   var Char;
                for (i = 0; i < sText.length; i++) {
                      Char = sText.charAt(i);
                      if (ValidChars.indexOf(Char) != -1) {
                         cChar++;
                     }
                  }
                if (cChar > 0) {
                       return true;
                } else {
                    return false;
                }
               }

function findNumbers(sText) {
                   var ValidChars = "0123456789";
                   var cChar=0;
                   var Char;
                for (i = 0; i < sText.length; i++) {
                      Char = sText.charAt(i);
                      if (ValidChars.indexOf(Char) != -1) {
                         cChar++;
                     }
                  }
                   if (cChar > 0) {
                       return true;
                } else {
                    return false;
                }
               }



function checkSeguridad(clave) {
                var nivelSeguridad = 0;
                var obj = document.getElementById("infoNivel");
                if (clave.length > 0) {
                    if (clave.length > 10 && clave.length <= 15) {
                        nivelSeguridad++;
                        nivelSeguridad++;
                    } else if (clave.length > 5 && clave.length <= 10) {
                        nivelSeguridad++;
                    } else if (clave.length > 15) {
                        nivelSeguridad = (nivelSeguridad + 3);
                    }

                    if (isNumeric(clave) == true) {
                        nivelSeguridad++;
                    } else {
                        if (findNumbers(clave) == true) {
                            if (clave.length > 5) {
                                nivelSeguridad = (nivelSeguridad + 3);
                            } else {
                                nivelSeguridad++;
                            }
                        } else {
                            nivelSeguridad++;
                        }
                    }

                    if (extraChars(clave) == true) {
                        if (clave.length > 5) {
                            nivelSeguridad = (nivelSeguridad + 4);
                        } else {
                            nivelSeguridad++;
                        }
                    }
                }
                if (nivelSeguridad == 0) {
                    obj.innerHTML = "";
                } else if (nivelSeguridad > 0 && nivelSeguridad < 5) {
                    obj.innerHTML = "BAJO";
                } else if (nivelSeguridad == 5 || nivelSeguridad == 6) {
                    obj.innerHTML = "MEDIO";
                } else if (nivelSeguridad > 7 && nivelSeguridad < 10) {
                    obj.innerHTML = "ALTO";
                } else if (nivelSeguridad == 10) {
                    obj.innerHTML = "EXCELENTE";
                }
            }



/*Crear el div con el mensaje de error*/
function createErrorDiv(nombre,div_error,msg)
{
	new Insertion.Before(nombre,div_error);
	if(msg == "")
		$("msg_"+nombre).update("&darr;&nbsp;Campo Obligatorio&nbsp;&darr;");
	else
		$("msg_"+nombre).update("&darr;&nbsp;"+ msg +"&nbsp;&darr;");


	$(nombre).focus();
	return false;
}


/*Elimina cualquier error anterior y sólo muestra el error con el focus*/
function hideError(idDiv)
{

	var arrayNodosFamilia = $$('div.error-message,div.message');
	var existe = $('msg_'+ idDiv);
   arrayNodosFamilia.each(function(div){Element.hide(div)});

   if(existe)
		$('msg_'+ idDiv).remove();
}

function setNewValue(){

    $('UsuarioCedulaFinal').value=$F('UsuarioIdentificador');
   
}

function validarCamposForm(){
var formName = "";
$('UsuarioIndicador').value=$('UsuarioIndicador').value.toUpperCase();
for(i=0;i < document.forms[0].elements.length;i++)
	{
	 	var ElementId=document.forms[0].elements[i].id;
	 	var ElementType;
	 	if(ElementId)
	 	{
			var EleClass = $(ElementId).classNames();
			ElementType	 = $(ElementId).type;


			if( ((ElementType=="file") || (ElementType=="text") || (ElementType=="textarea") ||(ElementType=="select-one") || (ElementType=="password")) && (EleClass != "opcional"))
			{
				nombre=ElementId;
				str=$(nombre).value
				str=trim(str);
				str = str.stripScripts();
				if((formName == 'reportes') &&($(nombre).value == 0))
					str="";
				if(str=="")
			 	{
			    	var div_error = "<div id='msg_" + nombre + "' class='error-message'></div>";
			    	$(nombre).value=str;
				 	hideError(nombre);
				   return createErrorDiv(nombre,div_error,"");
			 	}
			 }
	  	}
	}
        
return true;

}

function alertResponse(reply)
{
    // just print the JSON notation response in an alert message
    //alert('JSON: ' + reply.responseText);
    $('infoNivel').innerHTML = reply.responseText;

}

function checkForm()
{
   var response = confirm("Are you sure you want to submit this form?");
   if(!response){
      event.stop();
   }

}

function contractSetupSubmit() { return false; }
