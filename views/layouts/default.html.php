<!DOCTYPE html>
<html class="<?php echo \lithium\core\Environment::get(); ?>">
<head>
	<?php echo $this->_render('element', 'head'); ?>
</head>
<body class="app" data-spy="scroll">
	<?php echo $this->_render('element', 'topnav'); ?>
	<div class="container">
		<header id="header">
			<?= $this->_render('element', 'header'); ?>
		</header>
		<div id="content">
			<?= $this->sessionMessage->renderAll() ?>
			<?= $this->content(); ?>
		</div>
		<footer id="footer">
			<?= $this->_render('element', 'footer'); ?>
		</footer>
	</div>
	<script type="text/javascript" charset="utf-8">
		head.js(
			"<?php echo $this->url('/js/jquery.min.js'); ?>",
			"<?php echo $this->url('/js/icanhaz.min.js'); ?>",
			"<?php echo $this->url('/js/bootstrap.min.js'); ?>",
			"<?php echo $this->url('/js/bootbox.min.js'); ?>",
			"<?php echo $this->url('/js/moment.min.js'); ?>",
			"<?php echo $this->url('/js/tools.js'); ?>",
			"<?php echo $this->url('/js/app.js'); ?>",
			function() {
				ich.grabTemplates();
			}
		);
	</script>
	<?= $this->_render('element', 'bottom'); ?>
</body>
</html>