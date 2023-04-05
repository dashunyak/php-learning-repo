<?php
	$one = 0;
	$two = 1;
	
	for ($i = 1; $i <= 10; $i++) {
		$current = $one + $two;
		
		$one = $two;
		$two = $current;
		
		echo $current . '<br>';
	}
?>
<br>
<?php
	$one = 0;
	$two = 1;
    $three = 2;
	
	for ($i = 1; $i <= 10; $i++) {
		$current = $one + $two + $three;
		
		$one = $two;
		$two = $three;
        $three = $current;
		
		echo $current . '<br>';
	}
?>
<br>