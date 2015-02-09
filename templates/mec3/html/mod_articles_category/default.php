<?php defined('_JEXEC') or die; ?>
<?php if ($params->get('moduleclass_sfx') != 'staf') : ?>
<?php foreach ($list as $i => $item) : ?>
<?php $img = json_decode($item->images);
if ($i % 4 == 0) : ?><div class="row"><?php endif; ?>
	<div class="col-sm-3 col-md-3">
		<div class="wow fadeInLeft" data-wow-delay="0.2s">
			<div class="service-box">
				<div class="service-icon text-center">
					<img class="img-rounded"
						src="<?php echo $img->image_intro ? $img->image_intro : JUri::root() . '/templates/mec3/img/avatar-xs.jpg' ?>"
						alt="<?php echo $item->title; ?>" />
				</div>
				<div class="service-desc">
					<h5 class="text-center"><?php echo $item->title; ?></h5>
					<?php echo $item->introtext ?>
				</div>
			</div>
		</div>
	</div>
<?php if ($i % 4 == 3 || ($i < 4 && $i == count($list) - 1)) : ?></div><?php endif; ?>
<?php endforeach; ?>
<?php else : ?>
<?php foreach ($list as $i => $item) : ?>
<?php $img = json_decode($item->images);
if ($i % 4 == 0) : ?><div class="row"><?php endif; ?>
	<div class="col-xs-6 col-sm-3 col-md-3">
		<div class="wow bounceInUp" data-wow-delay="1s">
			<div class="team boxed-grey">
				<div class="inner">
					<h5 class="text-center"><?php echo $item->title; ?></h5>
					<div class="subtitle"><?php echo $item->introtext ?></div>
					<div class="avatar text-center">
						<img class="img-responsive img-circle"
							src="<?php echo $img->image_intro ? $img->image_intro : JUri::root() . '/templates/mec3/img/default-avatar.jpg' ?>"
							alt="<?php echo $item->title; ?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
<?php if ($i % 4 == 3 || ($i < 4 && $i == count($list) - 1)) : ?></div><?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>