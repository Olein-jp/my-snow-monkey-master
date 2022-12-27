<?php
/**
 * wp_enqueue_scripts.php
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'my-snow-monkey-style',
			MY_SNOW_MONKEY_MASTER_URL . '/build/css/style.css',
			array( Framework\Helper::get_main_style_handle() ),
			filemtime( MY_SNOW_MONKEY_MASTER_PATH . '/build/css/style.css' )
		);

		wp_enqueue_script(
			'my-snow-monkey-scripts',
			MY_SNOW_MONKEY_MASTER_URL . '/build/js/scripts.js',
			null,
			filemtime( MY_SNOW_MONKEY_MASTER_PATH . '/build/js/scripts.js' ),
			true
		);
	}
);
