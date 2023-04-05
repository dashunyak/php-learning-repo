<?php
    echo strtoupper('php');
?>
<br>
<?php
    echo strtolower('php');
?>
<br>
<?php
    echo ucfirst('london');
?>
<br>
<?php
    echo lcfirst('London');
?>
<br>
<?php
    echo ucwords('london is the capital of great britain');
?>
<br>
<?php
    $str = 'LONDON';
    $str1 = strtolower($str);
    $str2 = ucfirst($str1);
    echo $str2;
?>
<br>
<?php
    echo strlen('html css php');
?>
<br>
<?php
    $password = '2f93f934jf9j3j9';
    if (strlen($password) > 5 and strlen($password) <10){
        echo 'пароль Нормальный';
    }   else{
        echo 'пароль слишком длинный';
    }
?>
<br>
<?php
    $str = 'html css php';
    echo substr($str, 0, 4) . '<br>';
    echo substr($str, 5, 3) . '<br>';
    echo substr($str, 9, 3) . '<br>';
?>
<br>
<?php
    $str = '123456789';
    echo substr($str, -3);
?>
<br>
<?php
    $str = 'http://yandex.ru';
    if (substr($str, 0, 7) === 'http://') {
        echo 'начинается';
    } else {
        echo 'не начинается';
    }
?>
<br>
<?php
    $str = 'mef.png';
    if (substr($str, -4) === '.png') {
        echo 'начинается';
    } else {
        echo 'не начинается';
    }
?>
<br>
<?php
    $str = 'mef.png';
    if (substr($str, -4) === '.png' or substr($str, -4) === '.jpg') {
        echo 'начинается';
    } else {
        echo 'не начинается';
    }
?>
<br>
<?php
    $str = '123456789';
    $len = strlen($str);
    if ($len > 5) {
        echo substr($str, 0, 5) . '...';
    } else {
        echo $str;
    }
?>
<br>
<?php
    $str = '31.12.2013';
    echo str_replace('.', '-', $str);
?>
<br>
<?php
    $str = 'abc';
    echo (str_replace(['a', 'b', 'c'], [1, 2, 3], $str));
?>
<br>
<?php
    $str = '1a2b3c4b5d6e7f8g9h0';
    echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);
?>
<br>
<?php
    $str = 'abcabc';
    echo strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]). '<br>';
    echo strtr($str, 'abc', '123'); 
?>
<br>
<?php
    $str = '1234567890';
    echo substr_replace($str, '!!!', 2, 5);
?>
<br>
<?php
    $str = 'abc abc abc';
    echo strpos($str, 'b');
?>
<br>
<?php
    $str = 'abc abc abc';
    echo strrpos($str, 'b');
?>
<br>
<?php
    $str = 'abc abc abc';
    echo strpos($str,' b', 3);
?>
<br>
<?php
    $str = 'aaa aaa aaa aaa aaa';
    $first = strpos($str, ' ');
    echo strpos($str, ' ', $first + 1);
?>  
<br>
<?php
    $str = 'aa..aa';
    if (strpos($str, '..') !== false) {
        echo 'есть ..';
    } else {
        echo 'нету ..';
    }   
?>
<br>
<?php
    $str = 'aa..aa';
    if (strpos($str, 'http://') === 0) {
        echo 'начинается';
    } else {
        echo 'не начинается';
    }
?>
<br>
<?php
    $str = 'html css php';
    $arr = explode(' ', $str);
?>
<br>
<?php
    $arr = ['html', 'css', 'php'];
    $str = implode(', ', $arr);
?>
<br>
<?php
    $str = '2023-30-03';
    $arr = explode('-', $str);
    echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];
?>
<br>
<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
?>
<br>
<?php
    $str = '1234567890';
    $arr = str_split($str, 1);
?>
<br>
<?php
    $str = '1234567890';
    $arr = str_split($str, 2);
    echo implode('-', $arr);
?>
<br>
<?php
    $str = '  eee ';
    echo trim($str);
?>
<br>
<?php
    $str = '/php/';
    echo trim($str, '/');
?>
<br>
<?php
    $str = 'word word word';
    echo rtrim($str, '.') . '.';
?>
<br>
<?php
    $str = '12345';
    echo strrev($str);
?>
<br>
<?php
    $str = 'madam';
    if ($str === strrev($str)) {
        echo 'Является';
    } else {
        echo 'Не является';
    }
?>
<br>
<?php
    $str = 'abcdef';
    echo str_shuffle($str);
?>
<br>
<?php
    $str = 'abcdefghijklmnopqrstuvwxyz';
    $str1 = str_shuffle($str);
    echo substr($str1, 0, 6);
?>
<br>
<?php
    $str = '12345678';
    echo number_format($str, 0, ' ', '');
?>
<br>
<?php
    for ($i = 1; $i <= 9; $i++) {
        echo str_repeat('x', $i) . '<br>';
    }
?>
<br>
<?php
    for ($i = 1; $i <= 9; $i++) {
        echo str_repeat($i, $i) . '<br>';
    }
?>
<br>
<?php
    echo htmlspecialchars('html, <b>php</b>, js');  
?>
<br>
<?php
    echo strip_tags('html, <b>php</b>, js');
?>
<br>
<?php
    echo ord('a') . '<br>';
    echo ord('b') . '<br>';
    echo ord('c') . '<br>';
    echo ord(' ') . '<br>';
?>
<br>
<?php
    echo chr(33);
?>
<br>
<?php
    $str = chr(mt_rand(1, 100));
?>
<br>
<?php
    $str = '';
    $len = 5;
    for ($i = 1; $i <= $len; $i++) {
        $str .= chr(mt_rand(97, 122));
    }
?>
<br>
<?php
    $char = 'c';
    $ascii = ord($char);
    if ($ascii >= 65 && $ascii <= 90) {
        echo 'Большая';
    } elseif ($ascii >= 97 && $ascii <= 122) {
        echo 'Маленькая';
    } else {
        echo 'Нету';
    }
?>
<br>
<?php
    echo strchr('ab-cd-ef', '-');
?>
<br>
<?php
    echo strrchr('ab-cd-ef', '-');
?>
<br>
<?php
    echo strstr('ab--cd--ef', '-');
?>