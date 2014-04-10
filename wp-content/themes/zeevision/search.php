<?php get_header(); ?>
    <div class="tr_slider">
            <div class="container"><?php echo do_shortcode('[metaslider id=39]'); ?></div>
        </div>
	<div id="wrap" class="container w1000 hr">
		
		<section id="content" class="primary mr10" role="main">
		
		<?php if (have_posts()) : ?>
			<h2 class="detail_title">
				<?php printf( __( 'Search Results for: %s', 'zeeVision_language' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h2>
		
		<?php while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'index' );
		
			endwhile;
			
			themezee_display_pagination();

		else : ?>

			<h2 id="search-title" class="archive-title">
				<?php printf( __( 'Search Results for: %s', 'zeeVision_language' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h2>
			
			<div class="post">
				
				<div class="entry">
					<p><?php _e('No matches. Please try again, or use the navigation menus to find what you search for.', 'zeeVision_language'); ?></p>
				</div>
				
			</div>

			<?php endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	