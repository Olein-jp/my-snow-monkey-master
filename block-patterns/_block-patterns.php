<?php
/**
 * block-patterns.php
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

/**
 * ブロックパターン追加
 */
add_action(
	'init',
	function () {
		/* 一意のパターンスラッグ名 */
		$my_snow_monkey_master_block_pattern_slug = "/";

		/* 好きなラベル名とスラッグ名を登録 */
		$my_snow_monkey_master_block_pattern_categories = [
			$my_snow_monkey_master_block_pattern_slug => [ 'label' => 'ラベル名を登録' ],
		];

		foreach ( $my_snow_monkey_master_block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		/**
		 * `block-patterns/assets` の中に保存するファイル名（`.php`拡張子を除く）を設定
		 * 例）
		 * `top-news.php` というパターンを用意した場合、`top-news` と設定する
		 */
		$my_snow_monkey_master_block_patterns = [
			'', /* pattern file name */
		];

		foreach ( $my_snow_monkey_master_block_patterns as $block_pattern ) {
			$block_pattern_file = MY_SNOW_MONKEY_MASTER_PATH . '/block-patterns/assets/' . $block_pattern . '.php';

			register_block_pattern(
				$my_snow_monkey_master_block_pattern_slug . $block_pattern,
				require $block_pattern_file
			);
		}
	}
);
