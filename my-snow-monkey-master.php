<?php
/**
 * Plugin name: My Snow Monkey Master
 * Description: Snow Monkey をカスタマイズするための最強雛形（を目指しています）
 * Version: 1.0.0
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

/**
 * Snow Monkey 以外のテーマを利用している場合は有効化してもカスタマイズが反映されないようにする
 */
$theme = wp_get_theme( get_template() );
if ( 'snow-monkey' !== $theme->template && 'snow-monkey/resources' !== $theme->template ) {
	return;
}

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'MY_SNOW_MONKEY_MASTER_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'MY_SNOW_MONKEY_MASTER_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Require files
 */
$my_snow_monkey_master_dirs = [
	'functions',
	'snow-monkey',
	'snow-monkey-forms',
	'block-patterns',
	'block-styles'
];

foreach ( $my_snow_monkey_master_dirs as $dir ) {
	$dir_path = MY_SNOW_MONKEY_MASTER_PATH . '/' . $dir . '/';

	if ( file_exists( $dir_path ) ) {
		opendir( $dir_path );

		while ( ( $file = readdir() ) !== false ) {
			if ( ! is_dir( $file ) && ( strtolower( substr( $file, - 4 ) ) == ".php" ) && ( substr( $file, 0, 1 ) != "_" ) ) {
				$load_file = $dir_path . $file;
				require_once( $load_file );
			}
		}
		closedir();
	}
}
