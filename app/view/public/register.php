<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>
<body>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/jquery.pattern.js"></script>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/jquery.request.js"></script>
  <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
	<div class="container text-center">
		<div class="logo-404">
			<a href="home"><img src="<?php echo $GLOBALS['application']->getURIPages()?>images/logo.png" alt="" /></a>
		</div>

    <div id="flotante" class="row">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button  id="btnCerrar" type="button" class="close" data-dismiss="modal" aria-hidden="true"><font><font>&times;</font></font></button>
        <h4 class="modal-title"><font><font style="color:black">Solicitud de Registro</font></font></h4>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label class="control-label" style="color:black" for="focusedInput">Datos Personales</label>
          <input class="form-control" id="inputName" type="text" value="" placeholder="Nombres (obligatorio)">
          <p id="NameMessague"></p>
      </div>
    
      <div class="form-group">
          <input class="form-control" id="inputLastName" type="text" value="" placeholder="Apellidos (obligatorio)">
          <p id="LastNameMessague"></p>
      </div>
    
      <div class="form-group">
          <input class="form-control" id="inputAddress" type="text" value="" placeholder="Dirección (obligatorio)">
          <p id="AddressMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputEmail" type="text" value="" placeholder="Email (obligatorio)">
          <p id="EmailMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputCompany" type="text" value="" placeholder="Empresa (obligatorio)">
          <p id="CompanyMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputPatrimony" type="text" value="" placeholder="Patrimonio (Opcional)">
          <p id="PatrimonyMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputDocument" type="text" value="" placeholder="identificación (obligatorio)">
          <p id="documentMessague"></p>
      </div>

      <div class="form-group">
      <label class="control-label" style="color:black" for="focusedInput">Cuenta</label>
          <input class="form-control" id="inputUser" type="text" value="" placeholder="User">
          <p id="UserMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputPassword" type="password" value="" placeholder="Password">
          <p id="PasswordMessague"></p>
      </div>

      <div class="form-group">
          <input class="form-control" id="inputRePassword" type="password" value="" placeholder="Re-Password">
          <p id="RePasswordMessague"></p>
      </div>
      </div>
      <div class="modal-footer">
        <button id="submit" type="button" class="btn btn-primary"><font><font>Enviar Solicitud</font><p id="load"></p></font></button>
        <p id="response"></p>
        <h4>* La solicitud tarda X. dias, para corroborar la información.</h4>
        <noscript>
          <div class="content-404">
            <h4><b>*Registro Desabilitado</b></h4>
          </div>
        </noscript>
      </div>
    </div>
  </div>
</div>
    </div>
<script src="<?php echo $GLOBALS['application']->getURIPages()?>js/formRegister.js"></script>
</body>
</html>