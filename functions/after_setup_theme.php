<?php
/**
 * after_setup_theme.php
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

/**
 * Register Style for Editor
 */
add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'editor-styles' );
		add_editor_style( MY_SNOW_MONKEY_MASTER_URL . '/build/css/editor-style.css' );
	}
);
