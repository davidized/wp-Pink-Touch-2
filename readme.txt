== Changelog ==

= 1.1 Nov 5 2012 =
* Add trailing slashes to URLs in comment header
* Move functions for grabbing bits of content into a new file, for separation and organization
* Clean out unused functions
* Escaping fixes; make sure attribute escaping occurs after printing
* Updates for the "audio" post format, remove outdated code from js/audio-player.js, use core version of swfobject and list as a dependency of js/audio-player.js, remove unneeded jQuery dependency
* PNG and JPG image compression
* Add Jetpack compatibility file
* Remove loading of $locale.php
* Add a check is_ssl() to define a protocol for Google fonts in order to ensure it's available for both protocols. 
* New HiDPi-ready screenshot.png file at 600x450