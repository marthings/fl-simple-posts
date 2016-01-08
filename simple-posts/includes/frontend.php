<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

?>
<?php

// Get the query data.
$query = FLBuilderLoop::query($settings);

// Render the posts.
if($query->have_posts()) :

?>
<div class="fl-simple-post fl-simple-post-<?php echo $settings->template; ?><?php if ($settings->masonry == 'yes' ) { ?> masonry<?php } ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">
	<?php

	if ($settings->template == 'grid' ) {

		echo '<div class="row">';

		while($query->have_posts()) {

			$query->the_post();

				include $module->dir . 'includes/template-grid.php';

		}

		echo '</div>';

	} elseif ($settings->template == 'gallery' ) {

		while($query->have_posts()) {

			$query->the_post();

				include $module->dir . 'includes/template-gallery.php';

		}

	} elseif ($settings->template == 'list' ) {

		echo '<ul class="fl-sp-list ' . $settings->list_class . '">';

		while($query->have_posts()) {

			$query->the_post();

				include $module->dir . 'includes/template-list.php';

		}

		echo '</ul>';

	} else {

		while($query->have_posts()) {

			$query->the_post();

				include $module->dir . 'includes/template-' . $settings->template . '.php';

		}
	}

	// Render the pagination.
	if($settings->pagination == 'yes') { ?>

		<div class="fl-builder-pagination">
			<?php FLBuilderLoop::pagination($query); ?>
		</div>

	<?php } ?>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
