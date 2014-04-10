<?php get_header(); ?>

<?php // Retrieve Current Author
	$author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
	<div class="tr_slider">
            <div class="container"><?php echo do_shortcode('[metaslider id=39]'); ?></div>
        </div>
	<div id="wrap" class="container w1000 hr">
		
		<section id="content" class="primary mr10" role="main">
		
			<h2 class="detail_title">
				<?php printf(__('Author Archives: %s', 'zeeVision_language'), '<span>' . esc_attr($author->display_name) . '</span>'); ?>
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