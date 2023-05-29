<?php
/**
 * snow_monkey_forms/custom_mail_tag.php
 * メールタグに情報を追加するカスタマイズ
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_filter(
	'snow_monkey_forms/custom_mail_tag',
	function( $value, $name ) {
		if ( 'date' === $name ) { // {data}タグが使われたら
			return date('Y-m-d'); // 日付を返す
		}
		return $value;
	},
	10,
	2
);
