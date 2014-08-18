<?php
/*
Template Name: Full Width(No Sidebar)
*/

get_header(); ?>

	<div id="primary" class="full-width content-area .col-md-12">
		<main id="main" class="site-main" role="main">
<?php if ($post->ID == "14"): ?>
	<div style="padding-left:30px;">
<iframe width="853" height="480" src="//www.youtube.com/embed/EsUzI9lZMak" frameborder="0" allowfullscreen></iframe>
</div>
<?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="featured-image"><img src="<?php echo $image[0]; ?>"></div>

</div>
<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
				/*
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
						*/
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
