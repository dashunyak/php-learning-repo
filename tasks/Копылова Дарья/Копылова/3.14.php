<?php
	$num = 2;
    $total = 0;
	
	while ($num <= 1000) {
		$num = $num * 3;
        $total = $total + 1;
	}
	
	echo $total;
?>
<br>
<?php
	$num = 2;
    $total = 0;
	
	for ($num = 2, $total = 0; $num <= 1000; $num = $num * 3, $total = $total + 1);
	echo $total;
?>