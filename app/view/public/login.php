<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>

<body>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/jquery.pattern.js"></script>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/jquery.request.js"></script>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/captcha.js"></script>
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
        <h4 class="modal-title"><font><font style="color:black">Area de Clientes</font></font></h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
            <label class="control-label" style="color:black" for="focusedInput">Login</label>
            <input class="form-control" id="inputUser" type="text" value="" placeholder="User">
        </div>
          
        <input type="password" id="inputPassword" class="form-control" placeholder="Password">
        
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSubmit" class="btn btn-primary"><font><font>Entrar cPanel</font></font></button>
        <p id="loginMessague"></p>
        <div id="from" style="display:none;">
        <p id="captcha"></p>
        <input class="form-control" id="inputCaptcha" type="text" value="">
        </div>
        <h4><a href="register">o registrarme</a></h4>
        <noscript>
          <div class="content-404">
            <h4><b>*Login Desabilitado</b></h4>
          </div>
        </noscript>
      </div>
    </div>
  </div>
</div>
	</div>
  <script src="<?php echo $GLOBALS['application']->getURIPages()?>js/formLogin.js"></script>
</body>
</html>