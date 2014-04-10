
		<?php themezee_footer_before(); // hook before #footer ?>
		<div id="footer-wrap">
			
			<footer id="footer" class="container clearfix" role="contentinfo">
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('frontpage-widgets-one') ) : 
                 
                  endif; ?>
				<div id="credit-link"><?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
			</footer>
			
		</div>
		<?php themezee_footer_after(); // hook after #footer ?>
	
</div><!-- end #wrapper -->
<?php themezee_wrapper_after(); // hook after #wrapper ?>

<?php wp_footer(); ?>
</body>
</html>