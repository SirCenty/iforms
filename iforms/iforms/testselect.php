<?php
$link = mysqli_connect('localhost', 'centy', '51r c3nt7');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
if (!mysqli_select_db($link,'iforms')) {
    die('Could not select database: ' . mysqli_error());
}

$systemsql = mysqli_query($link,"SELECT * FROM systems");

$data =  array();
foreach ($systemsql as $row) {
	$data[] = $row["entity"];
}


$col_data =  array();
$val_data =  array();
foreach ($systemsql as $row) {
	$col_data[] = $row["name"];
	$val_data[] = $row["entity"];
}

$store_col_data = "";
$store_val_data = "";

//fetch for columns
foreach ($col_data as $id => $system_name) {
	$store_col_data .= "`".$system_name. "`,";
}

//fetch for values
foreach ($val_data as $id => $system_entity) {
	$store_val_data .= "'$".$system_entity. "',";
}


echo $store_col_data;
echo "<br>";
echo $store_val_data;

//$insertsql = mysqli_query($link,"INSERT INTO `network` ($listcols) VALUES ($listvalues)");


mysqli_close($link);
?>

