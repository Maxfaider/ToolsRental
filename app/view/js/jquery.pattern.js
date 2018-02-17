function validatorText(cadena) {
    var patron = /^[a-zA-Z\s]*$/;
    if(!cadena.search(patron))
      return true;
    return false;
}

function validatorTextInRegular(cadena) {
    var patron = /^[a-zA-Z\-#\s0-9]*$/;
    if(!cadena.search(patron))
      return true;
    return false;
}

function validatorempty(cadena) {
    if(cadena == '' || cadena == null) 
        return false;
    return true;
}

function validatorNumeric(cadena) {
    var patron = /^\d*$/;
    if(!cadena.search(patron))
      return true;
    else
      return false;
}

function validatorLength(cadena, min, max) {
    if(cadena.length > min && cadena.length <=max) 
        return true;
    return false;
}

function validatorEmail(correoElectronico) {
    var patron = /^([a-z]+[a-z1-9._-]*)@{1}([a-z1-9\.]{2,})\.([a-z]{2,3})$/;
    if(!correoElectronico.search(patron))
      return true;
    else
      return false;
}