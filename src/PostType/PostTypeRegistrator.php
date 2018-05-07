<?php

namespace Brisum\Wordpress\PostType\Slider\PostType;

use \Brisum\Wordpress\PostType\PostTypeRegistrator as ParentPostTypeRegistator;

class PostTypeRegistrator extends ParentPostTypeRegistator
{
	protected $postType = Slider::POST_TYPE;

	protected $config = [
		'label' => 'Slider',
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'author',
		),
		'has_archive' => true
	];

	protected $rewriteRules = [];
}
