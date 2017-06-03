<?php
$link = mysqli_connect('localhost', 'centy', '51r c3nt7');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
if (!mysqli_select_db($link,'authforms')) {
    die('Could not select database: ' . mysqli_error());
}
$result = mysqli_query($link,'SELECT auth1 FROM network WHERE auth1 = "VO" AND  authlm = "1" LIMIT 1');

if (!$result) {
	die('Could not query:' . mysqli_error());
}

$row = mysqli_fetch_array($result);

if ($row['auth1'] == 'VO' ) {
	echo 'ule msee';
} else {
	echo 'not there yet';
}

mysqli_close($link);
?>
