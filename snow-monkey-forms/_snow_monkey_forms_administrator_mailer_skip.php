<?php
/**
 * snow_monkey_forms/administrator_mailer/skip.php
 * 管理者宛メールを送信しない
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/administrator_mailer/skip',
	'__return_true'
);
