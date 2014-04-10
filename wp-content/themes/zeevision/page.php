<?php get_header(); ?>
    <div class="tr_slider">
            <div class="container"><?php echo do_shortcode('[metaslider id=39]'); ?></div>
        </div>
	<div id="wrap" class="container w1000 hr">
		
		<section id="content" class="primary mr10" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2 class="detail_title"><span><?php the_title(); ?></span></h2>

				<div class="entry clearfix">
					<?php the_content(); ?>		
				</div>
				<?php wp_link_pages(); ?>

			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		</section>
		
		<?php get_sidebar(); ?>
		
	</div>
<?php get_footer(); ?>	