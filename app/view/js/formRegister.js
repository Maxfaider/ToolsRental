window.addEventListener('load', init, false);

function init() {
    window.bit = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    window.focus = 1;

    window.inputName = document.getElementById('inputName');
    inputName.addEventListener('blur', validateInputName);

    window.inputLastName = document.getElementById('inputLastName');
    inputLastName.addEventListener('blur', validateInputLastName);

    window.inputAddress = document.getElementById('inputAddress');
    inputAddress.addEventListener('blur', validateInputAddress);

    window.inputEmail = document.getElementById('inputEmail');
    inputEmail.addEventListener('blur', validateInputEmail);

    window.inputCompany = document.getElementById('inputCompany');
    inputCompany.addEventListener('blur', validateInputCompany);

    window.inputPatrimony = document.getElementById('inputPatrimony');
    inputPatrimony.addEventListener('blur', validateInputPatrimony);

    window.inputDocument = document.getElementById('inputDocument');
    inputDocument.addEventListener('blur', validateInputCode);

    window.inputUser = document.getElementById('inputUser');
    inputUser.addEventListener('blur', validateInputUser);

    window.inputPass = document.getElementById('inputPassword');
    inputPass.addEventListener('blur', inputPassword);

    window.inputPass2 = document.getElementById('inputRePassword');
    inputPass2.addEventListener('blur', inputRePassword);

    document.addEventListener('keydown', onkey);
    window.btnSubmit = document.getElementById('submit');
    btnSubmit.addEventListener('click', validateInputAll);
}

function validateInputName() {
    var text = document.getElementById('inputName').value;
    bit[0] = 0;

    if(!validatorempty(text)) 
        messagueou_output('NameMessague', '*campo vacio', 'red');
    else if (!validatorText(text))
        messagueou_output('NameMessague', '*caracteres Invalidos', 'red');
    else if (!validatorLength(text, 3, 20))
        messagueou_output('NameMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('NameMessague', 'Bien!', 'green'); 
        bit[0] = 1;
    }
}

function validateInputLastName() {
    var text = document.getElementById('inputLastName').value;
    bit[1] = 0;
    
    if(!validatorempty(text)) 
        messagueou_output('LastNameMessague', '*campo vacio', 'red');
    else if (!validatorText(text))
        messagueou_output('LastNameMessague', '*caracteres Invalidos', 'red');
    else if (!validatorLength(text, 5, 50))
        messagueou_output('LastNameMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('LastNameMessague', 'Muy Bien!', 'green');
        bit[1] = 1;
    }
}

function validateInputAddress() {
    var text = document.getElementById('inputAddress').value;
    bit[2] = 0;

    if (!validatorTextInRegular(text))
        messagueou_output('AddressMessague', '*caracteres Invalidos', 'red');
    else if (!validatorLength(text, 5, 50))
        messagueou_output('AddressMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('AddressMessague', 'Excelente!', 'green');
        bit[2] = 1;
    }
}

function validateInputEmail() {
    var text = document.getElementById('inputEmail').value;
    bit[3] = 0;

    if (!validatorEmail(text))
        messagueou_output('EmailMessague', '*Que es esto!', 'red');
    else if (!validatorLength(text, 5, 50))
        messagueou_output('EmailMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('EmailMessague', 'Gran Trabajo!', 'green');
        bit[3] = 1;
    }
}

function validateInputCompany() {
    var text = document.getElementById('inputCompany').value;
    bit[4] = 0;

    if(!validatorempty(text)) 
        messagueou_output('CompanyMessague', '*campo vacio', 'red');
    else if (!validatorText(text))
        messagueou_output('CompanyMessague', '*caracteres Invalidos', 'red');
    else if (!validatorLength(text, 3, 50))
        messagueou_output('CompanyMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('CompanyMessague', 'Eres Grande!', 'green');
        bit[4] = 1;
    }
}

function validateInputPatrimony() {
    var text = document.getElementById('inputPatrimony').value;
    bit[5] = 0;

    if (!validatorText(text))
        messagueou_output('PatrimonyMessague', '*Si lo vas a llenar, llenalo bien, pon caracteres validos', 'red');
    else if(validatorempty(text))
        if(validatorLength(text, 3, 50)) {
            messagueou_output('PatrimonyMessague', 'Mi Heroe!', 'green');
            bit[5] = 1;
        } else
            messagueou_output('PatrimonyMessague', '*No tiene la longitud esperada', 'red');
    else {
        messagueou_output('PatrimonyMessague', '', 'green');
        bit[5] = 1;
    }
}

