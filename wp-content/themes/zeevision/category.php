<?php get_header(); ?>
    <div class="tr_slider">
            <div class="container"><?php echo do_shortcode('[metaslider id=39]'); ?></div>
        </div>
	<div id="wrap" class="container w1000 hr">
		
		<section id="content" class="primary mr10" role="main">
		<h2 class="detail_title">
			<?php printf(__('%s', 'zeeVision_language'), '<span>' . single_cat_title( '', false ) . '</span>'); ?>
		</h2>

		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'index' );
		
			endwhile;
			
		themezee_display_pagination();

		endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	