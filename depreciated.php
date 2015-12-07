<?php

/* 
 * Stretch Projects - What's new in PHP7?
 * 
 * YouTube: http://www.youtube.com/StretchProjects
 * Twitter: http://www.twitter.com/StretchProjects
 * GitHub:  http://www.github.com/StretchProjects
 */

class Foo {
	public $bar = 0;
	function __construct($param) {
		$this->bar = $param;
	}
}

$container = new Foo(1);

echo $container->bar;
