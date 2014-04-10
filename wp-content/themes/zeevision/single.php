<?php get_header(); ?>
    <div class="tr_slider">
            <div class="container"><?php echo do_shortcode('[metaslider id=39]'); ?></div>
        </div>
	<div id="wrap" class="container w1000 hr">
		
		<section id="content" class="primary mr10 w97" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'single' );

			endwhile;
		
		endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	