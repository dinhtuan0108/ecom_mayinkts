<?php  
/* 
Plugin Name: Category Logo
Plugin URI: clavis-solutions.ro/cat_logo 
Description: Plugin api for associating a logo to a category
 Author: OLI Clavis-Solutions 
Version: 1.1 
Author URI:clavis-solutions.ro/OLI
*/
function cat_logo_admin() {		
	include('cat_logo_admin.php');
}

function cat_logo_admin_scripts(){
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
}

function cat_logo_admin_styles(){
	wp_enqueue_style('thickbox');
}

function cat_logo_admin_actions() {
	add_options_page("Category Logo", "Category Logo", 1, "categlogo", "cat_logo_admin");
}

function cat_logo_init(){
	 global $wpdb;
	
	 $table_name = $wpdb->prefix . "cat_logo";
	 $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,	  	  	
	  url VARCHAR(250) DEFAULT '' NOT NULL,
	  UNIQUE KEY id (id)
	);";
 	$wpdb->query($sql);
	add_option("cat_logo_db_version", "1.0");	 
}

function cat_logo_unin(){
	  global $wpdb;
	  $wpdb->query("DROP TABLE".$wpdb->prefix . "cat_logo");
	  delete_option("cat_logo_db_version", "1.0");	
}

function get_cat_logo($id){
	 global $wpdb;
	 $img = $wpdb->get_var('SELECT url FROM '.$wpdb->prefix . "cat_logo where id=$id",0,0);
	 if(empty($img)) return null;
	 return $img;
}

function set_cat_logo($id,$url){
	 global $wpdb;
	 $wpdb->query("INSERT INTO ".$wpdb->prefix . "cat_logo values($id,'$url') ON DUPLICATE KEY UPDATE url='$url'");
}
register_activation_hook(__FILE__,"cat_logo_init");
register_deactivation_hook(__FILE__,"cat_logo_unin");
add_action('admin_menu', 'cat_logo_admin_actions');
if (isset($_GET['page']) && $_GET['page'] == 'categlogo') {
	add_action('admin_print_scripts', 'cat_logo_admin_scripts');
	add_action('admin_print_styles', 'cat_logo_admin_styles');	
}

?>