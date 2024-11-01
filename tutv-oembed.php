<?php
/*
Plugin Name: Tu.Tv Oembed
Plugin URI: http://tu.tv/
Description: Simple plugin para que puedas añadir videos de http://tu.tv a tu blog de Wordpress. Sólo tiene que copiar la dirección (URL) del video en tu post/página

Simple plugin to embed videos from the site http://tu.tv - To use it, just copy URL directed from Tu.Tv to your post/page.

Version: 1.0
Author: Iker Barrena
Author URI: http://tu.tv
*/


/* SI, sólo tiene este código */
wp_oembed_add_provider( 'http://tu.tv/videos/*', 'http://tu.tv/oembed/');

