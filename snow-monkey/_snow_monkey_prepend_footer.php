<?php
/**
 * snow_monkey_prepend_footer.php
 * @link https://happy-snow-monkey.olein-design.com/snow_monkey_prepend_footer
 *
 * @package my-snow-monkey-master
 * @author Olein-jp
 * @license GPL-2.0+
 */
add_action(
	'snow_monkey_prepend_footer',
	function() { ?>
		<p>ここは <code>snow_monkey_prepend_footer</code> です</p>
	<?php }
);
