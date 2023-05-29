<?php
/**
 * snow_monkey_forms/administrator_mailer/args.php
 * メール送信先をカスタマイズする
 *
 * @link https://olein-design.com/blog/select-admin-send-target-from-form
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/administrator_mailer/args',
	function( $args, $responser, $setting ) {

	},
	10,
	2
);
