=== Plugin Name ===
Contributors: brandbrilliance
Tags: wp-admin, admin, post state, color, post colours, list, highlight
Requires at least: 3.8
Tested up to: 4.2.2
Stable tag: 1.1.0
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
* Supports the 4.2 status (in black) of the Front Page and Posts Page (blog page) to easily spot those pages

> <strong>IMPORTANT NOTE</strong><br>
> If all your posts or pages have a status of published, nothing will display. This plugin doesn't add anything to regular **published** posts, otherwise the screen will look way too colourful. To see the plugin in action, you will have to set at least one of your posts or pages to DRAFT, PENDING, PROTECTED, PRIVATE or any status **other** than published, to make it show something.

= Caveats =

* Icons appear inside the tag, if enabled.
* Published status: color, no tag.
* Scheduled status: color, no tag
* Protected status: overrides color, but still adds tag (multiple tags support)
* Sticky status: tag only (multiple tags support).
* Front Page, Blog Posts: tag only (Wordpress 4.2 feature)

= Acknowledgements =

* Some inspiration for the tags was taken from the [WordPress Landing Pages](http://wordpress.org/plugins/landing-pages/) plugin.
* Thanks to [Brad Vincent](http://themergency.com) for his [Dashicons Picker](https://github.com/bradvin/dashicons-picker) with some minor modifications and updates.

== Installation ==

1. Use the Wordpress Admin Plugins installer: Search for the plugin name, and click INSTALL and click the ACTIVATE link
1. -or- Download the ZIP: Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins admin page.
1. Ensure you have some posts or pages that are not just published to see the default colors

== Frequently Asked Questions ==

= Are there any settings? Can I change colors, icons, disable icons?  =

Under SETTINGS, there is a Post State Tags settings page where you can do the following:
* Enable/disable the plugin
* Enable/disable the display of the tag icons
* Pick new primary colors, the lighter background color is automatically calculated using RGB/HSL values
* Pick new dashicons


== Screenshots ==

1. Screenshot sample with default colors for a variety of post types
2. Screenshot showing the new WP4.2 Front Page and Posts Page "status" 
3. Screenshot showing the Settings interface where you can adjust settings like colors, icons 

== Changelog ==

= 1.1.0 =
* Added Settings interface for: enable, icon visbility, post status color picker and dashicons picker

= 1.0.1 =
* Modified post archive status dashicon to match icon from Archived Post Status plugin 

= 1.0 =
* First release using standard Wordpress colors
