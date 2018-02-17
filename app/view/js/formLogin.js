window.addEventListener('load', init, false);

function init() {
    
    window.focus = 1;
    window.attempt = 3;

    window.inputuser = document.getElementById('inputUser');
    window.inputPassword = document.getElementById('inputPassword');

    document.addEventListener('keydown', onkey);
    window.btnSubmit = document.getElementById('btnSubmit');
    btnSubmit.addEventListener('click', validateInputAll);
}

function onkey(event) {
    const keyName = event.keyCode;
    if(keyName == 13) {
        validateInputAll();
    }
}

function validateInputAll() {
    if(focus == 1) {

        if (!validatorempty(inputUser.value) || 
            !validatorempty(inputPassword.value)) {
            messague_output('loginMessague', '*Campos vacios', 'red');
        } else if(!validatorTextInRegular(inputUser.value) ) {
            messague_output('loginMessague', '*Acceso Denegado', 'red');
        } else {
            var inputCaptcha = '';
            if(attempt < 0) 
                inputCaptcha = document.getElementById('inputCaptcha').value;
            else {
                valueCaptcha = "";
            }
            console.log(valueCaptcha);
            if(valueCaptcha == inputCaptcha) {
                focus = 0;
                createWait();
                onSend();
                //attempt = 3;
            } else
                messague_output('loginMessague', '*Captcha Invalida', 'red'); 
        }
    }
}

function redirect(uri) {
    location.href = uri;
}

function onSend() {
    let uri = 'http://localhost/RentTools/app/request/get_data_login_client.php';
    
    request = new Request(uri, 'POST');
    request.getHttp().onload = function() {
        onConfirm(request.getHttp().responseText);
    }
    
    var data = '{' + 
        '"user":' + '"' + inputUser.value + '",' +
        '"password":' + '"' + inputPassword.value + '"' + 
        '}';
    
    request.getHttp().send('json=' + data);
}

function createWait() {
    var img = document.createElement("img");
    img.src = 'app/view/images/load.gif';
    var output = document.getElementById('loginMessague');
    output.innerHTML = "";
    output.appendChild(img);
}

function onConfirm(json) {
    var response = JSON.parse(json);
    
    if (response.state == 'Active') {
        redirect(response.uri);
        messague_output('loginMessague', '', 'red');
    } else if(response.state == 'Review') 
        messague_output('loginMessague', '*Este Usuario se encuentra en revisión', 'red');
    else if(response.state == 'Locked') 
        messague_output('loginMessague', '*Este Usuario se encuentra bloqueado', 'red');
    else {
        messague_output('loginMessague', '*Acceso Denegado', 'red'); 
        attempt--;
        
        if(attempt < 0) {
            var value = getramdonCaptcha();
            createCaptcha('captcha', value, 'from'); 
        }
    }

    focus = 1;
}

function messague_output(element, messague, color) {
    var output = document.getElementById(element);

    output.style.color = color;
    output.innerHTML = messague;
}