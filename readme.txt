=== Plugin Name ===
Contributors: brandbrilliance
Tags: wp-admin, admin, post state, color, post colours, list, highlight
Requires at least: 3.6
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Highlights the left border color and background color and reformats the post status as visual color tags in the wordpress admin post list view.

== Description ==

Highlights the left border color and background color and reformats the post status as visual color tags in the wordpress admin post list view. Supports the standard Wordpress status for: Published (no styling), Future (Grey), Draft (blue), Pending (green), Private (yellow), Protected (red), Sticky (purple tag only), Archived (brown, via [Archive Post Status](http://wordpress.org/plugins/archived-post-status/) plugin)

= Posts/Pages Features =

* Adds a left thick border color and highlights the line with a light background color, similar to the comments and plugins admin views.
* Modifies the post status tags added to a Page/Post name to have a tag appearance with matching background color and dashicon
* Both these changes make it super easy to spot the variety of types of post status in the admin view
* Supports all Wordpress Post status values: Published (no styling), Future (Grey), Draft (blue), Pending (green), Private (yellow), Protected (red), Sticky (purple tag only)
* Support for additional post statuses Archived (brown) via [Archive Post Status](http://wordpress.org/plugins/archived-post-status/) plugin  
* Supports the 4.2 status (in black) of the Front Page and Blog Post Page to easily spot those pages

> Some inspiration for the tags was taken from the [WordPress Landing Pages](http://wordpress.org/plugins/landing-pages/)

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

== Frequently Asked Questions ==

= Is it possible to define your own colors? =

At present there is no interface, however you can override the CSS file yourself. First backup the existing on in css/style.css and then modify it. Note that your changes might be overwritten by an update, so you might want to keep them in another plugin, or include them (or override them) via your theme's functions.php file.

== Screenshots ==

1. Screenshot sample with default colors for a variety of post types

== Changelog ==

= 1.0 =
* First release using standard Wordpress colors
