<?php
/**
 * snow_monkey_forms/auto_reply_mailer/skip.php
 * 自動返信メールをスキップする
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/auto_reply_mailer/skip',
	'__return_true'
);
