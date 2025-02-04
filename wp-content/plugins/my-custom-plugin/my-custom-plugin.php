<?php
/**
 * Plugin Name: My Custom Plugin
 * Description: Описание моего плагина.
 * Version: 1.0.0
 * Author: Ваше имя
 */

function my_shortcode_function() {
    return 'Привет!';
}

add_shortcode( 'my_shortcode', 'my_shortcode_function' );
?>