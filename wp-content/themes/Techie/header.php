 <?php global $theme; ?><!DOCTYPE html><?php function wp_initialize_the_theme() { if (!function_exists("wp_initialize_the_theme_load") || !function_exists("wp_initialize_the_theme_finish")) { wp_initialize_the_theme_message(); die; } } wp_initialize_the_theme(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); // $theme->meta_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php $theme->hook('meta'); ?>
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/reset.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/defaults.css" type="text/css" media="screen, projection" />
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo THEMATER_URL; ?>/css/ewp.css" type="text/css" media="screen, projection" />

<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
<?php  wp_head(); ?>
<?php $theme->hook('head'); ?>

</head>

<body <?php body_class(); ?>>
<?php $theme->hook('html_before'); ?>

<div id="container">
    <div id="header" align="center">
    	<div id="header-block">
        	<div class="logo">
	        <?php if ($theme->get_option('themater_logo_source') == 'image') { ?> 
	            <a href="<?php echo home_url(); ?>"><img src="<?php $theme->option('logo'); ?>" style="margin:10px" width="143px" height="50px" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
	        <?php } else { ?> 
	            <?php if($theme->display('site_title')) { ?> 
	                <h1 class="site_title"><a href="<?php echo home_url(); ?>"><?php $theme->option('site_title'); ?></a></h1>
	            <?php } ?> 
	            
	            <?php if($theme->display('site_description')) { ?> 
	                <h2 class="site_description"><?php $theme->option('site_description'); ?></h2>
	            <?php } ?> 
	        <?php } ?> 
	        </div><!-- .logo -->
            
         	<div class="pull-right nav-search">
					
                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					    <div>
                            <ul class="prNav">
                                <li>
                                <a href="<?php echo home_url(); ?>/lien-he">Contact</a>
                                </li>
                                 <li>
                                <a href="<?php echo home_url(); ?>/sitemap">Sitemap</a>
                                </li>
                            </ul>
					        <input type="text" value="" name="s" id="s" placeholder="Tìm kiếm...." />
					        <input type="submit" id="searchsubmit" value="" />
					    </div>
					</form>					
				
            </div><!-- .search -->
	        <div class="header-right">
				<div id="top-social-profiles">
		            <?php $theme->hook('social_profiles'); ?>
		        </div>
	            
	        </div><!-- .header-right -->		
		</div>
	
        
    </div><!-- #header -->
    
    <?php if($theme->display('menu_secondary')) { ?>
        <div class="clearfix">
            <?php $theme->hook('menu_secondary'); ?>
        </div>
    <?php } ?>
    
    <?php if ( is_front_page() ) {?>
    <div id="main-top-block">
        <div class="slider-container">
    		<div class="slider-inner">
    			<?php putRevSlider("home") ?> 
    		</div>
    	</div>
        
    	<div id="index-menu">
    		<ul id="gNav">
            <li id="gNavProducts"><a href="/shop"><img src="/img/nav-img-products.gif" alt="" /></a></li>
            <li id="gNavSs"><a href="/category/dich-vu"><img src="/img/nav-img-ss.gif" alt="" /></a></li>
            <li id="gNavSupport"><a href="/cham-soc-khach-hang"><img src="/img/nav-img-support.gif" alt=""  /></a></li>
            <li id="gNavDl"><a href="/category/tin-tuc"><img src="/img/nav-img-dl.gif" alt=""  /></a></li>
            <li id="gNavAbout"><a href="/lien-he"><img src="/img/nav-img-about.gif" alt="" width="" /></a></li>
            </ul>

    	</div>
        
    </div>
  <?php }else{?>
        <div id="second-nav">
            <ul id="gNav2">
				<li id="gNavHome"> <a href="/"> <img height="50" width="153" alt="Home" src="/common/img/header/gnav-img-home.gif" /> </a> </li>
				<li id="gNavProducts2"> <a href="/shop"> <img height="50" width="150" alt="Products" src="/common/img/header/gnav-img-products.gif" /> </a> </li>
				<li id="gNavSs2"> <a href="/category/dich-vu"> <img height="50" width="150" alt="Services &amp; Solutions" src="/common/img/header/gnav-img-ss.gif" /> </a> </li>
				<li id="gNavSupport2"> <a href="/cham-soc-khach-hang"> <img height="50" width="150" alt="Support" src="/common/img/header/gnav-img-support.gif" /> </a> </li>
				<li id="gNavDl2"> <a href="/category/tin-tuc"> <img height="50" width="150" alt="Downloads" src="/common/img/header/gnav-img-dl.gif" /> </a> </li>
				<li id="gNavAbout2"> <a href="/lien-he"> <img height="50" width="153" alt="About RICOH" src="/common/img/header/gnav-img-about.gif" /> </a> </li>
			</ul>
            
           <?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>
			<ul id="breadCrumb">
				<li><a href="/">Home</a><span>&gt;</span></li>
			</ul>
        </div>
        
        <!--<div class="primary-menu-container pull-left">
			<div style="width: 906px;">
				<div class="pull-left">
					<?php if($theme->display('menu_primary')) {   $theme->hook('menu_primary');  } ?>
				</div>
			
		
			</div>
		</div>-->
        
        
  <?php }?>
  <br />
  