function validateInputCode() {
    var text = document.getElementById('inputDocument').value;
    
    if(!validatorempty(text)) {
        messagueou_output('documentMessague', '*campo vacio', 'red');
        bit[6] = 0;
    } else if (!validatorNumeric(text)) {
        messagueou_output('documentMessague', '*caracteres Invalidos (Solo numeros)', 'red');
        bit[6] = 0;
    } else if (!validatorLength(text, 9, 20)) {
        messagueou_output('documentMessague', '*No tiene la longitud esperada', 'red');
        bit[6] = 0;
    } else {
        if(focus == 1) {
            messagueou_output('documentMessague', 'Comprobando...', 'green');
            query(text, 'document', 'documentMessague', ['Nah!, alguien esta con este documento',
                'Increible!'], 6); 
        }
    }

}

function inputPassword() {
    var text = document.getElementById('inputPassword').value;
    bit[7] = 0;

    if(!validatorempty(text)) 
        messagueou_output('PasswordMessague', '*campo vacio', 'red');
    else {
        messagueou_output('PasswordMessague', 'No se lo dire a nadien', 'green');
        bit[7] = 1;
    }
}

function inputRePassword() {
    var text = document.getElementById('inputRePassword').value;
    bit[8] = 0;

    if(!validatorempty(text)) 
        messagueou_output('RePasswordMessague', '*campo vacio', 'red');
    else if (text !== document.getElementById('inputPassword').value)
        messagueou_output('RePasswordMessague', '*No coincide', 'red');
    else {
        messagueou_output('RePasswordMessague', 'Ok', 'green');
        bit[8] = 1;
    }
}

function onkey(event) {
    const keyName = event.keyCode;
    if(keyName == 13) {
        validateInputAll();
    }
}

function validateInputUser() {
    var text = document.getElementById('inputUser').value;
    
    if (!validatorTextInRegular(text)) {
        messagueou_output('UserMessague', '*caracteres Invalidos', 'red');
        bit[9] = 0;
    } else if (!validatorLength(text, 3, 20)) {
        messagueou_output('UserMessague', '*No tiene la longitud esperada', 'red');
        bit[9] = 0;
    } else {
        if(focus == 1) {
            messagueou_output('UserMessague', 'Comprobando...', 'green');
            query(text, 'user', 'UserMessague', ['Oop!, alguien lo a tomado',
                'No esta mal'], 9);
        } 
    }
}

function validateInputAll() {
    if(focus == 1) {
        wait();
        validateInputName();
        validateInputLastName();
        validateInputAddress();
        validateInputEmail();
        validateInputCompany();
        validateInputPatrimony();
        validateInputUser();
        validateInputCode();
        inputPassword();
        inputRePassword();
    
        var count = 0;
    
        for (var index=0; index < 10; index++) {
            count+= bit[index];
        }
        if (count == 10)
            onSend();
        else {
            var output = document.getElementById('load');
            output.innerHTML = '';
            messagueou_output('response', '*revise los campos', 'red'); 
            focus = 1;
        }
    }
}

function onSend() {
    let uri = 'http://localhost/RentTools/app/request/get_data_register_client.php';

    request = new Request(uri, 'POST');
    request.getHttp().onload = function() {
        messagueou_output('response', '', 'red'); 
        var output = document.getElementById('load');
        output.innerHTML = '';

        if(request.getHttp().responseText == 'failure') 
            alert('No se puedo enviar la solicitud');
        else {
            alert('Solicitud de Registro ha sido enviada');
            redirect();
        }
        focus = 1;
    }

    var data = loadData();
    request.getHttp().send('json=' + data);
}

function wait() {
    focus = 0;
    var img = document.createElement("img");
    img.src = 'app/view/images/load.gif';
    img.innerHTML = "espere..";
    img.style = 'green';

    var output = document.getElementById('load');
    output.appendChild(img);
}

function loadData() {
    var json = '{' +
        '"document":' + '"' + inputDocument.value + '",' +
        '"name":' + '"' + inputName.value + '",' +
        '"lastName":' + '"' + inputLastName.value + '",' +
        '"address":' + '"' + inputAddress.value + '",' +
        '"email":' + '"' + inputEmail.value + '",' +
        '"company":' + '"' + inputCompany.value + '",' +
        '"patrimony":' + '"' + inputPatrimony.value + '",' +
        '"user":' + '"' + inputUser.value + '",' +
        '"password":' + '"' + inputPass.value + '"' +
        '}';
    return json; 
}

function redirect() {
    location.href = "login";
}

function messagueou_output(element, messague, color) {
    var output = document.getElementById(element);

    output.style.color = color;
    output.innerHTML = messague;
}

function query(data, type, out, messague, index) {
    let uri = 'http://localhost/RentTools/app/request/get_data_query.php';
    
    request = new Request(uri, 'POST');
    request.getHttp().onload = function() {
        if(request.getHttp().responseText == 'no found') {
            messagueou_output(out, messague[1], 'green');
            bit[index] = 1;
        } else {
            messagueou_output(out, messague[0], 'red'); 
        }
    }
    
    request.getHttp().send('query=' + data +'&type=' + type);
}