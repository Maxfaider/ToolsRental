<?php

$FlagAlfaNumeric = ctype_alnum($arguments);
  
?>

<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>

<body>
	<header id="header"><!--header-->
	    <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
	    <?php include $GLOBALS['application']->getURIHtml()."header_middle.php"?> 
		<?php include $GLOBALS['application']->getURIHtml()."header_bottom.php"?>
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
				    <?php include $GLOBALS['application']->getURIHtml()."menu_category.php"?>
				</div>
				<?php if($FlagAlfaNumeric) {?>

				<?php 
				    require 'app/dao/Database.class.php';
				    require 'app/dao/connect/connection.class.php';
					require 'app/dao/connect/MySQLi_connect.class.php';
					require 'app/dao/Dao.class.php';
					require 'app/dao/ToolDao.class.php';
					require 'app/model/tools_rental/Tool.class.php';
					
					$clientBase = new DataBase('Mysql', 'app/config/databases.ini');
					$connection = new MySQLi_connect($clientBase);

					$toolDao = new ToolDao();
					$toolDao->setConnection($connection);
					$tools_array = $toolDao->toList(array('id'), array($arguments));
                    
					$size = count($tools_array);

					if($size == 1) {
						$tool = $tools_array[0];
					?>

				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/tools/<?php echo $tool->getid()?>.png" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $tool->getName()?></h2>
								<p>Web ID: <?php echo $tool->getid()?></p>
								<span>
									<span><p><?php echo '$'.$tool->getPrice()?></span>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-archive"></i>
										Añadir a mi Caja
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Rent it now</h2>
						
					</div><!--/recommended_items-->
				</div>
				<?php } else 
				          echo '<h1>no found</h1>'?>
				<?php } else 
				          echo '<h1>no found</h1>'?>
			</div>
		</div>
	</section>
	
	<?php include $GLOBALS['application']->getURIHtml().'footer.php'?>
	<?php include $GLOBALS['application']->getURIHtml().'script.php'?>
</body>
</html>