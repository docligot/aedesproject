<?php

$series1 = pg_escape_string($_GET['series1']);
$series2 = pg_escape_string($_GET['series2']);

include('db_connect.php');

$query = "SELECT period, $series1, $series2 FROM sales_data";

$result = pg_query($dbc, $query);

if ($result) {
	
	$result_string['labels'] = '';
	$result_string[$series1] = '';
	$result_string[$series2] = '';
	
	while ($row = pg_fetch_array($result)) {
		$result_string['labels'] .= ','.$row['period'];
		$result_string[$series1] .= ','.$row[$series1];
		$result_string[$series2] .= ','.$row[$series2];
	}

	$result_string['labels'] = ltrim($result_string['labels'], ',');
	$result_string[$series1] = ltrim($result_string[$series1], ',');
	$result_string[$series2] = ltrim($result_string[$series2], ',');

	echo json_encode($result_string);

} else {
	echo '';
}

pg_close($dbc);
exit();
