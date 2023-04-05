<?php
	$result = 1;
	
	for ($i = 1; $i <= 20; $i++) {
		$result = $result * $i;
	}
	
	echo $result; // искомая сумма
?>
<br>
<?php
	$result = 0;
	
	for ($i = 2; $i <= 100; $i = $i + 2) {
		$result = $result + $i;
	}
	
	echo $result; // искомая сумма
?>
<br>
<?php
	$result = 0;
	
	for ($i = 1; $i <= 99; $i = $i + 2) {
		$result = $result + $i;
	}
	
	echo $result; // искомая сумма
?>
<br>
