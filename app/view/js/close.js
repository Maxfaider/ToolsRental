window.addEventListener('load', exits, false);

function exits() {
	var btnExit = document.getElementById('btnExit');
	if(btnExit != null) {
        console.log('init');
        btnExit.addEventListener('click', close_session);
	}
	
}

function close_session() {
    let uri = 'http://localhost/RentTools/app/request/get_data_close_session.php';

    request = new Request(uri, 'POST');
    request.getHttp().onload = function() {
        location.href = request.getHttp().responseText;
	}
   
    request.getHttp().send('session=0');
}