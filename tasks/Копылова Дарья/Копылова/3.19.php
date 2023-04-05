<?php
	$arr = [1, 2, 3, 4, 5, 6, 7];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] = $arr[$i] * 2;
	}
	
	var_dump($arr); 
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i]--;
	}
	
	var_dump($arr); 
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 10;
	}
	
	var_dump($arr); // выведет [6, 7, 8, 9, 10]
?>