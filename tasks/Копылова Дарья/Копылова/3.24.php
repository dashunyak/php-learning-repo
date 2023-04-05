<?php
	$arr = [];
	$str = '';
	
	for ($i = 0; $i < 5; $i++) {
		$str .= 'xx';
		$arr[] = $str;
	}
	
	var_dump($arr); 
?>
<br>
<?php
	$arr = [];
	
	for ($i = 1; $i <= 5; $i++) {
		$str = '';
		
		for ($j = 1; $j <= 5; $j++) {
			$str .= $i;
		}
		
		$arr[] = $str;
	}
	
	var_dump($arr);
?>