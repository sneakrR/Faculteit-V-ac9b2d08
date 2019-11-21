<?php

echo ("Van welk getal wil je de faculteit weten?") . PHP_EOL;

$n = readline ("");
$x = 1;

do {
	$x *= $n;
	$n = $n - 1;
} while ($n > 0);

echo "De faculteit van $n is $x";

