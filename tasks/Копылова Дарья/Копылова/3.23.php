<?php
	$str = '';
	
	for ($i = 1; $i <= 5; $i++) {
		$str .= 'xx';
		echo $str . '<br>';
	}
?>
<br>
<?php
	for ($i = 10; $i >= 1; $i = $i - 2) {
		$str = '';
		
		for ($j = 0; $j < $i; $j++) {
			$str .= 'x';
		}
		
		echo $str . '<br>';
	}
?>
