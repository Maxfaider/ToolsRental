<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo $GLOBALS['application']->getURIBase()?>"><img id="test" src="<?php echo $GLOBALS['application']->getURIPages()?>/images/logo.png" alt="" /><h3>FERRATEC CARTAGENA S.A.S</h3></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if($GLOBALS['account'] == null) { ?>
								<li><a href="<?php echo $GLOBALS['application']->getURIBase()?>login"><img src="<?php echo $GLOBALS['application']->getURIPages()?>images/tool-box-icon.png" >Mi Caja de Herramientas</a></li>
								<li><a href="<?php echo $GLOBALS['application']->getURIBase()?>login"><i class="fa fa-lock"></i> Login</a></li>
                <?php } else { ?>
								<li><a href="<?php echo $GLOBALS['application']->getURIBase()?>cpanel"><img src="<?php echo $GLOBALS['application']->getURIPages()?>images/tool-box-icon.png" >Mi Caja de Herramientas</a></li>
								<li>
									<div class="dropdown">
									<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo ' '.$GLOBALS['account']->getUser()?>
									<span class="caret"></span></button>
									<ul class="dropdown-menu">
									  <li id="btnExit"><a><i class="fa fa-unlock"></i>Salir</a></li>
									</ul>
								  </div> 
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
</div><!--/header-middle-->