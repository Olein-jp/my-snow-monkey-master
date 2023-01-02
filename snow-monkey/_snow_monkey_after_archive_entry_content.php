<?php
/**
 * snow_monkey_after_archive_entry_content.php
 * @link https://happy-snow-monkey.olein-design.com/snow_monkey_after_archive_entry_content
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_action(
	'snow_monkey_after_archive_entry_content',
	function() { ?>
		<p>ここは <code>snow_monkey_after_archive_entry_content</code> です</p>
	<?php }
);
