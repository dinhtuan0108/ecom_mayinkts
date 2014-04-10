<?php

// Set Content Width
if ( ! isset( $content_width ) )
	$content_width = 800;

/*==================================== THEME SETUP ====================================*/

// Load default style.css and Javascripts
add_action('wp_enqueue_scripts', 'themezee_enqueue_scripts');

if ( ! function_exists( 'themezee_enqueue_scripts' ) ):
function themezee_enqueue_scripts() { 
	
	// Register and Enqueue Stylesheet
	wp_register_style('themezee_zeeVision_stylesheet', get_stylesheet_uri());
	wp_enqueue_style('themezee_zeeVision_stylesheet');
	
	// Enqueue jQuery Framework
	wp_enqueue_script('jquery');
	
	// Register and Enqueue FlexSlider JS and CSS if necessary
	$options = get_option('zeevision_options');
	if(isset($options['themeZee_frontpage_slider_active']) and $options['themeZee_frontpage_slider_active'] == 'true' ) :
		
		// FlexSlider CSS
		wp_register_style('themezee_zeeVision_flexslider', get_template_directory_uri() . '/css/flexslider.css');
		wp_enqueue_style('themezee_zeeVision_flexslider');
		
		// FlexSlider JS
		wp_register_script('themezee_jquery_flexslider', get_template_directory_uri() .'/js/jquery.flexslider-min.js', array('jquery'));
		wp_enqueue_script('themezee_jquery_flexslider');
		
		// Register and enqueue slider.js
		wp_register_script('themezee_jquery_frontpage_slider', get_template_directory_uri() .'/js/slider.js', array('themezee_jquery_flexslider'));
		wp_enqueue_script('themezee_jquery_frontpage_slider');
	
	endif;

	// Register and enqueue navigation.js
	wp_register_script('themezee_jquery_navigation', get_template_directory_uri() .'/js/navigation.js', array('jquery'));
	wp_enqueue_script('themezee_jquery_navigation');
	// Register and Enqueue Fonts
    wp_register_style('themezee_default_font', 'http://fonts.googleapis.com/css?family=PT+Sans');
	wp_enqueue_style('themezee_default_font');
	
	wp_register_style('themezee_default_title_font', 'http://fonts.googleapis.com/css?family=Arimo');
	wp_enqueue_style('themezee_default_title_font');
    //add js for responsive
    wp_register_script('themezee_jquery_responsive', get_template_directory_uri() .'/js/reponsive_img.js', array('jquery'));
	wp_enqueue_script('themezee_jquery_responsive');
    
    wp_register_script('themezee_jquery_box_slider', get_template_directory_uri() .'/js/box-slider.js', array('jquery'));
	wp_enqueue_script('themezee_jquery_box_slider');
    
    /**
     *  add customstyle.css
     *  @author diennt@lifetimetech.vn
     */
     wp_register_style('tradelink_customstyle', get_template_directory_uri() . '/css/customstyle.css');
	 wp_enqueue_style('tradelink_customstyle');
	
}
endif;


// Load comment-reply.js if comment form is loaded and threaded comments activated
add_action( 'comment_form_before', 'themezee_enqueue_comment_reply' );
	
