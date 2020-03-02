<?php
/*
* Plugin Name: IMDB Auto Embed
* Description: Automatically embed any movie stream using a shortcode and the films IMDB code. With this plugin you can automate your streaming website without having to worry about broken links or searching and uploading movies. Multiple streaming sources are fetched automatically giving you access to more than 100,000 movies.
* Version: 1.0
* Author: DEViATED
* Author URI: https://bit.ly/3cix7JT
*/

// Fetches the stream via the Hydra Movies API.

function VS_embed($atts){
	extract(shortcode_atts( array(
			'id' => 'tt0063350',
			'apikey' => 'XXXXXXXXXXX',
			'apisecret' => 'XXXXXXXXXXXX',
			'width' => 'auto',
			'height' => 'auto',
			'scrolling' => 'no',
			'class' => 'vs-iframe',
			'frameborder' => '0'		   	   
		), $atts ));
	return "<!-- VideoSpider.in IMDB Movie Auto Embed Plugin -->\n<iframe src="https://vsrequest.video/request.php?key={$apikey}&secret_key={$apisecret}&video_id={$id}&tmdb=0&ip='.$_SERVER['REMOTE_ADDR'];" class=\"{$class}\" width=\"{$width}\" height=\"{$height}\" frameborder=\"{$frameborder}\" scrolling=\"{$scrolling}\" allowfullscreen=\"allowfullscreen\"><p>Your browser appears to not support iframes.</p></iframe>"
	; 
}
add_shortcode('IMDB', 'VS_embed');
?>
