<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_sum($arr) / count($arr);
?>
<br>
<?php
    $arr = range(1, 100);
    echo array_sum($arr);
?>
<br>
<?php
    $arr = range(1, 100);
    echo implode('<br>', $arr);
?>
<br>
<?php
    var_dump(array_fill(0, 10, 'x'));
?>
<br>
<?php
    $arr = range(1, 10);
    $sha = shuffle($arr);
    echo ($sha);
?>
<br>
<?php
    $x = 6;
    $arr = range(1, $x);
    echo array_product($arr);
?>
<br>
<?php
    $x = 12345;
    $arr = str_split($x);
    echo array_sum($arr);
?>
<br>
<?php
    $str = 'abcdef';
    $str1 = strrev(ucfirst(strrev($str)));
    var_dump($str1);
?>
<br>
<?php
    $arr = [1, 2, 3, 4];
    $arr1 = array_map('sqrt', $arr);
    var_dump ($arr1);
?>
<br>
<?php
    $keys = range('a', 'z');
    $values = range(1, 26);
    $arr = array_combine($keys, $values);
    var_dump($arr);
?>
<br>
<?php
    $str = '1234567890';
    $arr = str_split($str);
    $sum = array_sum($arr);
    var_dump($sum);
?>
<br>
<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
    var_dump (array_sum($arr));
?>
<br>
<?php
    $arr = [];
    $count = 1;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $arr[$i][$j] = $count;
            $count++;
        }
    }
?>