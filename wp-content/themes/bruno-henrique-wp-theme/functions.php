<?php
/**
 * Created by PhpStorm.
 * User: brunoht
 * Date: 02/05/2017
 * Time: 15:17
 */

function alphabet_widgets_init() {
	register_sidebar( [
		'name' => 'Sidebar Lateral',
		'id' => 'lateral_01',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	]);
}

add_action('widgets_init', 'alphabet_widgets_init');