<li id="post-<?php the_ID(); ?>" <?php post_class('fl-sp-entry'); ?>>

	<div class="fl-sp-content">

	<?php if($settings->list_icon) { ?>
		<i class="fl-sp-list-icon <?php echo $settings->list_icon; ?>"></i>
	<?php }  // End list_icon ?>

	<?php if ($settings->show_heading == 'yes' ) { ?>

		<a class="fl-sp-list-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

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
			<a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read more', 'fl-simple-posts'); ?></a>
		</div>
	<?php } ?>

	</div><!-- end fl-sp-content -->

</li><!-- end .fl-sp-entry -->
