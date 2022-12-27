<?php
/**
 * snow_monkey_recent_posts_widget_args.php
 * 「最近の投稿ブロック」のカスタマイズ
 * @link https://snow-monkey.2inc.org/forums/search/?bbp_search=snow_monkey_recent_posts_widget_args&bbp_forum_id=&bbp_type=
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */

add_filter(
	'snow_monkey_recent_posts_widget_args',
	function ( $args ) {
		return $args;
	}
);
