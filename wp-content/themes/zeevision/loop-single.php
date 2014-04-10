	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<h2 class="detail_title"><span><?php the_title(); ?></span></h2>
		
	    <div class="entry clearfix">
            <?php 
            $link=get_post_custom_values('download_price', get_the_ID());
                if(!empty($link) && isset($link[0])){
                    echo "<div style='padding:10px 0 10px 10px;'>Để nhận ".get_the_title()." bạn có thể tải về tại <a href='".$link[0]."' target='_blank'>đây.</a>";
                }
             ?>
			<?php the_content(); ?>
			<div class="page-links"><?php wp_link_pages(); ?></div>			
		</div>
		
		

	</article>