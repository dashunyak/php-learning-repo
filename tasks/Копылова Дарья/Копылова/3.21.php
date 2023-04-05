<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i + 1];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i + 1] + $arr[$i];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i + 2];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i + 2] + $arr[$i + 1];
	}
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i + 2] + $arr[$i + 1] + $arr[$i - 1];
	}
?>
<br>