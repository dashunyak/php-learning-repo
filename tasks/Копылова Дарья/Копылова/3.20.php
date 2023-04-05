<?php
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    foreach ($arr as $key => $elem) {
        echo $elem = $elem + (($elem / 100) * 10) . '<br>'; 
    }
?>
<br>

<?php
	$arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    foreach ($arr as $key => $elem) {
        if ($elem <= 400){
            echo $elem = $elem + (($elem / 100) * 10) . '<br>'; 
        }
    }
?>
<br>
<?php
	$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $sum_key = 0;
    $sum_elem = 0;
    $res = 0;
    foreach ($arr as $key => $elem) {
        $sum_key += $key;
        $sum_elem += $elem;
        $res = $sum_key / $sum_elem;
    }
    echo $res;
?>
<br>
<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $mas_key = '';
    $mas_elem = '';
    foreach ($arr as $key => $elem) {
        $mas_key .= $key;
        $mas_elem .= $elem; 
    }
echo $mas_elem . '' . $mas_key;
?>
<br>
<?php
	$arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
    $result = [];

    foreach ($arr as $key => $elem) {
    for (; $elem > 9; $elem = intdiv($elem, 10));
    
    if ($elem === 1 || $elem === 2) {
    $result[] = $arr[$key];
    }
    }
var_dump ($result);
?>