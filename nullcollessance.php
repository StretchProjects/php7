<?php

/* 
 * Stretch Projects - What's new in PHP7?
 * 
 * YouTube: http://www.youtube.com/StretchProjects
 * Twitter: http://www.twitter.com/StretchProjects
 * GitHub:  http://www.github.com/StretchProjects
 */

$name;

$output = (isset($name)) ? $name : 'there';
echo 'Hi ' . $output;

echo "<br><hr><br>";

$out = $name ?? 'there';
echo 'Hi ' . $out;
