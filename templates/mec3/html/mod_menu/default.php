<?php defined('_JEXEC') or die; ?>
<ul class="nav navbar-nav">
	<?php foreach ($list as $i => &$item) : ?>
	<?php
		$linktype = $item->title;
		$flink = JFilterOutput::ampReplace ( htmlspecialchars ( $item->flink ) );
		$clase = '';
		if (($item->id == $active_id) or ($item->type == 'alias' and $item->params->get ( 'aliasoptions' ) == $active_id)) {
			$clase .= 'current ';
		}
		if (in_array ( $item->id, $path ) && ! $item->shallower) {
			$clase .= 'active ';
		} elseif ($item->type == 'alias') {
			$aliasToId = $item->params->get ( 'aliasoptions' );
			if (count ( $path ) > 0 && $aliasToId == $path [count ( $path ) - 1] && ! $item->shallower) {
				$clase .= 'active ';
			} elseif (in_array ( $aliasToId, $path )) {
				$clase .= 'active-parent ';
			}
		}
		if ($item->deeper) {
			$clase .= 'dropdown ';
		}
		?>
	<li class="<?php echo trim($clase); ?>"><a
		<?php if ($item->deeper) : ?> href="#" class="dropdown-toggle"
		data-toggle="dropdown" role="button" aria-expanded="false"
		<?php else : ?> href="<?php echo $flink; ?>" <?php endif; ?>>
			<?php echo $linktype; ?><?php if ($item->deeper) : ?> <span
			class="caret"></span><?php endif; ?>
		</a>
		<?php
		if ($item->deeper) {
			echo '<ul class="dropdown-menu" role="menu">';
		} elseif ($item->shallower) {
			// The next item is shallower.
			echo '</li>';
			echo str_repeat ( '</ul></li>', $item->level_diff );
		} else {
			// The next item is on the same level.
			echo '</li>';
		}
		?>
	<?php endforeach; ?>
</ul>
