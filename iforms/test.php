<?php
$splitname = explode(" ","Hello world");
$initials = "";

foreach ($splitname as $s) {
	$initials .= $s[0];
}

echo $initials;
?>
