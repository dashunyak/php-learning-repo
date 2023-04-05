<?php
	$arr = [];
	
	$arr[] = 1;
	$arr[] = 2;
	$arr[] = 3;
	$arr[] = 4;
	$arr[] = 5;
    $arr[] = 6;
    $arr[] = 7;
    $arr[] = 8;
    $arr[] = 9;
    $arr[] = 10;
?>
<br>
<?php
	$arr = [];
	
	$arr[] = "x";
	$arr[] = "x";
	$arr[] = "x";
	$arr[] = "x";
	$arr[] = "x";
?>
<br>
<?php
	$arr = [];
	
	for ($i = 0; $i <= 100; $i++) {
		$arr[] = $i + 1;
	}
	
	var_dump($arr);
?>
<br>
<?php
	$arr = [];
	
	for ($i = 0; $i <= 99; $i = $i + 2) {
		$arr[] = $i + 1;
	}
	
	var_dump($arr);
?>
<br>