=== Plugin Name ===
Contributors: ClavisSolutions
Donate link: 
Tags: category,logo,category-logo
Requires at least: 3.2
Tested up to: 3.2
Stable tag: trunk

This is a basic plugin allowing users to associate category to logos.

== Description ==

This is a basic plugin allowing users to associate category to logos.

These logos can be integrated into the theme, so that they show up when a category is viewed.

Also, when an article is viewed, all related category logos can be displayed in the theme.

This is the first version. Works from WordPress 3.2 and up.

== Installation ==

1. Upload `category-logo` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php echo get_cat_logo($id); ?>` in your templates where you whant to get the link

== Frequently Asked Questions ==

= A question that someone might have =


== Screenshots ==

1. Plugin Menu access
2. Click select image and the Media Library picker will be displayed. From here you can either upload a new image or use an existing image.

== Changelog ==
= 1.1 =
* replaced <?= with <?php to avoid compatibility issues
= 1.0 =
* link images to categories

* use WordPress’ internal Media Library to store the images

* get category image link with get_cat_logo($id) where $id is the category id

Features planed for the next realease:

*add mechanism similar to the_category(),get_the_category(), wp_dropdown_categories()

* add shortcode so you can easily insert category image link inside a post