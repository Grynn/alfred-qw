#!/usr/bin/php
<?php

require __DIR__ . '/vendor/autoload.php';

$args = Clue\Arguments\split($argv[1], [ "," ]);
$q1 = join("','", $args);

//Output format: https://www.alfredapp.com/help/workflows/inputs/script-filter/json/
$items[] = [
	'title' => "'$q1'",
	'text' => [ 'copy' => "'$q1'" ],
];


echo json_encode(compact('items'));