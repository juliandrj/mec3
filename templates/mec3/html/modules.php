<?php function modChrome_banner ($module, &$params, &$attribs) { ?>
<div class="slogan">
	<h2><img src="<?php echo JUri::root(); ?>/templates/mec3/img/logo.png" /></h2>
	<div class="lema">
		<?php echo $module->content; ?>
	</div>
</div>
<div class="page-scroll">
	<a href="#whoweare" class="btn btn-circle">
		<i class="fa fa-angle-double-down animated"></i>
	</a>
</div>
<?php } ?>

<?php function modChrome_portada ($module, &$params, &$attribs) { ?>
<section id="<?php echo $params->get('moduleclass_sfx'); ?>" class="home-section">
	<div class="heading-about text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
						<div class="section-heading">
							<h2><?php echo $module->title; ?></h2>
							<i class="fa fa-2x fa-angle-down"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<?php echo $module->content; ?>
	</div>
</section>
<?php } ?>