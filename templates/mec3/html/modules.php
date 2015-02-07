<?php function modChrome_banner ($module, &$params, &$attribs) { ?>
<div class="inner">
	<header>
		<h2>
			<img src="<?php echo JUri::root(); ?>/templates/mec3/images/logo.png" />
		</h2>
	</header>
	<div>
		<?php echo $module->content; ?>
	</div>
	<footer>
		<ul class="buttons vertical">
			<li><a href="#main" class="button fit scrolly"><?php echo JText::_('COM_CONTENT_READ_MORE_TITLE'); ?></a></li>
		</ul>
	</footer>
</div>
<?php } ?>
