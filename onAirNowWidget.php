<?php
/*
Plugin Name: onAirNowWidget
Plugin URI: http://nothing.golddave.com/
Description: A widget to accompany the onAirNow plugin.
Author: David Goldstein
Version: 1.5
Author URI: http://nothing.golddave.com
*/

add_action('plugins_loaded', 'my_init');
function my_init() {
        if (!function_exists('register_sidebar_widget')) {
                return;
        }
        register_sidebar_widget('onAirNow', 'onAirNowWidget');
}

function onAirNowWidget($args) {
    extract($args);
    echo $before_widget;
    echo $before_title;
    echo $after_title;
    if (function_exists('onAirNow')) onAirNow();
    echo $after_widget;
}
?>