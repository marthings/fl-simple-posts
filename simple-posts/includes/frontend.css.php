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

.fl-sp-row { 
	margin-right: -<?php echo $settings->grid_gutter; ?>px;
	margin-left: -<?php echo $settings->grid_gutter; ?>px;
}
.fl-sp-row:after {
  content:"";
  display:table;
  clear:both;
}
	
.fl-simple-post-grid [class^=fl-sp-col-]{
	float:left;
	position: relative;
	min-height: 1px;
	padding-right: <?php echo $settings->grid_gutter; ?>px;
	padding-left: <?php echo $settings->grid_gutter; ?>px;
	margin-bottom: <?php echo $settings->grid_spacing; ?>px;
}

