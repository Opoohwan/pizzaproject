<?php
$type = $_POST['name'];
	$filename = $_POST['name'] . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv");

  $out = fopen("php://output", 'w');

	$data = json_decode($_POST['data'], TRUE);

	if ($type == 'pizza') {
		fputcsv($out, array('ID', 'NAME', 'DESCRIPTION'));
		foreach ($data as $pizza) {
			fputcsv($out,array($pizza['id'],$pizza['name'],$pizza['description']));
		}
	} else {
		fputcsv($out, array('ID', 'NAME'));
		foreach ($data as $topping) {
			fputcsv($out,array($topping['id'],$topping['name']));
		}
	}

	fclose($out);
 ?>