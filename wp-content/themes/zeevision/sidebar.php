
<section id="sidebar" class="secondary clearfix mr10" role="complementary">
	<?php themezee_widgets_before(); // hook before sidebar widgets ?>

	<?php
		// Check if page and active Sidebar Pages area
		if(is_page() && is_active_sidebar('sidebar-pages')) : 
		
			dynamic_sidebar('sidebar-pages');
			
		// Check if Main Sidebar has widgets
		elseif(is_active_sidebar('sidebar-main')) : 
		
			dynamic_sidebar('sidebar-main');
		
		// Show hint where to add widgets
		else : ?>

		<aside>
			<h3 class="widgettitle"><?php _e('Dịch vụ của chúng tôi', 'zeeVision_language'); ?></h3>
			<p></p>
		</aside>
	
		<?php endif; ?>

	<?php themezee_widgets_after(); // hook after sidebar widgets ?>
</section>
