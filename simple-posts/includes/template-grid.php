<div class="row">
<div id="post-<?php the_ID(); ?>" class="col-sm-4">

	<?php if(has_post_thumbnail() && $settings->show_thumbnail) { ?>

		<div class="fl-sp-thumbnail">

			<?php the_post_thumbnail( $settings->thumb_size ); ?>

		</div>

	<?php }  // End has_post_thumbnail ?>

	<<?php echo $settings->heading_size; ?>><?php the_title(); ?></<?php echo $settings->heading_size; ?>>

	<div class="fl-sp-meta">

		<?php if ($settings->show_author == 'yes' ) { ?>

			<span class="fl-sp-author-by"><?php _e('Posted by') ?></span> <span class="fl-sp-author-name"><?php the_author(); ?></span>

		<?php } ?>

		<?php if ($settings->show_date == 'yes' ) { ?>

			<span class="fl-sp-date-on"><?php _e('on') ?></span> <span class="fl-sp-date"><?php the_time('F j, Y'); ?></span>

		<?php } ?>

		<?php if ($settings->show_category == 'yes' ) { ?>

			<span class="fl-sp-categories"><?php the_category(' '); ?></span>

		<?php } ?>

	</div>

	<?php if($settings->show_excerpt == 'yes' ) { ?>

		<?php the_excerpt(); ?>

	<?php } else { ?>

		<?php the_content(); ?>

	<?php } ?>

</div><!-- end .post -->
</div>
