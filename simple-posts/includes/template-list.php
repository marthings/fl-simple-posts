<li id="post-<?php the_ID(); ?>" <?php post_class('fl-sp-entry'); ?>>

	<?php if($settings->list_icon) { ?>
		<div class="fl-sp-list-icon">
			<i class="<?php echo $settings->list_icon; ?>"></i>
		</div>
	<?php }  // End list_icon ?>

	<div class="fl-sp-content">


	<?php if ($settings->show_heading == 'yes' ) { ?>

		<<?php echo $settings->heading_size; ?>><a class="fl-sp-list-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo $settings->heading_size; ?>>

	<?php } ?>

	<div class="fl-sp-meta">

		<?php if ($settings->show_author == 'yes' ) { ?>

			<span class="fl-sp-author-by"><?php _e('Posted by','fl-simple-posts') ?></span> <span class="fl-sp-author-name"><?php the_author(); ?></span>

		<?php } ?>

		<?php if ($settings->show_date == 'yes' ) { ?>

			<span class="fl-sp-date-on"><?php _e('on','fl-simple-posts') ?></span> <span class="fl-sp-date"><?php the_time('F j, Y'); ?></span>

		<?php } ?>

		<?php if ($settings->show_category == 'yes' ) { ?>

			<span class="fl-sp-categories"><?php the_category(' '); ?></span>

		<?php } ?>

	</div>

	<?php if($settings->show_content == 'excerpt' ) { ?>

		<?php the_excerpt(); ?>

	<?php } elseif($settings->show_content == 'full') { ?>

		<?php the_content(); ?>

	<?php } else { ?>

	<?php } ?>

	<?php if( $settings->show_content == 'excerpt' && $settings->show_readmore == 'yes' ) { ?>
		<div class="fl-sp-readmore">
			<div class="fl-button-wrap fl-button-width-auto fl-button-left">
				<a href="<?php the_permalink(); ?>" target="_self" class="fl-button" role="button">
					<span class="fl-button-text"><?php _e('Read more','fl-simple-posts'); ?></span>
				</a>
			</div>
		</div>
	<?php } ?>

	</div><!-- end fl-sp-content -->

</li><!-- end .fl-sp-entry -->
