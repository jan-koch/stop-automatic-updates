=== Plugin Name ===
Contributors: foack
Donate link: https://wpmastery.xyz
Tags: updates
Requires at least: 3.7.0
Tested up to: 5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin disables all automatic updates. No configuration needed.

== Description ==

Upon activation, this plugin uses the "automatic_updater_disabled" filter to prevent automatic updates from being installed.
It does not offer configuration, not even an options page in WP Admin.

Simply install and activate the plugin to disable all automatic updates. Deactivate the plugin to re-enable all automatic updates.

== Installation ==

You can install the plugin directly from the WP repository or upload the plugin via FTP to wp-content/plugins.

== Frequently Asked Questions ==

= How does this plugin work? =

The plugin relies on the "automatic_updater_disabled" filter to stop WordPress from installing any automatic update.
More info here: https://developer.wordpress.org/reference/hooks/automatic_updater_disabled/

== Changelog ==

= 1.0 =
* Initial release.
