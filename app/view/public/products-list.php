<?php

$FlagNumeric = ctype_digit($arguments);
  
?>

<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>
<body>
	<header id="header"><!--header-->
	    <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
	    <?php include $GLOBALS['application']->getURIHtml()."header_middle.php"?> 
	</header><!--/header-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Productos</h2>

						<?php if($FlagNumeric) {?>

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
							$tools_array = $toolDao->toList(array('idCategory'), array($arguments));

							$size = count($tools_array);

							if($size > 0) {
						?>
                        <?php foreach ($tools_array as $index) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $GLOBALS['application']->getURIPages()?>images/tools/<?php echo $index->getid()?>.png" alt="" />
											<p><?php echo $index->getName()?></p>
											<p><?php echo 'Web ID: '.$index->getid()?></p>
											<p><?php echo '$'.$index->getPrice()?></p>
											<a href="<?php echo $GLOBALS['application']->getURIBase()?>product/<?php echo $index->getId()?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Ver</a>
										</div>
								</div>
							</div>
						</div>
						<?php } ?>
							<?php } else 
							          echo '<h1>no found</h1>'; ?>
						<?php } else 
							echo '<h1>no found</h1>';
						?>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>

	<?php include $GLOBALS['application']->getURIHtml().'footer.php'?>
    <?php include $GLOBALS['application']->getURIHtml().'script.php'?>
</body>
</html>