<?php
	$arr = [];
	
	for ($i = 0; $i < 5; $i++) {
		for ($j = 0; $j < 5; $j++) {
			$arr[$i][$j] = $j + 1; 
		}
	}
	
	var_dump($arr);
?>