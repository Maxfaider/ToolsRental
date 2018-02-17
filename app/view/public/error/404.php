<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>

<body>
    <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
	<div class="container text-center">
		<div class="logo-404">
			<a href="<?php echo $GLOBALS['application']->getURIBase()?>"><img src="<?php echo $GLOBALS['application']->getURIPages()?>images/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<h2><a href="<?php echo $GLOBALS['application']->getURIBase()?>">Back Home</a></h2>
		</div>
	</div>
</body>
</html>