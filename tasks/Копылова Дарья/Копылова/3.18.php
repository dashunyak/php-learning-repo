<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i];
	}
?>
<br>
<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$length = count($arr);
	
	for ($i = 0; $i != $length - 1; $i++) {
		echo $arr[$i];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$length = count($arr);
	
	for ($i = 0; $i != $length - 4; $i++) {
		echo $arr[$i];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	
	for ($i = 1; $i < count($arr); $i++) {
		$sum += $arr[$i];
	}
	
	echo $sum;
?>