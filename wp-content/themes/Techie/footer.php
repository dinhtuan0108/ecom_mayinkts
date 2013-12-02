<?php global $theme; ?>
    

	<?php /*
    <div id="footer">
    
        <div id="copyrights">
            <?php
                if($theme->display('footer_custom_text')) {
                    $theme->option('footer_custom_text');
                } else { 
                    ?> &copy; <?php echo date('Y'); ?>  <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a><?php
                }
            ?> 
        </div>
        <div id="credits">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a> | Designed by: <a href="http://www.icarter4.com">carte r4</a> | Thanks to <a href="http://www.ir4isdhc.fr">r4 sdhc</a>, <a href="http://www.r4-3ds.fr">r4</a> and <a href="http://www.r4ifr.fr">r4i</a></div><!-- #credits -->
 
    </div><!-- #footer -->
    */ ?>
</div><!-- #container -->

<?php if($theme->display('footer_widgets')) { ?>
    <div id="footer-widgets" class="clearfix">
    	<div class="footer-widgets-inner">
	        <?php
	        /**
	        * Footer  Widget Areas. Manage the widgets from: wp-admin -> Appearance -> Widgets 
	        */
	        ?>
	        <div class="footer-widget-box">
	            <?php
	                if(!dynamic_sidebar('footer_1')) {
	                    $theme->hook('footer_1');
	                }
	            ?>
	        </div>
	        
	        
	        <div class="footer-widget-box footer-widget-box-last">
	            <?php
	                if(!dynamic_sidebar('footer_3')) {
	                    $theme->hook('footer_3');
	                }
	            ?>
	        </div>		
		</div>

        
    </div>
<?php  } ?>


<?php wp_footer(); ?>
<?php $theme->hook('html_after'); ?>
</body>
</html>