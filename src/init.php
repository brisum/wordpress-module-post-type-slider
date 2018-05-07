<?php

use Brisum\Lib\ObjectManager;
use Brisum\Wordpress\PostType\Slider\PostType\Slider;
use Brisum\Wordpress\PostType\Slider\PostType\PostTypeRegistrator;

$objectManager = ObjectManager::getInstance();

/** @var PostTypeRegistrator */
$objectManager->create('Brisum\Wordpress\PostType\Slider\PostType\PostTypeRegistrator');
