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

?>

.fl-sp-imageleft {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.fl-sp-imageleft .fl-sp-thumbnail {
  -webkit-box-flex: 1 1 <?php echo $settings->imageleft_size; ?>%;
  -webkit-flex: 1 1 <?php echo $settings->imageleft_size; ?>%;
  -ms-flex: 1 1 <?php echo $settings->imageleft_size; ?>%;
  flex: 1 1 <?php echo $settings->imageleft_size; ?>%;
}

.fl-sp-imageleft .fl-sp-content {
  -webkit-box-flex: 1 1 <?php echo $settings->imageleft_contentsize; ?>%;
  -webkit-flex: 1 1 <?php echo $settings->imageleft_contentsize; ?>%;
  -ms-flex: 1 1 <?php echo $settings->imageleft_contentsize; ?>%;
  flex: 1 1 <?php echo $settings->imageleft_contentsize; ?>%;
	padding:20px;
}

.fl-sp-thumbnail {
	margin-bottom:<?php echo $settings->thumb_spacing; ?>px;
}

.fl-node-<?php echo $id; ?> .fl-sp-entry {
	border-color:#<?php echo $settings->border_color; ?>;
	border-style:solid;
	border-width:<?php echo $settings->border_size; ?>px;
	border-radius:<?php echo $settings->border_radius; ?>px;
	background:#<?php echo $settings->background_color; ?>;
	box-shadow:<?php echo $settings->box_shadow_settings; ?> #<?php echo $settings->box_shadow; ?>;
	margin-top:<?php echo $settings->block_margin_top; ?>px;
	margin-bottom:<?php echo $settings->block_margin_bottom; ?>px;
	margin-left:<?php echo $settings->block_margin_left; ?>px;
	margin-right:<?php echo $settings->block_margin_right; ?>px;
}

.fl-node-<?php echo $id; ?> .fl-sp-content {
	padding:<?php echo $settings->block_padding_content; ?>px <?php echo $settings->block_padding_content; ?>px <?php echo $settings->block_padding_content; ?>px <?php echo $settings->block_padding_content; ?>px;
	padding-top:<?php echo $settings->block_padding_top; ?>px;
	padding-bottom:<?php echo $settings->block_padding_bottom; ?>px;
	padding-left:<?php echo $settings->block_padding_left; ?>px;
	padding-right:<?php echo $settings->block_padding_right; ?>px;
}

.fl-node-<?php echo $id; ?> .fl-sp-content {
  color:#<?php echo $settings->text_color; ?> !important;
}

.fl-node-<?php echo $id; ?> .fl-sp-content .fl-sp-heading a,
.fl-node-<?php echo $id; ?> .fl-sp-content .fl-sp-meta a,
.fl-node-<?php echo $id; ?> .fl-sp-content p a  {
  color:#<?php echo $settings->link_color; ?> !important;
}

.fl-node-<?php echo $id; ?> .fl-sp-list .fl-sp-entry {
	padding:<?php echo $settings->list_spacing; ?> 0px;
}

.fl-node-<?php echo $id; ?> .fl-simple-post-gallery .fl-sp-content {
	background-color: rgba(<?php echo implode(',', FLBuilderColor::hex_to_rgb($settings->background_color)) ?>, <?php echo $settings->background_opacity/100; ?>);
	box-shadow:<?php echo $settings->box_shadow_settings; ?> #<?php echo $settings->box_shadow; ?>;
}