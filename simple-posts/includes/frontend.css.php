<?php
/**
 * This file should contain frontend styles that
 * will be applied to individual module instances.
 *
 * You have access to three variables in this file:
 *
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
 *
 */

	if( $settings->normal_layout == "imageleft") { ?>
	.fl-simple-post-normal .fl-sp-thumbnail {

	}
	.fl-simple-post-normal .imageleft .fl-sp-thumbnail {
		float:left;
		padding:0 20px 20px 0;
		width:<?php echo $settings->imageleft_size; ?>%;
	}
	.fl-simple-post-normal .imageleft .fl-sp-thumbnail img {
		max-width:100%;
		height:auto;
	}
	.fl-simple-post-normal .imageleft .fl-sp-content {
		float:left;
		width:<?php echo $settings->imageleft_contentsize; ?>%;
	}
<?php } ?>
