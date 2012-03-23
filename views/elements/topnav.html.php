<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<h3 class="brand">
				<a href="<?=$this->url('/'); ?>">
					<?=$this->html->image('logo.png', array('height' => '40')); ?>
					<span><?= $this->app->name(); ?></span>
				</a>
			</h3>

			<div class="nav-collapse">
				<ul class="nav">
					<li><?php echo $this->html->link('Start', '/'); ?></li>
				</ul>
			</div>

		</div>
	</div>
</div>