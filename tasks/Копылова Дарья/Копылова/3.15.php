<?php
	$str = '';
	
	for ($i = -5; $i < 0; $i++) {
		$str .= '0';
	}
	
	echo $str;
?>
<br>
<?php
	$str = '';
	
	for ($i = 1; $i <= 9; $i++) {
		$str = $str . $i;
	}
	
	echo $str; 
?>
<br>
<?php
	$str = '';
	
	for ($i = 9; $i <= 1; $i--) {
		$str = $str . $i;
	}
	
	echo $str; 
?>
<br>
<?php
	$str = '';
	
	for ($i = -1; $i >= -9; $i--) {
		$str = $str . $i;
	}
	
	echo $str; 
?>