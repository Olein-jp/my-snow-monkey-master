<?php
/**
 * enqueue_styles_scripts.php
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

/**
 * スタイルとスクリプトの読み込み
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		/* 基本CSS読み込み */
		wp_enqueue_style(
			'my-snow-monkey-master-style',
			MY_SNOW_MONKEY_MASTER_URL . '/build/css/style.css',
			array( Framework\Helper::get_main_style_handle() ),
			filemtime( MY_SNOW_MONKEY_MASTER_PATH . '/build/css/style.css' )
		);

		/* 基本JS読み込み */
		wp_enqueue_script(
			'my-snow-monkey-scripts',
			MY_SNOW_MONKEY_MASTER_URL . '/build/js/scripts.js',
			null,
			filemtime( MY_SNOW_MONKEY_MASTER_PATH . '/build/js/scripts.js' ),
			true
		);
	}
);

/**
 * 編集画面用CSS対応と読み込み
 */
add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'editor-styles' );
		add_editor_style( MY_SNOW_MONKEY_MASTER_URL . '/build/css/editor-style.css' );
	}
);
