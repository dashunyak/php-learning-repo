<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(in_array(3, $arr));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_sum($arr);
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_product($arr);
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_sum($arr) / count($arr);
?>
<br>
<?php
    $num = range(1, 100);
    var_dump ($num);
?>
<br>
<?php
    $az = range('a', 'z');
    var_dump ($az);
?>
<br>
<?php
    $num = range(1, 9);
    echo implode('-', $num);
?>
<br>
<?php
    echo array_sum(range(1, 100));
?>
<br>
<?php
    echo array_product(range(1, 10));
?>
<br>
<?php
    $arr1 = [1, 2, 3];
    $arr2 = ['a', 'b', 'c'];
    var_dump(array_merge($num, $az));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(array_slice($arr, 1, 3));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(array_splice($arr, 1, 2));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(array_splice($arr, 1, 3));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(array_splice($arr, 3, 0, ['a', 'b', 'c']));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    $arr = array_splice($arr, 1, 0, ['a', 'b']);
    $arr = array_splice($arr, 6, 0, ['c']);
    $arr = array_splice($arr, 8, 0, ['e']);
    var_dump ($arr);
?>
<br>
<?php
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    $keys = array_keys($arr);
    $values = array_values($arr);
    var_dump ($arr);
?>
<br>
<?php
    $arr1 = ['a', 'b', 'c'];
    $arr2 = [1, 2, 3];
    var_dump(array_combine($arr1, $arr2));
?>
<br>
<?php
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    var_dump(array_flip($arr));
?>
<br>
<?php
    var_dump(array_reverse([1, 2, 3, 4, 5]));
?>
<br>
<?php
    $arr =  ['a', '-', 'b', '-', 'c', '-', 'd'];
    $pos = array_search('-', $arr);
     
    var_dump(array_splice($arr, $pos, 1));
?>
<br>
<?php
    $arr =  ['a', 'b', 'c', 'd', 'e'];
    var_dump(array_replace($arr, [0 => '!', 3 => '!!']));
?>
<br>
<?php
    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
    var_dump(sort($arr)); 
    var_dump(rsort($arr)); 
    var_dump(ksort($arr)); 
    var_dump(krsort($arr));
?>
<br>
<?php
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    echo array_rand($arr);
     
    echo $arr[array_rand($arr)];
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    var_dump(shuffle($arr));
?>
<br>
<?php
    $arr = ['a', 'b', 'c', 'b', 'a'];
    var_dump(array_unique($az));
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    echo array_shift($arr);
    echo array_pop($arr);
?>
<br>
<?php
    $arr = [1, 2, 3, 4, 5];
    array_unshift($arr,0);
    array_push($arr, 6);
?>
<br>
<?php
    $arr = ['a', 'b', 'c'];
    $new = array_pad($arr, 6, '-');
    var_dump ($new);
?>
<br>
<?php
    $arr = array_fill(0, 10, 'x');
    var_dump ($arr);
?>
<br>
<?php
    $arr = range(1, 20);
    $arr = array_chunk($arr, 4);
?>
<br>
<?php
    $num = [1, 2, 3, 4, 5];
    $kv = array_map('sqrt', $num);
    var_dump ($kv);
?>
<br>
<?php
    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [3, 4, 5, 6, 7];
    $arr = array_intersect($arr1, $arr2);
     
    $num = array_diff($arr1, $arr2);
    var_dump($arr);
    var_dump($num);
?>