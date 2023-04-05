<?php
    $num = 1;
    while ($num <= 100){
        echo $num . '<br>';
        $num++;
    }
?>
<br>
<?php
    $num = 100;
    while ($num >= 0){
        echo $num . '<br>';
        $num--;
    }
?>
<br>
<?php
    $num = 2;
    while ($num <= 100){
        echo $num . '<br>';
        $num = $num + 2;
    }
?>
<br>
<?php
	$arr = '';
	
	for ($i = 1; $i <= 10; $i++) {
		$arr .= 'x';
	}
	
	var_dump($arr);
?>
<br>
<?php
	$arr = '';
	
	for ($i = 1; $i <= 10; $i++) {
		$arr .= $i;
	}
	
	var_dump($arr);
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5, 11, 15];
    $aa = [];
    foreach ($arr as $elem) {
        if ($elem > 0 and $elem < 10){
            echo $elem;
        }
    }
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5, 11, 15];
    $aa = [];
    foreach ($arr as $elem) {
        if ($elem === 5){
            echo 'есть';
            break;
        }
    }
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5, 11, 15];
    $summa = 0;
    foreach ($arr as $elem) {
        $summa = $summa + $elem; 
    }
    echo $summa;
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5, 11, 15];
    $summa = 0;
    $count = 0;
    foreach ($arr as $elem) {
        $summa = $summa + ($elem * $elem); 
    }
    echo $summa;
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5, 11, 15];
    $summa = 0;
    $sredne = 0;
    foreach ($arr as $elem) {
        $summa = $summa + $elem;
        $sredne = $summa / count($arr); 
    }
    echo $sredne;
?>
<br>
<?php
    $num = 5;
    $fuck = 1;
 
    for ($i = 1; $i <= $num; $i++) {
        $fuck *= $i;
    }
    echo $fuck;
?>
<br>