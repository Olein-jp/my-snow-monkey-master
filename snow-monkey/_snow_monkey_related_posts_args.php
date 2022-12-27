<?php
/**
 * snow_monkey_related_posts_args.php
 * 関係記事出力のカスタマイズ
 * @link https://snow-monkey.2inc.org/forums/search/?bbp_search=snow_monkey_related_posts_arg&bbp_forum_id=&bbp_type=
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
*/

add_filter(
	'snow_monkey_related_posts_args',
	function ( $args ) {
		return $args;
	}
);
