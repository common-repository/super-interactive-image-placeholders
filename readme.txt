=== Super Interactive Image Placeholders ===
Contributors: superinteractive
Tags: images, development, placeholders, local, uploads, 404
Tested up to: 5.8.2
Requires at least: 4.0
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 0.1

Display placeholder Lorem Picsum images to avoid chains of 404 requests caused by an incomplete uploads directory (while developing)

== Description ==

This simple yet highly effective plugin solves a very common annoyance when developing a WordPress website locally. Often, when running a WordPress application locally for development, you don't have the entire uploads directory at hand. This causes every page load to trigger a large amount of 404 errors, each of which are routed to expensive WordPress requests.

Super Interactive Image Placeholders will automatically replace each request for an image with a random image from [Lorem Picsum](http://picsum.photos), avoiding the 404 errors and speeding up local WordPress development enormously. As a nice side effect, it will also make your website look a lot nicer without all the missing images.

== Installation ==

1. Upload the 'si-placeholder-images' folder to your plugins directory
1. Activate the plugin through the 'Plugins' menu in your WordPress admin
1. Enjoy!

== Frequently Asked Questions ==

= How did you come up with this plugin? =

Super Interactive specializes in high-level WordPress development. We work on large sites with huge upload directories. Having to sync the uploads with our local development environments for all our projects is a pain. This tiny plugin saves us loads of time while developing. We figured others could benefit from it as well.

== Changelog ==

* 0.1 First release

