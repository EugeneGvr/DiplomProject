<?php
$file = file_get_contents('./worldticket_fa_IR1.csv');
$new_file = fopen("contacts.csv","w");

$file_array = explode(PHP_EOL, $file);
foreach ($file_array as $line) {
	$new_line = explode(',', $line)[0];
	fputcsv($new_file, sprintf('%s, %s', $new_line, $new_line));
}

fclose($file); 
?>