<?php

/*
Plugin Name: Gravity Forms Quiz Accessibility
Description: The Quiz add-on for Gravity Forms is not accessible via keyboard. This plugin allows the use of a keyboard.
Version: 1.0
Author: Austin Cooley
*/

/* NOTES
----------*/

add_action( 'wp_enqueue_scripts', 'ac_accessibility_script', 20);
function ac_accessibility_script () {
$handle = 'gquiz_css';
$list = 'enqueued';
if (wp_style_is( $handle, $list )) {
		wp_register_script( 'ac_quiz_accessibilty', plugin_dir_url(__FILE__).'assets/gf-quiz-accessibility.js', array('jquery', 'gquiz_js'));
        wp_enqueue_script( 'ac_quiz_accessibilty' );
	} else {
		return;
    }
}

 ?>