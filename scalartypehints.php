<?php

/* 
 * Stretch Projects - What's new in PHP7?
 * 
 * YouTube: http://www.youtube.com/StretchProjects
 * Twitter: http://www.twitter.com/StretchProjects
 * GitHub:  http://www.github.com/StretchProjects
 */

declare(strict_types=1);

function typechecker(int $input) {
	echo 'is a float: ' . is_float($input) . '<br>';
	echo 'is an integer: ' . is_int($input) . '<br>';
	echo 'is an boolean: ' . is_bool($input) . '<br>';
	echo 'is a string: ' . is_string($input) . '<br>';;
}

typechecker(1);
