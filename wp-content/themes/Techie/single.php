<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>
    
        <div id="content">
            
            <?php $theme->hook('content_before'); ?>
        
            <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * Find the post formatting for the single post (full post view) in the post-single.php file
                     */
                    get_template_part('post', 'single');
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
            ?>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
        <div class="wrap">
        <h2><img src="/img/h-sidebox_pickup.gif" alt="PICK UP" width="250" height="16" /></h2>
        <p><a href="/about/event/Print13/"><img src="/img/img-sidebox_print13.jpg" alt="Ricoh at Print13" width="250" height="100" border="0" /></a></p>
        <p><a href="/about/company/ataglance/"><img src="/img/img-sidebox_ataglance.jpg" alt="Ricoh at a Glance" width="250" height="100" border="0" /></a></p>
        
        
        <!--wrap--></div>
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>