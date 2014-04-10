<?php 
  $class="";
 if(the_category_ID(false)==1){
    $class="list";
 } ?>
	<article id="post-<?php the_ID(); ?>" class="<?php echo $class; ?>">
		<div class="entry clearfix">
          <?php
             if(the_category_ID(false)==1){
              $link=get_post_custom_values('page_partner', get_the_ID());
          ?>
			<a href="<?php echo $link[0] ?>" target="_blank" rel="bookmark"><?php the_post_thumbnail('full', array('class' => 'alignleft')); ?></a>
		</div>
		<h2 class="post-title"><a href="<?php  echo $link[0] ?>" target="_blank" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php }else if(the_category_ID(false)==5){?>
        <p class="element_price">
            <span><a href="<?php  esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></span>
            <a class="time_element_price"><?php echo get_the_time('d/m/Y', get_the_ID()); ?></a>
        </p>
        <?php }else{?>
        <div class="element_price trade">
            <a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_post_thumbnail('full', array('class' => 'alignleft')); ?></a>
            <div class="trade_left">
                <div class="trade_title"><a href="<?php  esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></div>
                <div class="trade_expert"><?php the_excerpt(); ?></div>
            </div>
            <div class="trade_detail"><a href="<?php esc_url(the_permalink()) ?>"><?php echo __('[:vi]Chi tiết[:en]Detail'); ?> &gt;&gt;</a></div>
        </div>
        <?php } ?>
	</article>