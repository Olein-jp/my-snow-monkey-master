<?php
/**
 * snow_monkey_forms/validator/error_message.php
 * バリデーションエラーメッセージをカスタマイズする
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/validator/error_message',
	function( $error_message, $validation_name, $name ) {

	},
	10,
	3
);
