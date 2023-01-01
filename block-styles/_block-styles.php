<?php
/**
 * block-styles.php
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_action(
	'init',
	function() {
		/**
		 * ブロックスタイル追加
		 */
		$block_styles = [
			[
				'target' => 'core/button', /* ex) snow-monkey-blocks/btn */
				'name'   => 'sample', /* .is-style-[here] */
				'label'  => 'Block Style Sample', /* ex) 矢印アイコン付き */
			],
		];

		foreach ( $block_styles as $block_style ) {
			register_block_style(
				$block_style['target'],
				array(
					'name'  => $block_style['name'],
					'label' => $block_style['label'],
				)
			);
		}
	}
);
