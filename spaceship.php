<?php

/* 
 * Stretch Projects - What's new in PHP7?
 * 
 * YouTube: http://www.youtube.com/StretchProjects
 * Twitter: http://www.twitter.com/StretchProjects
 * GitHub:  http://www.github.com/StretchProjects
 */

$a = 1;
$b = 10;

if ($a < $b) {
	echo -1;
} else if ($a == $b) {
	echo 0;
} else if ($a > $b) {
	echo 1;
}

echo "<br><hr><br>";

echo $a <=> $b;
