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
            <li id="gNavProducts"><a href="/shop"></a></li>
            <li id="gNavSs"><a href="/category/dich-vu"></a></li>
            <li id="gNavSupport"><a href="/cham-soc-khach-hang"></a></li>
            <li id="gNavDl"><a href="/category/tin-tuc"></a></li>
            <li id="gNavAbout"><a href="/lien-he"></a></li>
            </ul>

    	</div>
        
    </div>
  <?php }else{?>
        <div id="second-nav">
            <ul id="gNav2">
				<li id="gNavHome"> <a href="/"></a> </li>
				<li id="gNavProducts2"> <a href="/shop"></a> </li>
				<li id="gNavSs2"> <a href="/category/dich-vu"></a> </li>
				<li id="gNavSupport2"> <a href="/cham-soc-khach-hang"> </a> </li>
				<li id="gNavDl2"> <a href="/category/tin-tuc"> </a> </li>
				<li id="gNavAbout2"> <a href="/lien-he"></a> </li>
			</ul>
            
        
        </div>
        <?php
        $currentUri = $_SERVER["REQUEST_URI"];
        
        $bannerImages = array(
            '/shop'=>array('imageCorver'=>'/wp-content/uploads/2013/11/img-main-products.jpg','title'=>'Products'),
            '/category/dich-vu' => array('imageCorver'=>'/wp-content/uploads/2013/11/img-main-services_solutions.jpg','title'=>'Service'),
            '/cham-soc-khach-hang' => array('imageCorver'=>'/wp-content/uploads/2013/11/img-main-support.jpg','title'=>'Support'),
            '/category/tin-tuc' => array('imageCorver'=>'/wp-content/uploads/2013/11/img-main-support.jpg','title'=>'News'),
            '/lien-he' => array('imageCorver'=>'/wp-content/uploads/2013/11/img-main-support.jpg','title'=>'Contact')
        ); 
        
        ?>
        <?php if($currentUri){?>
            <ul id="breadCrumb">
				<li><a href="/">Home ></a><span><?php echo $bannerImages[$currentUri]['title']; ?></span></li>
			</ul>
            <img src="<?php echo $bannerImages[$currentUri]['imageCorver'] ?>" alt="Banner Image" class="banner-image"/>
            
        <?php } ?>
       
        
        
  <?php }?>
  <br />
  