<?php
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];  
    echo $arr [3][2];
    echo $arr [1][1];
    echo $arr [2][0];
    echo $arr [0][0];
?> 
<br>
<?php
	$arr = [[1, 2], [3, 4], [5, 6]];
    $sum = 0;
    foreach ($arr as $key){
        $sum = $arr [0][0] + $arr [0][1] + $arr [1][0] + $arr [1][1] + $arr [2][0] + $arr [2][1];
    }
    echo $sum;
?>
<br>
<?php
    $arr = [[[1, 2],    [3, 4],],   [[5, 6],    [7, 8],],];
    $sum = 0;
    $sum = $arr [0][0][0] + $arr [0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
    echo $sum;
?>
<br>
<?php
	$arr = ['boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'], 'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],];
    echo $arr['boys'][1] . '<br>';
    echo $arr['girls'][2];
?>
<br>
<?php
	$arr = [
		'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
		'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
	];
    echo $arr['en'][2];
?>
<br>
<?php
	$arr = [['name' => 'user1','age' => 30,'salary' => 1000,], ['name' => 'user2','age' => 31,'salary' => 2000,],  ['name' => 'user3','age' => 32,'salary' => 3000,]];

    echo $arr[0]['salary'] + $arr[2]['salary'];
?>
<br>