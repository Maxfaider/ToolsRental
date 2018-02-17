<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>

<body>
	<header id="header"><!--header-->
	   <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
	   <?php include $GLOBALS['application']->getURIHtml()."header_middle.php"?>
	   <?php include $GLOBALS['application']->getURIHtml()."header_bottom.php"?>
	</header><!--/header-->
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>FERRATEC S.A.S</h1>
									<h2>PLANTAS ELÉCTRICAS</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Plantas.png" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1>FERRATEC S.A.S</h1>
									<h2>PLATAFORMAS DE ELEVACIÓN</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Plataformas.png" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1>FERRATEC S.A.S</h1>
									<h2>MAQUINARIA MEDIA</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Maquinaria.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				    <?php include $GLOBALS['application']->getURIHtml()."menu_category.php"?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c1.jpg" alt="" />
											<p>MAQUINARIA AMARILLA</p>
											<a href="category/1" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c2.jpg" alt="" />
											<p>ANDAMIOS Y FORMALETERIA</p>
											<a href="category/2" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c3.png" alt="" />
											<p>EQUIPOS DE CONSTRUCCIÓN</p>
											<a href="category/3" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c4.jpg" alt="" />
											<p>EQUIPOS DE FIJACIÓN</p>
											<a href="category/4" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c5.jpg" alt="" />
											<p>HERRAMIENTAS ELÉCTRICAS</p>
											<a href="category/5" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c6.jpg" alt="" />
											<p>PLANTAS ELÉCTRICAS</p>
											<a href="category/6" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/Category/c7.jpg" alt="" />
											<p>SOLDADORES Y COMPLEMENTOS</p>
											<a href="category/7" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<?php include $GLOBALS['application']->getURIHtml().'footer.php'?>
    <?php include $GLOBALS['application']->getURIHtml().'script.php'?>
</body>
</html>