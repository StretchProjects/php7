<?php

/* 
 * Stretch Projects - What's new in PHP7?
 * 
 * YouTube: http://www.youtube.com/StretchProjects
 * Twitter: http://www.twitter.com/StretchProjects
 * GitHub:  http://www.github.com/StretchProjects
 */

function typechecker($input) {
	echo 'is a float: ' . is_float($input) . '<br>';
	echo 'is an integer: ' . is_int($input) . '<br>';
	echo 'is an boolean: ' . is_bool($input) . '<br>';
	echo 'is a string: ' . is_string($input) . '<br>';;
}

function test() : string {
	return "text";
}

typechecker(test());
