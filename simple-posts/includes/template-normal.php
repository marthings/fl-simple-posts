<div id="post-<?php the_ID(); ?>" <?php post_class($settings->normal_layout); ?>>

	<?php if(has_post_thumbnail() && $settings->show_thumbnail == "yes" ) { ?>

		<div class="fl-sp-thumbnail">

			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $settings->thumb_size ); ?></a>

		</div>

	<?php }  // End has_post_thumbnail ?>

	<div class="fl-sp-content">

		<?php if ($settings->show_heading == 'yes' ) { ?>

			<<?php echo $settings->heading_size; ?> class="fl-sp-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo $settings->heading_size; ?>>

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
				<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more','fl-simple-posts'); ?></a>
			</div>
		<?php } ?>

	</div><!-- end fl-sp-content -->

</div><!-- end .post -->
