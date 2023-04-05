<?php
    $num = 2;
    echo pow($num, 10);
?>
<br>
<?php
    $num = 245;
    echo sqrt($num);
?>
<br>
<?php
	$arr = [4, 2, 5, 19, 13, 0, 10];
    $summa = 0;
    $kor = 0;
    foreach ($arr as $elem);
    $kor = pow($elem, 2);
    $summa = $summa + $kor;
    echo $summa;
?>
<br>
<?php
    $num = 379;
    $result = sqrt($num);

    $res1 = round($result);
    echo $res1 . '<br>'; 
    $res2 = round($result, -1);
    echo $res2 . '<br>';
    $res3 = round($result, -2);
    echo $res3 . '<br>';
?>
<?php
    $sqrt = sqrt(587);
    $arr = [
        'floor' => floor($sqrt),
        'ceil' => ceil($sqrt)
    ];
    var_dump($arr);
?>
<br>
<?php
	$arr = [4, -2, 5, 19, -130, 0, 10];
    echo min($arr) . '<br>';
    echo max($arr) . '<br>';
?>
<br>
<?php
	echo mt_rand(1, 100);
?>
<br>
<?php
	$arr = [];
    for ($i = 1; $i <= 10; $i++) {
        $arr[] = mt_rand(1, 100);
    }
    var_dump($arr);
?>
<br>
<?php
	$a = 1;
    $b = -5;
    echo abs($a + $b);
?>