function themezee_enqueue_comment_reply() {
	if( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


// Setup Function: Registers support for various WordPress features
add_action( 'after_setup_theme', 'themezee_setup' );
add_filter('widget_text', 'do_shortcode');

if ( ! function_exists( 'themezee_setup' ) ):
function themezee_setup() { 
	
	// init Localization
	load_theme_textdomain('zeeVision_language', get_template_directory() . '/languages' );
	
	// Add Theme Support
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_editor_style();

	// Add Custom Background
	add_theme_support('custom-background', array('default-color' => 'e5e5e5'));

	// Add Custom Header
	add_theme_support('custom-header', array(
		'header-text' => false,
		'width'	=> 1340,
		'height' => 250,
		'flex-height' => true));
		
	// Register Navigation Menus
	register_nav_menu( 'main_navi', __('Main Navigation', 'zeeVision_language') );
}
endif;


// Add custom Image Sizes
add_action( 'after_setup_theme', 'themezee_add_image_sizes' );

if ( ! function_exists( 'themezee_add_image_sizes' ) ):
function themezee_add_image_sizes() { 
	
	// Add Custom Header Image Size
	add_image_size( 'custom_header_image', 1340, 250, true);
	
	// Add Featured Image Size
	add_image_size( 'featured_image', 225, 225, true);
	
	// Add Frontpage Image Size
	add_image_size( 'slider_image', 800, 400, true);

}
endif;


// Register Sidebars
add_action( 'widgets_init', 'themezee_register_sidebars' );

if ( ! function_exists( 'themezee_register_sidebars' ) ):
function themezee_register_sidebars() {
	
	// Register Sidebars
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'zeeVision_language' ),
		'id' => 'sidebar-main',
		'description' => __( 'Appears on posts and also pages (in case Sidebar Pages has no widgets) except frontpage/fullwidth template.', 'zeeVision_language' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => __( 'Sidebar Pages', 'zeeVision_language' ),
		'id' => 'sidebar-pages',
		'description' => __( 'Appears on static pages only. Leave this widget area empty to use Main Sidebar on pages.', 'zeeVision_language' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
	
	// Register Frontpage Template Widgets
	register_sidebar( array(
		'name' => __( 'Frontpage Widgets', 'zeeVision_language' ),
		'id' => 'frontpage-widgets-one',
		'description' => __( 'Three column horizontal widget area displayed on frontpage template.', 'zeeVision_language' ),
		'before_widget' => '<div class="widget-col-third"><div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	));
    
    /**
     * add contact
     * @author diennt@lifetimetech.vn
     */
     register_sidebar( array(
		  'name' => __( 'Contact Widgets', 'zeeVision_language' ),
		  'id' => 'contact-widgets-area1',
		  'description' => __( 'The Contact Widgets.', 'zeeVision_language' ),
		  'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => ''
	 ));

}
endif;


/*==================================== INCLUDE FILES ====================================*/

// Includes all files needed for theme options, custom JS/CSS and Widgets
add_action( 'after_setup_theme', 'themezee_include_files' );

if ( ! function_exists( 'themezee_include_files' ) ):
function themezee_include_files() { 

	// include Theme Option Files
	require( get_template_directory() . '/includes/options/options-setup.php' );
	require( get_template_directory() . '/includes/options/options-framework.php' );

	// include Customization Files
	require( get_template_directory() . '/includes/customization/custom-colors.php' );
	require( get_template_directory() . '/includes/customization/custom-layout.php' );
	require( get_template_directory() . '/includes/customization/custom-jscript.php' );
	
	// include Hooks, Template Tags and extra Features of the theme
	require( get_template_directory() . '/includes/template-tags.php' );
	require( get_template_directory() . '/includes/theme-hooks.php' );
	
}
endif;


/*==================================== THEME FUNCTIONS ====================================*/

/**
     *   create shortcode get service,introduction
     *  @author diennt@lifetimetech.vn
    */
    function get_service($cate,$str='') {
        $pagecontent=get_page($cate['page_id']);
        $content_page=strip_tags($pagecontent->post_content,' ');
        $tmp = explode(" ",$content_page);
        $words= implode(" ",array_splice($tmp,0,20));
        $count_word=str_word_count($content_page);
        if($count_word>20){
            $words.='...';
        }
        $str.='<li class="li_service"><a href="'.get_permalink($pagecontent->ID).'">
                '.get_the_post_thumbnail($pagecontent->ID,"full").'
                <div class="title_expert_service"><a href="'.get_permalink($pagecontent->ID).'">'.get_the_title($pagecontent->ID).'</a></div>
                <div class="expert_service">'.$words.'</div>
                <div class="detail_link"><a href="'.get_permalink($pagecontent->ID).'">'.__('[:vi]Chi tiết[:en]Detail').' &gt;&gt;</a></div>
              </li>';
      return $str;

    } 
    
    function get_expert_introduction($cate,$text='') {
        $pagecontent=get_page($cate['page_id']);
        $content_page=strip_tags($pagecontent->post_content,' ');
        $tmp = explode(" ",$content_page);
        $word= implode(" ",array_splice($tmp,0,100));
        $count_word=str_word_count($content_page);
        if($count_word>100){
            $word.='...';
        }
        $text.='<div class="content_article_text">'.$word.'</div>
                <div class="detail_link"><a href="'.get_permalink($pagecontent->ID).'">'.__('[:vi]Chi tiết[:en]Detail').' &gt;&gt;</a></div>';
        return $text;
    } 
    
    function get_list_service($cate,$text='') {
        $pagecontent=get_page($cate['page_id']);
        $text.='<article  class="list">
    		<div class="entry clearfix">
            <a href="'.get_permalink($pagecontent->ID).'" rel="bookmark">'.get_the_post_thumbnail($pagecontent->ID,"full",array('class'=>'alignleft')).'</a>
    		</div>
    		<h2 class="post-title"><a href="'.get_permalink($pagecontent->ID).'" rel="bookmark">'.get_the_title($pagecontent->ID).'</a></h2>
 	      </article>';
        return $text;
    }
    
    function get_partner($cat,$content='') {
        if (!empty($cat)){
                $args=array(
                        'cat' => $cat['id'],
                        'showposts'=>$cat['number'],
                        'orderby'=>$cat['order_field'],
                        'order'=>$cat['order'],
                        'meta_key' => $cat['order_field'],
      
                );
                if($cat['id']=11){
                    $content.='<div class="view_show_box">';
                    $class_ul='contain-element';
                    $class_li='class="thumb-item"';
                }
                $query = new WP_Query($args);
                if($query->have_posts()){ 
                    $content.='<ul class="partner '.$class_ul.'">';
                    while($query->have_posts()){
                            $query->the_post();
                            $link=get_post_custom_values('page_partner', get_the_ID());
                            if($cat['id']=11){
                                $link=get_post_custom_values('link_program', get_the_ID());
                            }
                            $content.='<li '.$class_li.'><a href="' .$link[0].'" target="_blank" title="'.get_the_title().'">'.get_the_post_thumbnail(get_the_ID(),"full",array('class'=>'partner_img')).'</a></li>';
                    }
                    $content.='</ul>';
                }
                if($cat['id']=11){
                    $content.='</div>';
                }
        }
        return $content;
    } 
    
    function get_list_menu_service($cate,$content='') {
        $categories=get_categories('include='.$cate['cat_id']);
        $cat = get_the_category();
        if(!empty($categories)){
            $content.='<ul>';
            foreach ( $categories as $category ) {
                if ($cat[0]->term_id==$category->term_id) {
                        $class = 'current_page_item';
                    }else{
                        $class='';
                    }
                    $content.='<li class="page_item '.$class.'"><a href="' .get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';
             }
             $content.='</ul>';
        }
        return $content;
    }
             
        
    function register_shortcodes(){
       add_shortcode('service', 'get_service');
       add_shortcode('introduction', 'get_expert_introduction');
       add_shortcode('list_service', 'get_list_service');
       add_shortcode('list_menu_service', 'get_list_menu_service');
       add_shortcode('partner', 'get_partner');
    }
    add_action('init','register_shortcodes'); 
 
   function get_list($cate,$str='') {
        $pagecontent=get_page($cate['page_id']);
        $content_page=strip_tags($pagecontent->post_content,' ');
        $tmp = explode(" ",$content_page);
        $words= implode(" ",array_splice($tmp,0,20));
        $count_word=str_word_count($content_page);
        if($count_word>20){
            $words.='...';
        }
        $str.='<li class="li_service"><a href="'.get_permalink($pagecontent->ID).'">
                '.get_the_post_thumbnail($pagecontent->ID,"full").'
                <div class="title_expert_service"><a href="'.get_permalink($pagecontent->ID).'">'.get_the_title($pagecontent->ID).'</a></div>
                <div class="expert_service">'.$words.'</div>
                <div class="detail_link"><a href="'.get_permalink($pagecontent->ID).'">'.__('[:vi]Chi tiết[:en]Detail').' &gt;&gt;</a></div>
              </li>';
      return $str;

    } 
// Creates a better title element text for output in the head section
add_filter( 'wp_title', 'themezee_wp_title', 10, 2 );

function themezee_wp_title( $title, $sep = '' ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'zeeVision_language' ), max( $paged, $page ) );

	return $title;
}


// Add Default Menu Fallback Function
function themezee_default_menu() {
	echo '<ul id="mainnav-menu" class="menu">'. wp_list_pages('title_li=&echo=0') .'</ul>';
}


// Display Credit Link Function
function themezee_credit_link() { ?>
	<a href="http://themezee.com/themes/zeevision/"><?php _e('zeeVision Theme', 'zeeVision_language'); ?></a>
<?php
}


// Change Excerpt Length
add_filter('excerpt_length', 'themezee_excerpt_length');
function themezee_excerpt_length($length) {
    return 50;
}

/**
 * disable admin_bar in front end
 * @author diennt@lifetimetech.vn
 */
add_filter('show_admin_bar', '__return_false');

// Change Excerpt More
add_filter('excerpt_more', 'themezee_excerpt_more');
function themezee_excerpt_more($more) {
    return '';
}


/* -------disable message update for wp*/
if (!current_user_can('edit_users')) {
    add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

// Custom Template for comments and pingbacks.
if ( ! function_exists( 'themezee_list_comments' ) ):
function themezee_list_comments($comment, $args, $depth) {
	
	$GLOBALS['comment'] = $comment;

	if( $comment->comment_type == 'pingback' or $comment->comment_type == 'trackback' ) : ?>
	
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php _e( 'Pingback:', 'zeeVision_language' ); ?> <?php comment_author_link(); ?> 
			<?php edit_comment_link( __( '(Edit)', 'zeeVision_language' ), '<span class="edit-link">', '</span>' ); ?>
			</p>
	
	<?php else : ?>
	
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

			<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			
				<div class="comment-author vcard clearfix">
					<span class="fn"><?php printf(__('%s says:', 'zeeVision_language'), get_comment_author_link()) ?></span>
					<div class="comment-meta commentmetadata">
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
							<?php echo get_comment_date(); ?>
							<?php echo get_comment_time(); ?>
						</a>
						<?php edit_comment_link(__('(Edit)', 'zeeVision_language'),'  ','') ?>
					</div>
					
				</div>
				
				<div class="comment-content clearfix">
					
					<?php echo get_avatar( $comment, 72 ); ?>
					
					<?php if ($comment->comment_approved == '0') : ?>
						<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'zeeVision_language' ); ?></p>
					<?php endif; ?>
					
					<?php comment_text(); ?>
					
				</div>
				
				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
				
			</div>

<?php
	endif;
	
}
endif;
?>