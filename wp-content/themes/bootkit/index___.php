<?php
wp_head();
echo "<h1>Привіт<h1\>";
$str      = 'Kit';
echo $str = apply_filters('my_filter1', $str); // <strong>Kit</strong>
echo apply_filters('my_filter2', $str);        // Hello Kit
do_action('my_action'); // Произошло событие "my_action"!