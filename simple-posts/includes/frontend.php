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
<div class="fl-simple-post fl-simple-post-<?php echo $settings->template; ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">
	<?php

	  while($query->have_posts()) {

		$query->the_post();

		include $module->dir . 'includes/template-' . $settings->template . '.php';
	}

	?>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
