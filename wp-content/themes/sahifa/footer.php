	<div class="clear"></div>
</div><!-- .container /-->
<?php tie_banner('banner_bottom' , '<div class="ads-bottom">' , '</div>' ); ?>

<?php get_sidebar( 'footer' ); ?>				
<div class="clear"></div>
<section id="content-area-footer-2">
          <article class="footer-content">
            <div style="margin-left:150px;">
                Colour Time Printing &amp; Digital Imaging Ltd.<br>
                150 - 1066 West Hastings Street<br>
                Vancouver, BC V6E 3X1
            </div>
          </article>
          <article class="footer-content">
            <div style="margin-left:150px;">
                Phone: 604.682.8307<br>
                Fax: 604.684.7825<br>
                Toll Free: 1.866.372.6567<br>
                Email: <a style="color:#ffffff;" href="mailto:vancouver@colourtime.com">vancouver@colourtime.com</a>
            </div>
          </article>
        </section>
<div class="footer-bottom">
<?php ?>
	<div class="container">
		
		
		
		<div class="aligncenter">
			<?php
				$footer_one  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_one' ));
				echo htmlspecialchars_decode( $footer_one );?>
		</div>
		<div class="clear"></div>
	</div><?php ?><!-- .Container -->
	
        
</div><!-- .Footer bottom -->
<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="tieicon-up-open" title="<?php _e('Scroll To Top' , 'tie'); ?>"></div>
<?php endif; ?>
<?php wp_footer();?>
</body>
</html>