<?php
/*
Plugin Name: SpeakerDeck.com oEmbeds - Easily Embed Presentations
Description: Simply paste in a SpeakerDeck.com URL, and it will display the presentation. 
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com/
*/

wp_oembed_add_provider('#https?://(www\.)?speakerdeck.com/u/*#','http://speakerdeck.com/oembed.json?url=/',true);
