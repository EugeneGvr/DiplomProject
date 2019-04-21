<?php
$json = file_get_contents('./koatuu.json');
$arr = json_decode($json);
foreach ($arr->level1 as $elementLevel1) {
	//var_dump($value->name);
	foreach ($elementLevel1->level2 as $elementLevel2) {
	//var_dump($elementLevel2->name);
		foreach ($elementLevel2->level3 as $elementLevel3) {
		//var_dump($elementLevel2->name);
		var_dump($elementLevel3);
		}
	}
}

