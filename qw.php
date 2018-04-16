#!/usr/bin/php
<?php

require __DIR__ . '/vendor/autoload.php';

$args = Clue\Arguments\split($argv[1]);
$q1 = join("','", $args);

echo '<?xml version="1.0"?>';
echo <<<XML
<output>
<items>
<item>
	<title arg="$q1" valid="YES">'$q1'</title>
	<text type="copy">'$q1'</text>
</item>
</items>
</output>
XML;
