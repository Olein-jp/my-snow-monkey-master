<?php
/**
 * snow_monkey_forms/system_error/message.php
 * システムエラー時に表示されるメッセージをカスタマイズする
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/system_error/message',
	function( $message, $responser ) {

	},
	10,
	2
);
